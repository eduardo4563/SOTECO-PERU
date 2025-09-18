<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Quiénes Somos | SOTECO PERÚ</title>
  <link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@600;700&family=Manrope:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="somos.css?5" />
</head>
<body>
 <?php include 'header.php'; ?>
<header id="quienesSomos">
  <h1>Quiénes Somos</h1>
  <p>Conoce nuestra misión, visión y valores que nos impulsan en cada proyecto tecnológico.</p>
</header>

<section class="wrap">
  <!-- Tarjetas -->
  <div class="grid">
    <div class="card fade-in">
      <h2>Misión</h2>
      <p>Impulsamos la transformación digital llevando la tecnología al siguiente nivel...</p>
      <div class="extra-text">Nuestro equipo garantiza soluciones personalizadas alineadas a los objetivos de cada cliente.</div>
      <button class="btn-toggle">Ver más</button>
    </div>
    <div class="card fade-in">
      <h2>Visión</h2>
      <p>Ser líderes en tecnología y desarrollo de soluciones digitales...</p>
      <div class="extra-text">Transformamos industrias con innovación constante y excelencia en cada entrega.</div>
      <button class="btn-toggle">Ver más</button>
    </div>
    <div class="card fade-in">
      <h2>Valores</h2>
      <ul>
        <li><strong>Innovación:</strong> Siempre a la vanguardia.</li>
        <li><strong>Compromiso:</strong> Crecemos con nuestros clientes.</li>
        <li><strong>Seguridad:</strong> Protegemos lo esencial.</li>
        <li><strong>Calidad:</strong> Soluciones confiables.</li>
      </ul>
      <div class="extra-text">Nuestros valores aseguran transparencia, ética profesional y un impacto positivo.</div>
      <button class="btn-toggle">Ver más</button>
    </div>
    <div class="card fade-in">
      <h2>Propuesta de Valor</h2>
      <p>Más de una década de experiencia en el sector tecnológico...</p>
      <div class="extra-text">Ofrecemos soluciones digitales seguras, escalables y adaptadas a cada necesidad.</div>
      <button class="btn-toggle">Ver más</button>
    </div>
  </div>

  <!-- Timeline -->
  <div class="timeline">
    <div class="timeline-item"><div class="timeline-dot"></div><h3>2010</h3><p>Nacimiento de SOTECO PERÚ con visión innovadora.</p></div>
    <div class="timeline-item"><div class="timeline-dot"></div><h3>2015</h3><p>Expansión en soluciones de ciberseguridad.</p></div>
    <div class="timeline-item"><div class="timeline-dot"></div><h3>2018</h3><p>Alianza con líderes tecnológicos internacionales.</p></div>
    <div class="timeline-item"><div class="timeline-dot"></div><h3>2022</h3><p>Consolidación como referentes en transformación digital.</p></div>
  </div>

  <!-- Counters -->
  <div class="counters">
    <div><div class="counter" data-target="500">0</div><div class="counter-label">Clientes satisfechos</div></div>
    <div><div class="counter" data-target="10">0</div><div class="counter-label">Años de experiencia</div></div>
    <div><div class="counter" data-target="50">0</div><div class="counter-label">Proyectos activos</div></div>
    <div><div class="counter" data-target="24">0</div><div class="counter-label">Soporte 24/7</div></div>
  </div>

  <!-- Equipo -->
  <div class="team">
    <h2>Nuestro Equipo</h2>
    <div class="team-grid">
      <div class="member"><h3>Ana Torres</h3><p>Directora General</p></div>
      <div class="member"><h3>Carlos López</h3><p>Jefe de Innovación</p></div>
      <div class="member"><h3>Lucía Fernández</h3><p>Gerente de Proyectos</p></div>
      <div class="member"><h3>David Ramos</h3><p>Especialista en Ciberseguridad</p></div>
    </div>
  </div>

 
</section>

<script>
  // Fade-in
  const cards=document.querySelectorAll('.fade-in');
  const observer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{if(entry.isIntersecting) entry.target.classList.add('visible')});
  },{threshold:.2});
  cards.forEach(card=>observer.observe(card));

  // Acordeón
  document.querySelectorAll('.btn-toggle').forEach(btn=>{
    btn.addEventListener('click',()=>{
      const extra=btn.previousElementSibling;
      if(extra.style.maxHeight){
        extra.style.maxHeight=null;extra.style.opacity=0;btn.textContent="Ver más";
      }else{
        extra.style.maxHeight=extra.scrollHeight+"px";extra.style.opacity=1;btn.textContent="Ver menos";
      }
    });
  });

  // Counters animados
  const counters=document.querySelectorAll('.counter');
  const speed=150;
  const counterObs=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        counters.forEach(counter=>{
          const update=()=>{
            const target=+counter.getAttribute('data-target');
            const count=+counter.innerText;
            const inc=Math.ceil(target/speed);
            if(count<target){counter.innerText=count+inc;setTimeout(update,40)}
            else{counter.innerText=target}
          };
          update();
        });
        counterObs.disconnect();
      }
    });
  },{threshold:.5});
  counters.forEach(counter=>counterObs.observe(counter));
</script>
 <?php include 'footer.php'; ?>
</body>
</html>
