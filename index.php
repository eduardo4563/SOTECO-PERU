<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Compra tecnología en SOTECO PERÚ S.A.C.: laptops, teclados, mantenimiento y más.">
  <meta name="keywords" content="Servicios tecnológicos, desarrollo web, soporte técnico, ciberseguridad, nube, innovación, Perú">
  <meta name="author" content="SOTECO PERÚ S.A.C.">
    <title>SOTECO PERÚ S.A.C. - Inicio</title>
  <meta property="og:title" content="SOTECO PERÚ S.A.C. - Tecnología al alcance de tu mano">
  <meta property="og:image" content="img/image_no_bg (1).png">
  <meta property="og:description" content="Descubre nuestras ofertas y servicios tecnológicos.">
  <link rel="stylesheet" href="cssIndex.css?555">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="img/image_no_bg-_1_.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@500;700&family=Manrope:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>
  <div id="loader">
    <div class="spinner"></div>
    <p class="loader-text">Cargando SOTECO PERÚ...</p>
  </div>
  <!-- Botón flotante de WhatsApp -->
  <a href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20necesito%20más%20información%20sobre%20sus%20servicios."
    class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
  <!-- Navbar -->
  <?php include 'header.php'; ?>
  <!-- Portada con video -->
  <div class="fondo">
    <div class="video-container">
      <video autoplay muted loop playsinline>
        <source src="img/14218774_3840_2160_25fps.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
      </video>
    </div>
    <div class="esencia-overlay">
      <h1>Bienvenido a <span>SOTECO PERÚ S.A.C.</span></h1>
      <p>Soluciones tecnológicas con 15 años de experiencia y calidad garantizada.</p>
      <a href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20quiero%20cotizar%20un%20producto." target="_blank" class="btn-cotizaahora">Cotiza ahora</a>
      <a  href="https://wa.me/51941797953?text=Hola%20SOTECO%20PERÚ,%20quiero%20un%20presupuesto%20gratis%20para%20mi%20empresa." target="_blank" class="btn-presupuesto">Pide tu presupuesto GRATIS</a>
    </div>
  </div>


  <section>
    <div class="sobre-nosotros" data-aos="fade-up">
      <h2>¿Quiénes Somos?</h2>
      <p>En SOTECO PERÚ impulsamos la transformación digital con innovación, calidad y compromiso. Brindamos soluciones
        integrales en hardware, software y servicios tecnológicos para empresas y persona</p>
      <a href="quienessomos.php#quienesSomos"  class="btn-conocenos">Más sobre nosotros</a>
    </div>
  </section>
  <section class="ofrecemos">
    <h2>¿Qué ofrecemos?</h2>
    <p>Soluciones integrales en tecnología para empresas y personas.</p>

    <div class="ofrecemos-grid">
      <div class="card">
        <i class="fas fa-laptop icono"></i>
        <h3>Hardware & Software</h3>
        <p>Compra equipos y licencias con garantía oficial.</p>
      </div>
      <div class="card">
        <i class="fas fa-tools icono"></i>
        <h3>Soporte Técnico</h3>
        <p>Soporte remoto y presencial inmediato, cuando más lo necesites.</p>
      </div>
      <div class="card">
        <i class="fas fa-network-wired icono"></i>
        <h3>Redes e Infraestructura</h3>
        <p>Tu empresa conectada de forma segura y estable.</p>
      </div>
      <div class="card">
        <i class="fas fa-shield-alt icono"></i>
        <h3>Consultoría & Seguridad</h3>
        <p>Protegemos tus datos y optimizamos tu crecimiento .</p>
      </div>
    </div>

    <a href="servicios.php" class="btn-conocenos2">Ver todos los servicios</a>
  </section>
  <section id="beneficios" data-aos="fade-up">
    <h2>¿Por qué elegirnos?</h2>
    <div class="beneficios">
      <div class="beneficio-card">
        <div class="icono">
          <img src="img/agente-de-servicio-al-cliente.png" alt="Atención personalizada">
        </div>
        <h3>Atención personalizada</h3>
        <p>Nos enfocamos en tus necesidades específicas y te damos soluciones reales.</p>
      </div>
      <div class="beneficio-card">
        <div class="icono">
          <img src="img/ventas.png" alt="Precios competitivos">
        </div>
        <h3>Precios competitivos</h3>
        <p>Te ofrecemos la mejor relación calidad-precio del mercado.</p>
      </div>
      <div class="beneficio-card">
        <div class="icono">
          <img src="img/insignia.png" alt="Soporte técnico">
        </div>
        <h3>Soporte técnico calificado</h3>
        <p>Contamos con profesionales expertos siempre listos para ayudarte.</p>
      </div>
      <div class="beneficio-card">
        <div class="icono">
          <img src="img/proteccion-de-envio.png" alt="Entregas rápidas">
        </div>
        <h3>Entregas rápidas y seguras</h3>
        <p>Tu equipamiento llegará a tiempo y en perfecto estado, garantizado.</p>
      </div>
    </div>
  </section>
  <div class="contenedor-claro esencia2" style="display:none;" data-aos="fade-up">
    <section class="seccion-ofertas">
      <h2 style="text-align: center;">Productos en Oferta</h2>
      <div class="contenedor-carrusel">
        <button class="boton-carrusel izquierda" onclick="cambiarSlide(-1)">❮</button>
        <div class="vista-galeria">
          <div class="galeria-ofertas" id="galeriaOfertas">
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336369_1280.jpg" alt="Laptop">
              <h3>Laptop HP 14"</h3>
              <p class="precio-anterior">Antes: S/2000</p>
              <p class="precio-oferta">Ahora: <strong>S/1699</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <div class="tarjeta-producto">
              <img src="https://cdn.pixabay.com/photo/2016/12/18/20/01/keyboard-1914770_1280.jpg" alt="Teclado">
              <h3>Teclado RGB</h3>
              <p class="precio-anterior">Antes: S/250</p>
              <p class="precio-oferta">Ahora: <strong>S/189</strong></p>
              <button class="boton-ver">Ver más</button>
            </div>
            <!-- Agrega más productos aquí -->
          </div>
        </div>
        <button class="boton-carrusel derecha" onclick="cambiarSlide(1)">❯</button>
      </div>
    </section>
  </div>
  <div id="beneficioss" data-aos="fade-up">
    <h2 class="titulo1">Categorías</h2>
    <div class="categorias">
      <!-- Categoría 1 -->
      <a href="productos.php" style="text-decoration: none;color: #e2e8f0;">
        <div class="categoria">
          <div class="imagen categorias1"></div>
          <label class="descripcion">Hardware (Ventas de equipos y mantenimiento)</label>
        </div>
      </a>

      <!-- Categoría 2 -->
       <a href="servicios.php" style="text-decoration: none;color: #e2e8f0;">
         <div class="categoria">
        <div class="imagen categorias2"></div>
        <label class="descripcion">Software (Instalación y configuración)</label>
      </div>
      </a>
     
    </div>
  </div>
  <section class="novedades-modernas" data-aos="fade-up">
    <h2 class="titulo-novedades">Novedades Tecnológicas</h2>
    <div class="grid-novedades">

      <div class="card-novedad">
        <img src="img/Gemini_Generated_Image_emqrkaemqrkaemqr.png" alt="Teclado Mecánico RGB">
        <div class="contenido-novedad">
          <h3>PCs con Inteligencia Artificial:Potencia que Piensa Contigo</h3>
          <p>La era de la Inteligencia Artificial ha llegado a los ordenadores personales. Presentamos los nuevos PCs
            con IA de HP, diseñados para adaptarse a tus necesidades, optimizar el rendimiento y ofrecerte una
            experiencia de usuario más intuitiva y fluida. ¡Prepárate para un futuro donde tu PC te asiste de forma
            inteligente!</p>
        </div>
      </div>

      <div class="card-novedad">
        <img src="img/Gemini_Generated_Image_emqrkaemqrkaemqr (1).png" alt="Laptop Gamer Nitro 2025">
        <div class="contenido-novedad">
          <h3>Soluciones para Empresas: Crecimiento y Eficiencia Digital</h3>
          <p>Sabemos que la tecnología es clave para el éxito de tu negocio. Por eso, te traemos soluciones que
            simplifican la digitalización. Con Huawei eKit, ahora las pequeñas y medianas empresas pueden acceder a
            soluciones de red y seguridad robustas pero sencillas de implementar. Además, el Micro Data Center
            Plug&Power de ELISE es la respuesta ideal para negocios que necesitan una infraestructura de datos compacta,
            segura y fácil de instalar.</p>
        </div>
      </div>

      <div class="card-novedad">
        <img src="img/Gemini_Generated_Image_9xl4oa9xl4oa9xl4.png" alt="Webcam Full HD">
        <div class="contenido-novedad">
          <h3>Laptops y Componentes de Alto Rendimiento para Gamers</h3>
          <p>Para los amantes de los videojuegos, tenemos lo último en hardware. Explora las nuevas laptops Lenovo
            Legion, equipadas con la tecnología más avanzada para garantizar una experiencia de juego inigualable. Si
            prefieres armar tu propio equipo, contamos con las tarjetas de video más potentes del mercado, como la
            NVIDIA RTX 5060, que te permitirá jugar con gráficos impresionantes y sin interrupciones.</p>
        </div>
      </div>

    </div>
  </section>
  <section class="blog-tecnologia" data-aos="fade-up">
    <h2 class="titulo-blog">Noticias Tecnológicas</h2>
    <div class="blog-container">
      <div class="blog-card">
        <div class="blog-icon icon-azul">
          <i class="fas fa-laptop-code"></i>
        </div>
        <h3>Top 5 laptops 2025</h3>
        <p>Conoce los mejores modelos del año según su rendimiento y precio.</p>
        <a href="top-laptops-2025.php" class="btn-leer">Leer más <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="blog-card">
        <div class="blog-icon icon-rojo">
          <i class="fas fa-desktop"></i>
        </div>
        <h3>¿PC gamer o empresarial?</h3>
        <p>Guía rápida para elegir tu próxima computadora según tu uso.</p>
        <a href="pc_novedades.php" class="btn-leer">Leer más <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>
  <section class="testimonials-section">
    <h2>Clientes satisfechos</h2>
    <div class="carousel">
      <div class="carousel-track">
        <div class="testimonial">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos">
          <p>"Gracias a SOTECO Perú, renovamos todo nuestro hardware a tiempo y a buen precio. Excelente
            servicio."</p>
          <span>— Carlos R., Administrador de Sistemas</span>
        </div>
        <div class="testimonial">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="María">
          <p>"Me encantó la atención personalizada y el soporte técnico. 100% recomendados."</p>
          <span>— María L., Gerente de Compras</span>
        </div>
        <div class="testimonial">
          <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="José">
          <p>"Los precios fueron los mejores que encontré y cumplieron con la entrega sin demoras."</p>
          <span>— José T., Emprendedor</span>
        </div>
      </div>
    </div>
    <div class="carousel-buttons">
      <button onclick="prevTestimonial()">❮</button>
      <button onclick="nextTestimonial()">❯</button>
    </div>
  </section>
  <div class="overlay-newsletter" id="overlayNewsletter"></div>

  <!-- Popup Newsletter -->
  <div class="popup-newsletter" id="popupNewsletter">
    <span class="cerrar-popup" onclick="cerrarPopup()">✖</span>
    <h3>🎁 ¡Obtén un 10% de descuento!</h3>
    <p>Suscríbete y recibe promociones exclusivas por correo.</p>
    <input type="email" placeholder="Ingresa tu correo">
    <button onclick="suscribirse()">Suscribirme</button>
  </div>

  <?php include 'footer.php'; ?>

