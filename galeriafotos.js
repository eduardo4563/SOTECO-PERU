  let posicion = 0;
    const galeria = document.getElementById("galeriaOfertas");
    const totalProductos = galeria.children.length;

    const calcularVisible = () => {
      if (window.innerWidth <= 500) return 1;
      if (window.innerWidth <= 768) return 2;
      if (window.innerWidth <= 1024) return 3;
      return 5;
    };

    function cambiarSlide(direccion) {
      const visibles = calcularVisible();
      const maxPosicion = Math.ceil(totalProductos / visibles) - 1;
      posicion = (posicion + direccion + maxPosicion + 1) % (maxPosicion + 1);
      galeria.style.transform = `translateX(-${posicion * 100}%)`;
    }

    setInterval(() => cambiarSlide(1), 4000);
    window.addEventListener("resize", () => cambiarSlide(0));