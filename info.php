<?php
$codigo = "acecor3otc";

// Rutas posibles
$ruta1 = "https://imagenes.deltron.com.pe/images/productos/on-line/items/large/" 
        . substr($codigo, 0, 2) . "/" 
        . substr($codigo, 2, 2) . "/" 
        . $codigo . ".jpg";

$ruta2 = "https://imagenes.deltron.com.pe/images/productos/items/nw/" 
        . substr($codigo, 0, 2) . "/" 
        . $codigo . ".jpg";

$backup = "https://via.placeholder.com/280x280?text=Sin+Imagen";

function existeImagen($url) {
    $headers = @get_headers($url);
    if ($headers && isset($headers[0])) {
        return (strpos($headers[0], '200') !== false);
    }
    return false;
}

// Selección de imagen
if (existeImagen($ruta1)) {
    $imgFinal = $ruta1;
} elseif (existeImagen($ruta2)) {
    $imgFinal = $ruta2;
} else {
    $imgFinal = $backup;
}
?>

<img src="<?php echo $imgFinal; ?>" alt="<?php echo strtoupper($codigo); ?>" width="280" height="280">