</body>
<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  function mostrarPopup() {
    const popup = document.getElementById('popupNewsletter');
    const overlay = document.getElementById('overlayNewsletter');

    if (popup && overlay) {
      popup.style.display = 'block';
      overlay.style.display = 'block';
    } else {
      console.warn("No se encontró el popup o el overlay en el DOM.");
    }
  }


  function cerrarPopup() {
    document.getElementById('popupNewsletter').style.display = 'none';
    document.getElementById('overlayNewsletter').style.display = 'none';
    document.body.style.overflow = 'auto';

    // Guarda la fecha y hora actual
    localStorage.setItem('popupUltimaVez', new Date().toISOString());
  }

  function suscribirse() {
    const email = document.querySelector('.popup-newsletter input[type="email"]').value;
    if (email && email.includes('@')) {
      cerrarPopup(); // Puedes enviar el correo al servidor aquí si quieres
    } else {
      alert('Por favor ingresa un correo válido.');
    }
  }

  function hanPasado24Horas() {
    const ultimaVez = localStorage.getItem('popupUltimaVez');
    if (!ultimaVez) return true;

    const ahora = new Date();
    const ultimaFecha = new Date(ultimaVez);
    const diferencia = ahora - ultimaFecha; // En milisegundos

    return diferencia >= 24 * 60 * 60 * 1000; // 24 horas
  }

  if (hanPasado24Horas()) {
    // Mostrar al hacer scroll
    const scrollHandler = () => {
      mostrarPopup();
      localStorage.setItem('popupUltimaVez', new Date().toISOString());
      window.removeEventListener('scroll', scrollHandler);
    };
    window.addEventListener('scroll', scrollHandler, { once: true });

    // Mostrar también si no se hace scroll en 2 segundos
    window.addEventListener('load', () => {
      setTimeout(() => {
        if (hanPasado24Horas()) {
          mostrarPopup();
          localStorage.setItem('popupUltimaVez', new Date().toISOString());
        }
      }, 2000);
    });
  }
</script>


<script src="desvanecimiento.js"></script>
<script src="movercarrusel.js"></script>
<script src="galeriafotos.js"></script>
<script src="carrusel.js"></script>

<script src="ws.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

</html>