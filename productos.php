<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos Tecnológicos</title>
  <link rel="stylesheet" href="productos.css?44141">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include 'header.php'; ?>
  <br><br><br><br><br>

  <div id="loader">
    <div class="spinner"></div>
    <p class="loader-text">Cargando SOTECO PERÚ...</p>
  </div>

  <!-- Botón flotante WhatsApp -->
  <a href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20necesito%20más%20información%20sobre%20sus%20servicios."
    class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <main class="tienda">
    <button id="btnToggleFiltros" class="btn-filtros">
  <i class="fas fa-filter"></i> Filtros
</button>
    <aside class="contenedor-claro filtros">
  <h2>Filtros</h2>

  <label for="filtroCategoria">Categoría</label>
  <select id="filtroCategoria">
    <option value="">Todas</option>
    <!-- Las categorías deben cargarse dinámicamente desde PHP -->
    <?php
      require 'conexion.php';
      $categorias = $conexion->query("SELECT DISTINCT categoria FROM productos WHERE stock >= 5");
      while ($cat = $categorias->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($cat['categoria']) . '">' . htmlspecialchars($cat['categoria']) . '</option>';
      }
    ?>
  </select>

  <label for="filtroOrden">Ordenar por</label>
  <select id="filtroOrden">
    <option value="reciente">Más recientes</option>
    <option value="menor">Precio: menor a mayor</option>
    <option value="mayor">Precio: mayor a menor</option>
  </select>
  
</aside>

<section class="contenedor-claro productos" id="lista-productos">
<?php
require 'conexion.php';

$limite = 10;
$offset = 0;
$baseImg = "https://imagenes.deltron.com.pe/images/productos/on-line/items/large/";
$query = "SELECT * FROM productos WHERE stock >= 5 ORDER BY id DESC LIMIT $limite OFFSET $offset";
$resultado = $conexion->query($query);

while ($producto = $resultado->fetch_assoc()):
  $precio_venta = round($producto['precio_venta'], 2);
  $codigo = strtoupper($producto['codigo']); // Aseguramos mayúsculas
  $codigoMin = strtolower($codigo); 
  $folder1 = substr($codigoMin, 0, 2);
  $folder2 = substr($codigoMin, 2, 2);
  $imgUrl = $baseImg . "{$folder1}/{$folder2}/{$codigoMin}.jpg";


  $fecha_creacion = new DateTime($producto['fecha_creacion']);
  $ahora = new DateTime();
  $intervalo = $fecha_creacion->diff($ahora);
  $esNuevo = $intervalo->days < 2;
?>
  <div class="contenedor-claro producto">
    <?php if ($esNuevo): ?>
      <div class="etiqueta nuevo">NUEVO</div>
    <?php endif; ?>

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
</section>


  </main>
<!-- Botón para cargar más -->
<div id="contenedorBoton" class="contenedor-boton">
  <button id="btnCargarMas" class="boton">Cargar más productos</button>
</div>


 </div>

  <!-- Modal Detalle -->
  <!-- Modal Detalle -->
<div id="modalDetalle" class="modal">
  <div class="modal-contenido animate">
    <span class="cerrar">&times;</span>
    <div class="detalle-grid">
      <!-- Imagen -->
      <div class="detalle-imagen">
        <img id="modalImagen" src="" alt="Producto">
      </div>

      <!-- Info -->
      <div class="detalle-info">
        <h2 id="modalTitulo">Título del Producto</h2>
        <p class="modal-precio" id="modalPrecio">S/. 0.00</p>

        <div class="chips">
          <span class="chip categoria"><i class="fas fa-tag"></i> <span id="modalCategoria"></span></span>
          <span class="chip marca"><i class="fas fa-industry"></i> <span id="modalMarca"></span></span>
          <span class="chip stock"><i class="fas fa-box"></i> Stock: <span id="modalStock"></span></span>
        </div>

        <ul class="detalle-datos">
          <li><strong>Código:</strong> <span id="modalCodigo"></span></li>
          <li><strong>Unidad:</strong> <span id="modalUnidad"></span></li>
        </ul>

        <label for="modalCantidad">Cantidad</label>
        <input type="number" value="1" min="1" id="modalCantidad">

        <button id="btnContacto" class="boton grande">
          <i class="fab fa-whatsapp"></i> Contactar al vendedor
        </button>

        <div class="tabs">
          <details open>
            <summary>Descripción</summary>
            <p id="modalDescripcion">Descripción del producto aquí...</p>
          </details>
          <details>
            <summary>Información Adicional</summary>
            <p>Envío gratuito. Garantía de 1 año.</p>
          </details>
        </div>

        <div class="share">
          <p>Compartir:</p>
          <div class="share-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <br><br>
  <?php include 'footer.php'; ?>
  <script src="oscuro.js"></script>

  <!-- Script Modal -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const modal = document.getElementById("modalDetalle");
      const cerrar = document.querySelector(".cerrar");

      const titulo = document.getElementById("modalTitulo");
      const precio = document.getElementById("modalPrecio");
      const imagen = document.getElementById("modalImagen");
      const descripcion = document.getElementById("modalDescripcion");
      const cantidadInput = document.getElementById("modalCantidad");
      const btnContacto = document.getElementById("btnContacto");

      const categoria = document.getElementById("modalCategoria");
      const codigo = document.getElementById("modalCodigo");
      const marca = document.getElementById("modalMarca");
      const unidad = document.getElementById("modalUnidad");
      const stock = document.getElementById("modalStock");

      let currentProduct = {};

      // Delegación de eventos: escucha clicks en todo el contenedor
