<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contáctanos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="cont.css?400" />
</head>
<body>
  <div id="loader">
    <div class="spinner"></div>
    <p class="loader-text">Cargando SOTECO PERÚ...</p>
  </div>
  <?php include 'header.php'; ?>

  <!-- Hero -->
  <section class="hero-contacto">
    <h1>Contáctanos</h1>
    <p>En <strong>SOTECO PERÚ</strong> estamos listos para asesorarte en software, hardware, infraestructura y ciberseguridad. ¡Escríbenos y conversemos sobre tu proyecto!</p>

    <div class="hero-kpis">
      <div class="kpi"><i class="fas fa-headset"></i><h4>Atención 24/7</h4><small>Soporte Técnico</small></div>
      <div class="kpi"><i class="fas fa-envelope-open-text"></i><h4>Respuesta Rápida</h4><small>Menos de 24h</small></div>
      <div class="kpi"><i class="fas fa-shield-alt"></i><h4>Confianza</h4><small>Seguridad Garantizada</small></div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="contacto">
    <div class="contacto-grid">
      <div class="contacto-info">
        <h2>Escríbenos</h2>
        <p>¿Tienes dudas o sugerencias? Completa el formulario y te responderemos a la brevedad.</p>
        <ul>
          <li><i class="fas fa-phone"></i> +51 967 655 701</li>
          <li><i class="fab fa-whatsapp"></i> +51 941 797 653</li>
          <li><i class="fas fa-envelope"></i> contacto@sotecoperu.com</li>
        </ul>
      </div>

      <div class="contenedor-contacto">
        <form id="formularioContacto">
          <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required />
          </div>
          <div class="campo">
            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required />
          </div>
          <div class="campo">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje..." required></textarea>
          </div>
          <button type="submit"><i class="fas fa-paper-plane"></i> Enviar</button>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>
<script>
   document.addEventListener('DOMContentLoaded', () => {
  setTimeout(() => {
    document.querySelector('#loader').style.opacity = 0;
    setTimeout(() => document.querySelector('#loader').remove(), 350);
  }, 650);
  renderGrid(true);
});
</script>
</html>
