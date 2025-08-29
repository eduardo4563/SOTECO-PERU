  function toggleMenu() {
      document.querySelector(".nav-links").classList.toggle("show");
      document.querySelector(".menu-toggle").classList.toggle("active");
    }

    // Animación de letras con efecto de desvanecimiento
    document.addEventListener("DOMContentLoaded", function () {
      let text = document.querySelector("#animated-text span");
      let letters = text.innerText.split("");
      text.innerText = "";

      letters.forEach((letter, i) => {
        let span = document.createElement("span");
        span.innerText = letter;
        span.style.animation = `fadeIn 0.5s ease-out forwards ${i * 0.1}s`;
        text.appendChild(span);
      });
    });