<?php
require 'conexion.php';
$baseImg = "https://imagenes.deltron.com.pe/images/productos/on-line/items/large/";
$offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0;
$limite = 10;

$query = "SELECT * FROM productos WHERE stock > 0 ORDER BY id DESC LIMIT $limite OFFSET $offset";
$resultado = $conexion->query($query);

while ($producto = $resultado->fetch_assoc()):
  $precio_venta = round($producto['precio_venta'], 2);
    $codigo = strtoupper($producto['codigo']); // Aseguramos mayúsculas
  $codigoMin = strtolower($codigo); 
  $folder1 = substr($codigoMin, 0, 2);
  $folder2 = substr($codigoMin, 2, 2);
  $imgUrl = $baseImg . "{$folder1}/{$folder2}/{$codigoMin}.jpg";

?>
  <div class="contenedor-claro producto">
    <div class="etiqueta nuevo">NUEVO</div>
    <img src="<?= $imgUrl ?>" alt="<?= htmlspecialchars($producto['descripcion']) ?>">
    <div class="contenido">
      <h3><?= htmlspecialchars($producto['descripcion']) ?></h3>
      <p class="marca">Marca: <?= htmlspecialchars($producto['marca']) ?></p>
      <p class="precio">S/. <?= number_format($precio_venta, 2) ?></p>
      <button class="boton boton-detalle"
        data-titulo="<?= htmlspecialchars($producto['descripcion']) ?>"
        data-precio="S/. <?= number_format($precio_venta, 2) ?>"
        data-imagen="<?= $imgUrl ?>"
        data-descripcion="<?= htmlspecialchars($producto['descripcion']) ?>"
        data-marca="<?= htmlspecialchars($producto['marca']) ?>"
        data-codigo="<?= htmlspecialchars($producto['codigo']) ?>"
        data-categoria="<?= htmlspecialchars($producto['categoria']) ?>"
        data-unidad="<?= htmlspecialchars($producto['unidad']) ?>"
        data-stock="<?= htmlspecialchars($producto['stock']) ?>">
        <i class="fas fa-info-circle"></i> Ver detalles
      </button>
    </div>
  </div>
<?php endwhile; ?>
