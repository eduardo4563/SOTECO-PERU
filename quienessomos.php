<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Quiénes Somos | SOTECO PERÚ</title>
  <link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@600;700&family=Manrope:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="somos.css?0515" />
  <!-- AOS Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
</head>
<body>
  <?php include 'header.php'; ?>

  <!-- HERO -->
  <header id="quienesSomos">
    <h1 >Quiénes Somos</h1>
    <p >
      En <strong>SOTECO PERÚ S.A.C.</strong> somos más que una empresa de tecnología: 
      somos un equipo apasionado que impulsa la innovación digital en cada proyecto.
    </p>
    <p >
      Nuestro compromiso es ofrecer <span class="highlight">soluciones seguras, escalables y personalizadas</span> 
      que transformen negocios, mejoren la productividad y potencien el crecimiento de nuestros clientes.
    </p>
  </header>

  <section class="wrap">
    <!-- Tarjetas -->
    <div class="grid">
      <article class="card" data-aos="zoom-in">
        <div class="icon">🚀</div>
        <h3>Misión</h3>
        <p>Impulsamos la transformación digital llevando la tecnología al siguiente nivel...</p>
        <div class="extra-text">Nuestro equipo garantiza soluciones personalizadas alineadas a los objetivos de cada cliente.</div>
        <button class="btn-toggle" aria-expanded="false">Ver más</button>
      </article>
      <article class="card" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon">🎯</div>
        <h3>Visión</h3>
        <p>Ser líderes en tecnología y desarrollo de soluciones digitales...</p>
        <div class="extra-text">Transformamos industrias con innovación constante y excelencia en cada entrega.</div>
        <button class="btn-toggle" aria-expanded="false">Ver más</button>
      </article>
      <article class="card" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon">🤝</div>
        <h3>Valores</h3>
        <ul>
          <li><strong>Innovación:</strong> Siempre a la vanguardia.</li>
          <li><strong>Compromiso:</strong> Crecemos con nuestros clientes.</li>
          <li><strong>Seguridad:</strong> Protegemos lo esencial.</li>
          <li><strong>Calidad:</strong> Soluciones confiables.</li>
        </ul>
        <div class="extra-text">Nuestros valores aseguran transparencia, ética profesional y un impacto positivo.</div>
        <button class="btn-toggle" aria-expanded="false">Ver más</button>
      </article>
      <article class="card" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon">💡</div>
        <h3>Propuesta de Valor</h3>
        <p>Más de una década de experiencia en el sector tecnológico...</p>
        <div class="extra-text">Ofrecemos soluciones digitales seguras, escalables y adaptadas a cada necesidad.</div>
        <button class="btn-toggle" aria-expanded="false">Ver más</button>
      </article>
    </div>

    <!-- Timeline -->
    <div class="timeline">
      <div class="timeline-item" data-aos="fade-right"><div class="timeline-dot pulse"></div><h3>2010</h3><p>Nacimiento de SOTECO PERÚ con visión innovadora.</p></div>
      <div class="timeline-item" data-aos="fade-left"><div class="timeline-dot pulse"></div><h3>2015</h3><p>Expansión en soluciones de ciberseguridad.</p></div>
      <div class="timeline-item" data-aos="fade-right"><div class="timeline-dot pulse"></div><h3>2018</h3><p>Alianza con líderes tecnológicos internacionales.</p></div>
      <div class="timeline-item" data-aos="fade-left"><div class="timeline-dot pulse"></div><h3>2022</h3><p>Consolidación como referentes en transformación digital.</p></div>
      <div class="timeline-item" data-aos="fade-right"><div class="timeline-dot pulse"></div><h3>2025</h3><p>Más de 500 clientes atendidos en Perú y Latinoamérica.</p></div>
    </div>

    <!-- Counters -->
    <div class="counters">
      <div><div class="counter" data-target="500">0</div><div class="counter-label">Clientes satisfechos</div></div>
      <div><div class="counter" data-target="10">0</div><div class="counter-label">Años de experiencia</div></div>
      <div><div class="counter" data-target="50">0</div><div class="counter-label">Proyectos activos</div></div>
      <div><div class="counter" data-target="24">0</div><div class="counter-label">Soporte 24/7</div></div>
    </div>

    <!-- Equipo -->
    <div class="team" data-aos="fade-up">
      <h2>Nuestro Equipo</h2>
      <div class="team-grid">
        <article class="member"><img src="img/team1.jpg" alt=""><h3>Ana Torres</h3><p>Directora General</p></article>
        <article class="member"><img src="img/team2.jpg" alt=""><h3>Carlos López</h3><p>Jefe de Innovación</p></article>
        <article class="member"><img src="img/team3.jpg" alt=""><h3>Lucía Fernández</h3><p>Gerente de Proyectos</p></article>
        <article class="member"><img src="img/team4.jpg" alt=""><h3>David Ramos</h3><p>Especialista en Ciberseguridad</p></article>
      </div>
    </div>

    <!-- Partners -->
    <div class="partners" data-aos="fade-up">
      <h2>Confían en Nosotros</h2>
      <div class="partner-logos">
        <div><img src="img/logo1.png" alt="Logo 1"></div>
        <div><img src="img/logo2.png" alt="Logo 2"></div>
        <div><img src="img/logo3.png" alt="Logo 3"></div>
        <div><img src="img/logo4.png" alt="Logo 4"></div>
      </div>
    </div>

    <!-- Reconocimientos -->
    <div class="awards" data-aos="fade-up">
      <h2>Reconocimientos</h2>
      <ul>
        <li>🏆 Premio Nacional a la Innovación Tecnológica (2021)</li>
        <li>🌍 Miembros de la Cámara de Comercio de Lima y ALTA Tecnología LATAM</li>
        <li>🔒 Certificación ISO 27001 en Seguridad de la Información</li>
      </ul>
    </div>

    <!-- Responsabilidad Social -->
    <div class="responsabilidad" data-aos="fade-up">
      <h2>Responsabilidad Social</h2>
      <p>En SOTECO PERÚ creemos que la tecnología debe transformar vidas.  
      Apoyamos programas educativos, capacitamos a jóvenes en habilidades digitales y promovemos el uso responsable de la tecnología.</p>
    </div>

    <!-- CTA -->
    <div class="cta" data-aos="zoom-in">
      <h2>¿Listo para transformar tu negocio?</h2>
      <p>Hemos transformado más de <strong>500 empresas</strong>, ¿la tuya será la próxima?</p>
      <a href="contacto.php" class="btn-cta">🚀 Contáctanos</a>
    </div>
  </section>

  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    // Acordeón
    document.querySelectorAll('.btn-toggle').forEach(btn => {
      btn.addEventListener('click', () => {
        const extra = btn.previousElementSibling;
        const expanded = btn.getAttribute("aria-expanded") === "true";
        if (expanded) {
          extra.style.maxHeight = null;
          extra.style.opacity = 0;
          btn.textContent = "Ver más";
          btn.setAttribute("aria-expanded", "false");
        } else {
          extra.style.maxHeight = extra.scrollHeight + "px";
          extra.style.opacity = 1;
          btn.textContent = "Ver menos";
          btn.setAttribute("aria-expanded", "true");
        }
      });
    });

    // Counters
    const counters = document.querySelectorAll('.counter');
    const updateCounter = (counter) => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText;
      const inc = Math.ceil(target / 50);
      if (count < target) {
        counter.innerText = count + inc;
        setTimeout(() => updateCounter(counter), 40);
      } else {
        counter.innerText = target;
      }
    };
    const counterObs = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          updateCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: .5 });
    counters.forEach(c => counterObs.observe(c));
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>