document.getElementById("lista-productos").addEventListener("click", function (e) {
  if (e.target.closest(".boton-detalle")) {
    const btn = e.target.closest(".boton-detalle");

    const data = {
      titulo: btn.dataset.titulo,
      precio: btn.dataset.precio,
      imagen: btn.dataset.imagen,
      descripcion: btn.dataset.descripcion,
      categoria: btn.dataset.categoria,
      codigo: btn.dataset.codigo,
      marca: btn.dataset.marca,
      unidad: btn.dataset.unidad,
      stock: btn.dataset.stock
    };

    currentProduct = data;

    titulo.textContent = data.titulo;
    precio.textContent = data.precio;
    imagen.src = data.imagen;
    descripcion.textContent = data.descripcion;
    categoria.textContent = data.categoria;
    codigo.textContent = data.codigo;
    marca.textContent = data.marca;
    unidad.textContent = data.unidad;
    stock.textContent = data.stock;
    cantidadInput.value = 1;

    modal.style.display = "block";
  }
});


      cerrar.onclick = () => modal.style.display = "none";
      window.onclick = (e) => { if (e.target === modal) modal.style.display = "none"; };

      btnContacto.addEventListener("click", function () {
        const cantidad = cantidadInput.value;
        const mensaje = `Hola, estoy interesado en el producto *${currentProduct.titulo}* (${currentProduct.precio}) y deseo adquirir *${cantidad}* unidades.\n\nCódigo: ${currentProduct.codigo}\nCategoría: ${currentProduct.categoria}`;
        const telefono = "51941797953";
        const url = `https://wa.me/${telefono}?text=${encodeURIComponent(mensaje)}`;
        window.open(url, "_blank");
      });
    });
  </script>
<script>
  let offset = 10;

  document.getElementById("btnCargarMas").addEventListener("click", function () {
    const btn = this;
    btn.disabled = true;
    btn.textContent = "Cargando...";

    fetch("cargar_mas.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: "offset=" + offset
    })
    .then(res => res.text())
    .then(html => {
      const contenedor = document.getElementById("lista-productos");
      contenedor.insertAdjacentHTML("beforeend", html);
      offset += 10;
      btn.disabled = false;
      btn.textContent = "Cargar más productos";

      // Reasignar eventos a nuevos botones detalle (si tu modal lo requiere)
      // Si ya usas delegation, puedes omitir esto.
    })
    .catch(err => {
      console.error("Error al cargar más:", err);
      btn.textContent = "Error";
    });
  });
</script>
<script>
  const filtroCategoria = document.getElementById("filtroCategoria");
  const filtroOrden = document.getElementById("filtroOrden");
  const contenedor = document.getElementById("lista-productos");
  const btnCargarMas = document.getElementById("btnCargarMas");

  function cargarProductosFiltrados(offset = 0, append = false) {
    const categoria = filtroCategoria.value;
    const orden = filtroOrden.value;

    const params = new URLSearchParams();
    params.append("categoria", categoria);
    params.append("orden", orden);
    params.append("offset", offset);

    fetch("filtrar_productos.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: params.toString()
    })
    .then(res => res.text())
    .then(html => {
      if (append) {
        contenedor.insertAdjacentHTML("beforeend", html);
      } else {
        contenedor.innerHTML = html;
      }

   const categoriaSeleccionada = filtroCategoria.value;
if (html.trim() === "") {
  btnCargarMas.style.display = "none";
} else {
  // Solo mostrar botón si está en categoría "Todas"
  if (categoriaSeleccionada === "") {
    btnCargarMas.style.display = "block";
    btnCargarMas.disabled = false;
    btnCargarMas.textContent = "Cargar más productos";
  } else {
    btnCargarMas.style.display = "none";
  }
}


    })
    .catch(err => console.error("Error al filtrar:", err));
  }

  // Cuando se cambia un filtro, se reinicia la lista
  filtroCategoria.addEventListener("change", () => {
    offset = 0;
    cargarProductosFiltrados(offset, false);
  });

  filtroOrden.addEventListener("change", () => {
    offset = 0;
    cargarProductosFiltrados(offset, false);
  });

  // Botón "Cargar más" con filtros aplicados
  btnCargarMas.addEventListener("click", function () {
    this.disabled = true;
    this.textContent = "Cargando...";
    offset += 10;
    cargarProductosFiltrados(offset, true);
  });
</script>

  <script src="ws.js"></script>

</body>
</html>
