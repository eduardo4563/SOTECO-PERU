const toggle = document.getElementById('modoOscuroToggle');
    const icono = document.getElementById('iconoModo');

    function actualizarIcono() {
      if (document.body.classList.contains('dark-mode')) {
        icono.classList.remove('fa-sun');
        icono.classList.add('fa-moon');
      } else {
        icono.classList.remove('fa-moon');
        icono.classList.add('fa-sun');
      }
    }

    toggle.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
      localStorage.setItem('modoOscuro', document.body.classList.contains('dark-mode'));
      actualizarIcono();
    });

    window.addEventListener('DOMContentLoaded', () => {
      const modoOscuroActivo = localStorage.getItem('modoOscuro') === 'true';
      if (modoOscuroActivo) {
        document.body.classList.add('dark-mode');
        toggle.checked = true;
      }
      actualizarIcono();
    });