<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOTECO PERÚ S.A.C.</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="header.css?022">
</head>
<body>
  <nav class="soteco-navbar" id="sotecoNavbar">
    <div class="soteco-logo">
      <a href="index.php" style="text-decoration: none;">
        <h1>SOTECO PERÚ S.A.C.</h1>
      </a>
    </div>
    <ul class="soteco-links" id="sotecoLinks">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li><a href="contactanos.php">Contáctanos</a></li>
      <div class="soteco-dark-toggle" title="Cambiar modo">
        <i id="sotecoIconoModo" class="fas fa-sun"></i>
        <label class="soteco-switch">
          <input type="checkbox" id="sotecoModoOscuro">
          <span class="soteco-slider round"></span>
        </label>
      </div>
    </ul>
    <div class="soteco-menu-toggle" onclick="sotecoToggleMenu()">  
      <span></span><span></span><span></span>
    </div>
  </nav>

  <script>
    // Menú responsive
    function sotecoToggleMenu() {
      document.querySelector(".soteco-menu-toggle").classList.toggle("active");
      document.getElementById("sotecoLinks").classList.toggle("show");
    }

    // Navbar con scroll
    window.addEventListener("scroll", function() {
      const navbar = document.getElementById("sotecoNavbar");
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    });

    // === MODO OSCURO SOLO HEADER ===
    const toggle = document.getElementById("sotecoModoOscuro");
    const icono = document.getElementById("sotecoIconoModo");
    const header = document.getElementById("sotecoNavbar");

    toggle.addEventListener("change", () => {
      if (toggle.checked) {
        header.classList.add("modo-oscuro-header");
        icono.classList.remove("fa-sun");
        icono.classList.add("fa-moon");
      } else {
        header.classList.remove("modo-oscuro-header");
        icono.classList.remove("fa-moon");
        icono.classList.add("fa-sun");
      }
    });
  </script>
</body>
</html>
