<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | SOTECO PERÚ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Fuente elegante */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column; /* Header arriba, main en medio, footer abajo */
      background: linear-gradient(-45deg, #0f2027, #203a43, #2c5364, #1a2a6c);
      background-size: 400% 400%;
      animation: gradientMove 15s ease infinite;
    }
    .login-main{
        margin-top: 60px; /* Ajusta según la altura de tu header */
    }

    /* Animación fondo degradado */
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* MAIN donde estarán partículas y login */
    main {
   
      flex: 1;
      position: relative; /* contenedor relativo para partículas */
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
      overflow: hidden; /* evita que partículas se salgan */
    }

    /* Canvas partículas SOLO en main */
    #particles-js {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
    }

    /* Contenedor login */
    .login-box {
      position: relative;
      z-index: 1; /* queda encima de partículas */
      width: 380px;
      padding: 40px;
      border-radius: 20px;
      backdrop-filter: blur(12px);
      background: rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.3);
      text-align: center;
      color: #fff;
      animation: fadeZoom 1s ease forwards;
      opacity: 0;
      transform: scale(0.9);
    }

    @keyframes fadeZoom {
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .login-box h2 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #00f7ff;
    }

    .login-box p {
      font-size: 14px;
      margin-bottom: 20px;
    }

    .input-group {
      position: relative;
      margin: 15px 0;
    }

    .input-group input {
      width: 100%;
      padding: 12px 40px 12px 15px;
      border-radius: 12px;
      border: none;
      outline: none;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 14px;
    }

    .input-group i {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #00f7ff;
    }

    /* Botón animado neón */
    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 12px;
      font-size: 16px;
      font-weight: bold;
      color: #000;
      background: #00f7ff;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
      transition: 0.5s;
    }

    .btn:hover::before {
      left: 100%;
    }

    .btn:hover {
      background: #00d1e0;
      box-shadow: 0 0 15px #00f7ff, 0 0 30px #00f7ff;
    }

    .links {
      margin-top: 15px;
      font-size: 13px;
    }

    .links a {
      color: #00f7ff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .links a:hover {
      color: #00d1e0;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <!-- MAIN con login y partículas -->
  <main class="login-main">
    <div id="particles-js"></div>

    <!-- Caja login -->
    <div class="login-box">
      <h2 id="greeting">Bienvenido</h2>
      <p>Accede a tu cuenta en <strong>SOTECO PERÚ</strong></p>

      <div class="input-group">
        <input type="text" placeholder="Usuario">
        <i class="fa fa-user"></i>
      </div>

      <div class="input-group">
        <input type="password" placeholder="Contraseña">
        <i class="fa fa-lock"></i>
      </div>

      <button class="btn">Entrar</button>

    </div>
  </main>

  <?php include 'footer.php'; ?>

  <!-- Partículas.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": { "value": 80 },
        "size": { "value": 3 },
        "color": { "value": "#00f7ff" },
        "line_linked": { "enable": true, "color": "#00f7ff" },
        "move": { "enable": true, "speed": 2 }
      }
    });

    // Saludo dinámico según la hora
    const greeting = document.getElementById("greeting");
    const hour = new Date().getHours();
    if(hour < 12){
      greeting.innerText = "🌅 Buenos días";
    } else if(hour < 19){
      greeting.innerText = "☀️ Buenas tardes";
    } else {
      greeting.innerText = "🌙 Buenas noches";
    }
  </script>
</body>
</html>
