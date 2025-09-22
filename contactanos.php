<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contáctanos | SOTECO PERÚ S.A.C.</title>
   <meta name="description" content="Ponte en contacto con SOTECO PERÚ S.A.C. para consultas sobre productos, servicios tecnológicos, soporte y asesoría. Escríbenos por WhatsApp, correo o formulario.">
  <meta name="keywords" content="contacto SOTECO PERÚ, atención al cliente, soporte, consultas, Lima, Perú, WhatsApp, correo, formulario de contacto">
  <meta name="author" content="SOTECO PERÚ S.A.C.">


  <link rel="icon" href="img/image_no_bg-_1_.ico" type="image/x-icon">
    <meta property="og:title" content="Contactanos | SOTECO PERÚ S.A.C.">
  <meta property="og:image" content="img/image_no_bg (1).png">
  <meta property="og:description" content="contacto SOTECO PERÚ, atención al cliente, soporte, consultas, Lima, Perú, WhatsApp, correo, formulario de contacto.">
  <meta property="og:type" content="website">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="cont.css?5252525" />

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
  <div id="loader">
    <div class="spinner"></div>
    <p class="loader-text">Cargando SOTECO PERÚ...</p>
  </div>

  <!-- Botón flotante de WhatsApp -->
  <a href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20necesito%20más%20información%20sobre%20sus%20servicios."
    class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp" data-aos="zoom-in-left" data-aos-delay="600">
    <i class="fab fa-whatsapp"></i>
  </a>

  <?php include 'header.php'; ?>

  <!-- Hero -->
  <section class="hero-contacto" data-aos="fade" data-aos-delay="100">
    <h1 data-aos="fade-up" data-aos-delay="200">Contáctanos</h1>
    <p data-aos="fade-up" data-aos-delay="400">
      En <strong>SOTECO PERÚ</strong> estamos listos para asesorarte en software, hardware, infraestructura y ciberseguridad. 
      ¡Escríbenos y conversemos sobre tu proyecto!
    </p>

    <div class="hero-kpis">
      <div class="kpi" data-aos="fade-up" data-aos-delay="600"><i class="fas fa-headset"></i><h4>Atención 24/7</h4><small>Soporte Técnico</small></div>
      <div class="kpi" data-aos="fade-up" data-aos-delay="800"><i class="fas fa-envelope-open-text"></i><h4>Respuesta Rápida</h4><small>Menos de 24h</small></div>
      <div class="kpi" data-aos="fade-up" data-aos-delay="1000"><i class="fas fa-shield-alt"></i><h4>Confianza</h4><small>Seguridad Garantizada</small></div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="contacto">
    <div class="contacto-grid">
      <div class="contacto-info" data-aos="fade-right" data-aos-delay="200">
        <h2>Escríbenos</h2>
        <p>¿Tienes dudas o sugerencias? Completa el formulario y te responderemos a la brevedad.</p>
       <ul>
  <li data-aos="fade-up" data-aos-delay="300">
    <i class="fas fa-phone"></i> +51 997 165 701
  </li>
  <li data-aos="fade-up" data-aos-delay="400">
    <i class="fab fa-whatsapp"></i> +51 941 797 953
  </li>
  <li data-aos="fade-up" data-aos-delay="500">
    <i class="fas fa-envelope"></i> contacto@sotecoperu.com
  </li>
  <li data-aos="fade-up" data-aos-delay="600">
    <i class="fas fa-map-marker-alt"></i> C. Jose Gálvez Barrenechea 127, Lima 15087
  </li>
  <li data-aos="fade-up" data-aos-delay="700">
    <i class="fas fa-clock"></i> Lunes a Viernes: 8:00 a.m - 17:00 p.m
  </li>
</ul>


        <!-- Redes sociales -->
        <div class="social-links" data-aos="fade-up" data-aos-delay="800">
          <a href="https://facebook.com/tuempresa" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://linkedin.com/company/tuempresa" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://instagram.com/tuempresa" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <div class="contenedor-contacto" data-aos="fade-left" data-aos-delay="400">
        <form id="formularioContacto">
          <div class="campo" data-aos="fade-up" data-aos-delay="600">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required />
          </div>
          <div class="campo" data-aos="fade-up" data-aos-delay="700">
            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required />
          </div>
          <div class="campo" data-aos="fade-up" data-aos-delay="800">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje..." required></textarea>
          </div>
          <button type="submit" data-aos="fade-up" data-aos-delay="900">
            <i class="fas fa-paper-plane"></i> Enviar
          </button>
        </form>
        <p id="mensajeExito" style="display:none; margin-top:15px; color:#00f5a0; font-weight:bold;">✅ ¡Gracias! Hemos recibido tu mensaje.</p>
      </div>
    </div>

    <!-- Mapa -->
  <div class="mapa" data-aos="fade-up" data-aos-delay="1000">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.923456789!2d-77.0012345!3d-12.0678912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c2abcd123%3A0x9876543210fedcba!2sC.%20Jose%20Gálvez%20Barrenechea%20127%2C%20Lima%2015087!5e0!3m2!1ses!2spe!4v1726789012345"
    width="100%" height="350" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy">
  </iframe>
</div>

  </section>

  <?php include 'footer.php'; ?>

  <!-- Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      setTimeout(() => {
        document.querySelector('#loader').style.opacity = 0;
        setTimeout(() => document.querySelector('#loader').remove(), 350);
      }, 650);

      // Confirmación de envío
      const form = document.getElementById('formularioContacto');
      const mensajeExito = document.getElementById('mensajeExito');
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        form.reset();
        mensajeExito.style.display = 'block';
        setTimeout(() => mensajeExito.style.display = 'none', 5000);
      });
    });
  </script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
      easing: 'ease-out'
    });
  </script>
  <script src="ws.js"></script>
<script src="protection.js"></script>
</body>
</html>
