<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¿PC Gamer o Empresarial?</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="pc_novedades.css?1234">
</head>
<body>
<?php include 'header.php'; ?>
  <section class="contenedor-principal">
    <h1 class="titulo1">¿PC gamer o empresarial?</h1>
    <p class="intro-text">Guía rápida para elegir tu próxima computadora según tu uso.</p>

    <div class="ofrecemos-grid">
      <div class="card">
        <i class="fa-solid fa-gamepad icono"></i>
        <h3>PC Gamer</h3>
        <p>Rendimiento extremo para videojuegos, gráficas potentes y sistemas de enfriamiento avanzados.</p>
      </div>
      <div class="card">
        <i class="fa-solid fa-briefcase icono"></i>
        <h3>PC Empresarial</h3>
        <p>Eficiencia, estabilidad y productividad. Diseñadas para trabajos de oficina y multitarea confiable.</p>
      </div>
    </div>

    <h2>Comparación rápida</h2>
    <div class="beneficios">
      <div class="beneficio-card">
        <h4>PC Gamer</h4>
        <p>✔ Alto rendimiento gráfico</p>
      </div>
      <div class="beneficio-card">
        <h4>PC Empresarial</h4>
        <p>✔ Mayor estabilidad</p>
      </div>
      <div class="beneficio-card">
        <h4>PC Gamer</h4>
        <p>✔ Componentes actualizables</p>
      </div>
      <div class="beneficio-card">
        <h4>PC Empresarial</h4>
        <p>✔ Consumo energético eficiente</p>
      </div>
    </div>

    <div class="sobre-nosotros">
      <p>Ya sea para jugar tus títulos favoritos o impulsar tu negocio, elegir la computadora correcta marcará la diferencia.</p>
      <button class="btn-conocenos2" onclick="mostrarTexto()">Leer más</button>
      <div id="textoOculto" class="texto-extra">
        <p>
          Una PC gamer está diseñada para ofrecer un alto rendimiento en videojuegos, con tarjetas gráficas potentes,
          procesadores de última generación y sistemas de refrigeración optimizados. También permiten actualizaciones
          constantes de hardware para mantenerse al día con los nuevos títulos.
        </p>
        <p>
          Por otro lado, una PC empresarial está orientada a la productividad: equipos confiables, con bajo consumo
          energético, diseñados para durar y ofrecer estabilidad en el trabajo diario. Son ideales para oficinas,
          negocios y usuarios que buscan eficiencia más que potencia gráfica.
        </p>
      </div>
    </div>
  </section>

  <script>
    function mostrarTexto() {
      const texto = document.getElementById("textoOculto");
      texto.classList.toggle("mostrar");
    }
  </script>
<?php include 'footer.php'; ?>
<script src="protection.js"></script>
</body>
</html>
