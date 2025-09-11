<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios | SOTECO PERÚ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="servicios.css">
</head>
<body>

<?php include 'header.php'; ?>

  <!-- Hero Servicios -->
  <section class="hero">
    <div class="bg" aria-hidden="true"></div>
    <div class="wrap content">
      <h1 class="h1">Nuestros Servicios Tecnológicos</h1>
      <p>
        En <b>SOTECO PERÚ</b> ofrecemos soluciones innovadoras en desarrollo de software, soporte, infraestructura y ciberseguridad.  
        Nuestro objetivo es impulsar tu empresa con tecnología confiable, eficiente y segura.
      </p>

      <!-- KPIs -->
      <div class="kpis">
        <div class="kpi">
          <i class="fas fa-briefcase"></i>
          <h4 id="exp">+0</h4>
          <small>Experiencia</small>
        </div>
        <div class="kpi">
          <i class="fas fa-headset"></i>
          <h4 id="soporte">0/7</h4>
          <small>Soporte</small>
        </div>
        <div class="kpi">
          <i class="fas fa-building"></i>
          <h4 id="empresas">+0</h4>
          <small>Empresas Atendidas</small>
        </div>
        <div class="kpi">
          <i class="fas fa-shield-alt"></i>
          <h4 id="seguridad">0%</h4>
          <small>Seguridad</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección Servicios -->
  <section class="servicios-section" id="servicios">
    <div class="servicios-grid">
      
      <div class="servicio-card">
        <div class="servicio-icon"><i class="fas fa-code"></i></div>
        <h3>Desarrollo de Software a Medida</h3>
        <p>Creamos soluciones tecnológicas personalizadas para tu empresa: aplicaciones web, móviles y sistemas escalables.</p>
      </div>
      
      <div class="servicio-card">
        <div class="servicio-icon"><i class="fas fa-headset"></i></div>
        <h3>Soporte Técnico y Mantenimiento</h3>
        <p>Soporte especializado remoto y presencial. Mantenimiento preventivo y correctivo para mantener tus sistemas operativos.</p>
      </div>
      
      <div class="servicio-card">
        <div class="servicio-icon"><i class="fas fa-network-wired"></i></div>
        <h3>Infraestructura y Redes</h3>
        <p>Diseño, instalación y gestión de redes, servidores y soluciones IT. Seguridad y rendimiento garantizados.</p>
      </div>
      
      <div class="servicio-card">
        <div class="servicio-icon"><i class="fas fa-lightbulb"></i></div>
        <h3>Consultoría Tecnológica</h3>
        <p>Tomamos decisiones estratégicas contigo para potenciar tu transformación digital y la eficiencia de tu empresa.</p>
      </div>
      
      <div class="servicio-card">
        <div class="servicio-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Ciberseguridad</h3>
        <p>Protegemos tus datos e infraestructura con soluciones de seguridad: firewalls, backups, control de accesos y más.</p>
      </div>
      
      <div class="servicio-card">
        <div class="servicio-icon"><i class="fas fa-laptop-code"></i></div>
        <h3>Venta e Instalación de Equipos</h3>
        <p>Venta, instalación y configuración de hardware y software confiable: PCs, servidores, licencias y más.</p>
      </div>

    </div>
  </section>

<?php include 'footer.php'; ?>

<!-- Botón flotante WhatsApp -->
<a href="https://wa.me/51941797953" class="btn-whatsapp" target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- Scripts -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
<script src="servicios.js"></script>

</body>
<script>
  // Animación de números en KPIs
function animateValue(id, start, end, duration, prefix = "", suffix = "") {
  const obj = document.getElementById(id);
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    const value = Math.floor(progress * (end - start) + start);
    obj.innerText = prefix + value + suffix;
    if (progress < 1) window.requestAnimationFrame(step);
  };
  window.requestAnimationFrame(step);
}

window.onload = () => {
  animateValue("exp", 0, 10, 2000, "+", " Años");
  animateValue("soporte", 0, 24, 2000, "", "/7");
  animateValue("empresas", 0, 300, 2500, "+", "");
  animateValue("seguridad", 0, 100, 2000, "", "%");

  // ScrollReveal
  ScrollReveal().reveal('.servicio-card', {
    delay: 200,
    duration: 800,
    distance: '50px',
    origin: 'bottom',
    interval: 200,
    easing: 'ease-out',
    reset: false
  });

  // Tilt Effect
  VanillaTilt.init(document.querySelectorAll(".servicio-card"), {
    max: 15,
    speed: 300,
    glare: true,
    "max-glare": 0.3
  });
};

</script>
</html>
