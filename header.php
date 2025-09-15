<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOTECO PERÚ S.A.C.</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="header.css?5200">
</head>
<body>
  <nav class="soteco-navbar" id="sotecoNavbar">
    <div class="soteco-logo">
      <a href="index.php" style="text-decoration:none;">
        <h1>SOTECO PERÚ S.A.C.</h1>
      </a>
    </div>
    <ul class="soteco-links" id="sotecoLinks">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li><a href="contactanos.php">Contáctanos</a></li>
      <li><a href="contactanos.php">¿Quienes Somos?</a></li>
      <li><a href="contactanos.php">Login</a></li>
      <li><a href="contactanos.php">Registrar</a></li>
      <div class="soteco-dark-toggle" id="toggleDark">
        <i id="sotecoIconoModo" class="fas fa-sun"></i>
      </div>
    </ul>
    <div class="soteco-menu-toggle" onclick="sotecoToggleMenu()">
      <span></span><span></span><span></span>
    </div>
  </nav>

  <script>
    // Menú responsive
    function sotecoToggleMenu(){
      document.querySelector(".soteco-menu-toggle").classList.toggle("active");
      document.getElementById("sotecoLinks").classList.toggle("show");
    }
    document.querySelectorAll(".soteco-links a").forEach(link=>{
      link.addEventListener("click",()=>{
        document.querySelector(".soteco-menu-toggle").classList.remove("active");
        document.getElementById("sotecoLinks").classList.remove("show");
      });
    });

    // Scroll efecto
    window.addEventListener("scroll",()=>{
      document.getElementById("sotecoNavbar")
        .classList.toggle("scrolled",window.scrollY>50);
    });

    // Dark mode
    const toggleDark=document.getElementById("toggleDark");
    const icono=document.getElementById("sotecoIconoModo");
    toggleDark.addEventListener("click",()=>{
      document.body.classList.toggle("light");
      if(document.body.classList.contains("light")){
        icono.classList.remove("fa-sun"); icono.classList.add("fa-moon");
      } else {
        icono.classList.remove("fa-moon"); icono.classList.add("fa-sun");
      }
    });

    document.addEventListener("DOMContentLoaded",()=>{
  const links=document.querySelectorAll(".soteco-links a");
  const activePage=localStorage.getItem("activeLink");
  
  if(activePage){
    links.forEach(l=>{
      if(l.getAttribute("href")===activePage){ 
        l.classList.add("active"); 
      }
    });
  } else {
    document.querySelector('.soteco-links a[href="index.php"]').classList.add("active");
  }

  links.forEach(l=>{
    l.addEventListener("click",function(){
      links.forEach(x=>x.classList.remove("active"));
      this.classList.add("active");
      localStorage.setItem("activeLink",this.getAttribute("href"));
    });
  });
});

  </script>
</body>
</html>
