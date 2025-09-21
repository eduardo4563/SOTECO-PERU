<?php
require 'conexion.php';

// Obtener tipo de cambio USD a PEN
$url = "https://open.er-api.com/v6/latest/USD";
$json = @file_get_contents($url);
$data = json_decode($json, true);

$tipo_cambio = 3.8; // valor por defecto
if ($data && $data["result"] === "success") {
    $tipo_cambio = round($data["rates"]["PEN"], 2);
}

// Función para limpiar caracteres especiales
function limpiarTexto($texto) {
    // Convertir a UTF-8 y quitar tildes/acentos
    $texto = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $texto);
    // Eliminar caracteres no permitidos (dejar solo letras, números, guiones y espacios)
    $texto = preg_replace('/[^A-Za-z0-9\-\s]/', '', $texto);
    // Reemplazar múltiples espacios por uno solo
    $texto = preg_replace('/\s+/', ' ', $texto);
    return trim($texto);
}

// Función para generar código de sistema aleatorio
function generarCodigoSistema($longitud = 8) {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $codigo = '';
    for ($i = 0; $i < $longitud; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $codigo;
}

// Validar archivo HTML cargado
if (isset($_FILES['archivo_html']) && $_FILES['archivo_html']['error'] === UPLOAD_ERR_OK) {
    $archivo_tmp = $_FILES['archivo_html']['tmp_name'];
    $html = file_get_contents($archivo_tmp);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    $filas = $xpath->query('//table//tr[td]');
    $productos_cargados = 0;
    $categoria_actual = '';

    $stmt = $conexion->prepare("INSERT INTO productos 
        (codigo, codigosistema, categoria, descripcion, marca, unidad, stock, precio_costo, precio_venta, preciooriginal) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("❌ Error en prepare: " . $conexion->error);
    }

    foreach ($filas as $fila) {
        $columnas = $fila->getElementsByTagName('td');

        // Categoría
        if ($columnas->length > 1) {
            $bgcolor = $fila->getAttribute('bgcolor');
            if (strtoupper($bgcolor) === '#AFC2CF') {
                $categoria_texto = trim($columnas->item(1)->nodeValue);
                $categoria_actual = limpiarTexto($categoria_texto);
                continue;
            }
        }

        if ($columnas->length < 9) continue;

        // Código
        $codigo_raw = trim($columnas->item(0)->nodeValue);
        $codigo_lineas = explode("\n", $codigo_raw);
        $codigo = trim($codigo_lineas[0]);
        $codigo = preg_replace('/[^A-Z0-9\-]/i', '', $codigo);
        $codigo = limpiarTexto($codigo);
        if ($codigo == '' || stripos($codigo, 'CODIGO') !== false) continue;

        // Generar código de sistema
        $codigosistema = generarCodigoSistema(10);

        // Descripción
        $descripcion_raw = trim($columnas->item(1)->nodeValue);
        $descripcion = preg_replace('/\[.*?\]/', '', $descripcion_raw);
        $descripcion = limpiarTexto($descripcion);

        // Stock
        $stock_text = trim($columnas->item(2)->nodeValue);
        $stock = 0;
        if (preg_match('/\>?(\d+)/', $stock_text, $m)) {
            $stock = (int)$m[1];
        }

        // Precio USD
        $precio_texto = trim($columnas->item(3)->nodeValue);
        $precio_dolares = 0.0;
        if (preg_match('/\$([\d,.]+)/', $precio_texto, $m)) {
            $precio_dolares = floatval(str_replace([','], '', $m[1]));
        }

        if ($stock <= 0 || $precio_dolares <= 0) continue;

        // Marca
        $marca_raw = trim($columnas->item(8)->nodeValue);
        $marca = limpiarTexto($marca_raw);

        // Cálculo de precios
        $precio_costo = round($precio_dolares * $tipo_cambio, 2);
        $precio_venta = round($precio_costo * (1 + (2.3 / (log($precio_costo + 1) + 2.5))), 2);

        $unidad = 'UND';

        // Vincular parámetros
        $stmt->bind_param(
            "ssssssiddd",
            $codigo,
            $codigosistema,
            $categoria_actual,
            $descripcion,
            $marca,
            $unidad,
            $stock,
            $precio_costo,
            $precio_venta,
            $precio_dolares
        );
        $stmt->execute();

        $productos_cargados++;
    }

    $stmt->close();

    echo "<br>✅ Se capturaron $productos_cargados productos con tipo de cambio S/ $tipo_cambio.";
} else {
    echo "❌ Error al subir el archivo HTML.";
}
?>
