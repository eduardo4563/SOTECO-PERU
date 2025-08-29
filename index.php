<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOTECO PERÚ - Inicio</title>
  <meta name="description" content="Compra tecnología en SOTECO PERÚ: laptops, teclados, mantenimiento y más.">
  <meta property="og:title" content="SOTECO PERÚ - Tecnología al alcance de tu mano">
  <meta property="og:image" content="img/og-imagen.jpg">
  <meta property="og:description" content="Descubre nuestras ofertas y servicios tecnológicos.">
  <link rel="stylesheet" href="cssIndex.css?8555">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
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
  <div class="fondo">
    <div class="carrusel-container">
      <div class="carrusel">
        <div class="slide">
          <img src="img/computadorslaptos.webp" alt="Imagen 1">
        </div>
        <div class="slide">
          <img
            src="img/DALL·E 2025-03-07 15.22.23 - A sleek and modern logo for 'SOTECO PERU', a company specializing in hardware, software development, and cybersecurity. The logo should have a minimal.webp"
            alt="Imagen 2">
        </div>
        <div class="slide">
          <img src="img/image.webp" alt="Imagen 3">
        </div>
      </div>
      <div class="indicators">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
      </div>
    </div>
  </div>
  <section class="contenedor-claro esencia">
    <div class="esencia-container">
      <h2>🌟 Nuestra Esencia</h2>
      <p>Impulsamos la transformación digital con <span>innovación</span>, <span>calidad</span> y
        <span>compromiso</span>.
      </p>
      <a href="quienessomos.html" target="_blank" class="btn-conocenos">Conócenos</a>
    </div>
  </section>
  <div data-aos="fade-up" class="contenedor-claro">
    <!-- SECCIÓN ¿Por qué elegirnos? -->
    <section id="beneficios" data-aos="fade-up">
      <h2 style="text-align:center;">¿Por qué elegirnos?</h2>
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
          <p>Contamos con técnicos expertos siempre listos para ayudarte.</p>
        </div>
        <div class="beneficio-card">
          <div class="icono">
            <img src="img/proteccion-de-envio.png" alt="Entregas rápidas">
          </div>
          <h3>Entregas rápidas y seguras</h3>
          <p>Tu pedido llegará a tiempo y en perfecto estado, garantizado.</p>
        </div>
      </div>
    </section>
    <div class="contenedor-claro" data-aos="fade-up">
      <section class="seccion-ofertas">
        <h2 style="text-align: center;">🔥 Productos en Oferta</h2>
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
        <div class="categoria">
          <div class="imagen categorias1"></div>
          <label class="descripcion">Hardware (Ventas de equipos y mantenimiento)</label>
        </div>
        <!-- Categoría 2 -->
        <div class="categoria">
          <div class="imagen categorias2"></div>
          <label class="descripcion">Software (Instalación y configuración)</label>
        </div>
      </div>
    </div>



    <section class="novedades-modernas" data-aos="fade-up">
      <h2 class="titulo-novedades">🆕 Novedades Tecnológicas</h2>
      <div class="grid-novedades">

        <div class="card-novedad">
          <img src="img/teclado-nuevo.jpg" alt="Teclado Mecánico RGB">
          <div class="contenido-novedad">
            <h3>Teclado Mecánico RGB</h3>
            <p>Switches silenciosos y retroiluminación personalizada. ¡Lo último en gaming!</p>
          </div>
        </div>

        <div class="card-novedad">
          <img src="img/laptop-gamer-nueva.jpg" alt="Laptop Gamer Nitro 2025">
          <div class="contenido-novedad">
            <h3>Laptop Gamer Nitro 2025</h3>
            <p>RTX 4060, pantalla 165Hz y refrigeración avanzada. ¡Ya en tienda!</p>
          </div>
        </div>

        <div class="card-novedad">
          <img src="img/webcam-fullhd.jpg" alt="Webcam Full HD">
          <div class="contenido-novedad">
            <h3>Webcam Full HD</h3>
            <p>Video en 1080p ideal para reuniones, clases y streaming.</p>
          </div>
        </div>

      </div>
    </section>



    <!-- Blog o Noticias -->
    <section class="blog-tecnologia" data-aos="fade-up">
      <h2 class="titulo-blog"><i class="fas fa-newspaper"></i> Noticias Tecnológicas</h2>
      <div class="blog-container">
        <div class="blog-card">
          <div class="blog-icon icon-azul">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3>Top 5 laptops 2025</h3>
          <p>Conoce los mejores modelos del año según su rendimiento y precio.</p>
          <a href="top-laptops-2025.html" class="btn-leer">Leer más <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="blog-card">
          <div class="blog-icon icon-rojo">
            <i class="fas fa-desktop"></i>
          </div>
          <h3>¿PC gamer o empresarial?</h3>
          <p>Guía rápida para elegir tu próxima computadora según tu uso.</p>
          <a href="pc-empresarial.html" class="btn-leer">Leer más <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </section>

    <div class="oscuro" data-aos="fade-up">
      <section class="testimonials-section">
        <h1>🏆 Clientes satisfechos</h1>
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
    </div>
  
    <!-- Overlay de fondo -->
    <!-- Overlay oscuro -->
<div class="overlay-newsletter" id="overlayNewsletter"></div>

<!-- Popup Newsletter -->
<div class="popup-newsletter" id="popupNewsletter">
  <span class="cerrar-popup" onclick="cerrarPopup()">✖</span>
  <h3>🎁 ¡Obtén un 10% de descuento!</h3>
  <p>Suscríbete y recibe promociones exclusivas por correo.</p>
  <input type="email" placeholder="Ingresa tu correo">
  <button onclick="suscribirse()">Suscribirme</button>
</div>







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
  <script src="oscuro.js"></script>
  <script src="ws.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
</html>