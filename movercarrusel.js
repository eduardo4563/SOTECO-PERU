let slideIndex = 0;
    let slides = document.querySelectorAll('.slide');
    let dots = document.querySelectorAll('.dot');

    function showSlide(n) {
      if (n >= slides.length) {
        slideIndex = 0;
      } else if (n < 0) {
        slideIndex = slides.length - 1;
      } else {
        slideIndex = n;
      }

      // Mover el carrusel
      document.querySelector('.carrusel').style.transform = `translateX(-${slideIndex * 100}%)`;

      // Desactivar todos los puntos
      dots.forEach((dot) => dot.classList.remove('active'));

      // Activar el punto correspondiente a la imagen actual
      dots[slideIndex].classList.add('active');
    }

    function currentSlide(n) {
      showSlide(n);
    }

    showSlide(slideIndex);
    setInterval(() => showSlide(slideIndex + 1), 3000);  // Cambiar cada 3 segundos