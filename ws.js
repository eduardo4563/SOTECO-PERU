 window.addEventListener("load", function () {
    const loader = document.getElementById("loader");
    const whatsapp = document.querySelector(".whatsapp-float");

    loader.style.opacity = "0";
    loader.style.transition = "opacity 0.5s ease";
    
    setTimeout(() => {
      loader.style.display = "none";
      whatsapp.style.display = "flex"; // ahora sí se muestra WhatsApp
    }, 500);
  });