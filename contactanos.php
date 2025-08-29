<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contáctanos</title>
  <link rel="stylesheet" href="cont.css?844" />
</head>
<body>
   <div id="loader">
    <div class="spinner"></div>
    <p class="loader-text">Cargando SOTECO PERÚ...</p>
  </div>
   <a href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20necesito%20más%20información%20sobre%20sus%20servicios."
    class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

   <?php include 'header.php'; ?>
  <section class="contacto">
    <div class="contenedor-contacto contenedor-claro">
      <h2>Contáctanos</h2>
      <p>¿Tienes alguna duda o sugerencia? ¡Escríbenos!</p>
      <form id="formularioContacto" class="contenedor-claro">
        <div class="campo">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required />
        </div>
        <div class="campo">
          <label for="correo">Correo Electrónico:</label>
          <input type="email" id="correo" name="correo" required />
        </div>
        <div class="campo">
          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit">Enviar</button>
        <p class="mensaje-exito" id="mensajeExito" style="display: none;">¡Gracias por contactarnos!</p>
      </form>
    </div>
  </section>

   <?php include 'footer.php'; ?>
</body>

  <script>
    document.getElementById('formularioContacto').addEventListener('submit', function (e) {
  e.preventDefault();

  // Aquí podrías enviar los datos con fetch() o AJAX si lo deseas

  // Mostrar mensaje de éxito
  const mensaje = document.getElementById('mensajeExito');
  mensaje.style.display = 'block';

  // Limpiar formulario
  this.reset();

  // Ocultar mensaje después de unos segundos
  setTimeout(() => {
    mensaje.style.display = 'none';
  }, 4000);
});

  </script>
  <script src="ws.js"></script>
<script src="oscuro.js"></script>
</html>
