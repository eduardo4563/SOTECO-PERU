<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contáctanos</title>
  <link rel="stylesheet" href="cont.css?777" />
</head>
<body>
  <!-- Loader -->
  <div id="loader">
    <div class="spinner"></div>
    <p class="loader-text">Cargando SOTECO PERÚ...</p>
  </div>

  <!-- WhatsApp flotante -->
  <a href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20necesito%20más%20información%20sobre%20sus%20servicios."
    class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <?php include 'header.php'; ?>
  <!-- 🔥 Hero Contacto (mismo diseño que Servicios) -->
<section class="hero-contacto">
  <div class="hero-contenido">
    <h1>Contáctanos</h1>
    <p>En <strong>SOTECO PERÚ</strong> estamos listos para asesorarte en software, hardware, infraestructura y ciberseguridad. ¡Escríbenos y conversemos sobre tu proyecto!</p>
    
    <div class="hero-kpis">
      <div class="kpi">
        <h4><i class="fas fa-headset"></i> Atención 24/7</h4>
        <small>Soporte Técnico</small>
      </div>
      <div class="kpi">
        <h4><i class="fas fa-envelope-open-text"></i> Respuesta Rápida</h4>
        <small>Menos de 24h</small>
      </div>
      <div class="kpi">
        <h4><i class="fas fa-shield-alt"></i> Confianza</h4>
        <small>Seguridad Garantizada</small>
      </div>
    </div>
  </div>
</section>


  <section class="contacto">
    <div class="contenedor-contacto contenedor-claro">

      <p>¿Tienes alguna duda o sugerencia? ¡Escríbenos!</p>

      <form id="formularioContacto" class="contenedor-claro" method="POST">
        <div class="campo">
          <label for="nombre"><i class="fas fa-user"></i> Nombre:</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required />
        </div>
        <div class="campo">
          <label for="correo"><i class="fas fa-envelope"></i> Correo Electrónico:</label>
          <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required />
        </div>
        <div class="campo">
          <label for="mensaje"><i class="fas fa-comment-dots"></i> Mensaje:</label>
          <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
        </div>
        <button type="submit"><i class="fas fa-paper-plane"></i> Enviar</button>
      </form>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

<!-- QUITÉ el preventDefault para que se envíe realmente -->
<script src="ws.js"></script>
<script src="oscuro.js"></script>
<script>
document.getElementById("formularioContacto").addEventListener("submit", function(e) {
  e.preventDefault(); // evita recargar la página

  let formData = new FormData(this);

  fetch("enviar_formulario.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json()) // esperamos JSON del PHP
  .then(data => {
    Swal.fire({
      icon: data.status,
      title: data.title,
      text: data.message,
      confirmButtonColor: '#3085d6'
    });
    if(data.status === "success") this.reset();
  })
  .catch(() => {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "No se pudo conectar con el servidor."
    });
  });
});
</script>

</html>
