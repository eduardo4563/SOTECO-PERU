  <?php
require 'conexion.php';

$categoria = $_POST['categoria'] ?? '';
$orden = $_POST['orden'] ?? 'reciente';
$offset = intval($_POST['offset'] ?? 0);
$limite = 10;

$where = "WHERE stock > 0";
if (!empty($categoria)) {
  $categoria = $conexion->real_escape_string($categoria);
  $where .= " AND categoria = '$categoria'";
}

switch ($orden) {
  case 'menor':
    $orderBy = "ORDER BY precio_venta ASC";
    break;
  case 'mayor':
    $orderBy = "ORDER BY precio_venta DESC";
    break;
  default:
    $orderBy = "ORDER BY id DESC";
    break;
}

$query = "SELECT * FROM productos $where $orderBy LIMIT $limite OFFSET $offset";
$resultado = $conexion->query($query);

while ($producto = $resultado->fetch_assoc()):
  $precio_venta = round($producto['precio_venta'], 2);
  $imagen_url = "img/producto-generico.png";
?>
  <div class="contenedor-claro producto">
    <div class="etiqueta nuevo">NUEVO</div>
    <img src="<?= $imagen_url ?>" alt="<?= htmlspecialchars($producto['descripcion']) ?>">
    <div class="contenido">
      <h3><?= htmlspecialchars($producto['descripcion']) ?></h3>
      <p class="marca">Marca: <?= htmlspecialchars($producto['marca']) ?></p>
      <p class="precio">S/. <?= number_format($precio_venta, 2) ?></p>
      <button class="boton boton-detalle"
        data-titulo="<?= htmlspecialchars($producto['descripcion']) ?>"
        data-precio="S/. <?= number_format($precio_venta, 2) ?>"
        data-imagen="<?= $imagen_url ?>"
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
