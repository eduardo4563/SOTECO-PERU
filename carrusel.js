const track = document.querySelector('.carousel-track');
    const testimonials = document.querySelectorAll('.testimonial');
    let currentIndex = 0;

    function updateCarousel() {
      const width = testimonials[0].offsetWidth;
      track.style.transform = `translateX(-${width * currentIndex}px)`;
    }

    function nextTestimonial() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      updateCarousel();
    }

    function prevTestimonial() {
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      updateCarousel();
    }

    window.addEventListener('resize', updateCarousel);
    window.addEventListener('load', updateCarousel);