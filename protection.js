// ==== Estilos dinámicos ====
const style = document.createElement("style");
style.textContent = `
  body, html {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  img {
    -webkit-user-drag: none;
    user-drag: none;
    pointer-events: none;
  }
  .img-protect {
    position: relative;
    display: inline-block;
  }
  .img-protect::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(255,255,255,0);
  }
`;
document.head.appendChild(style);

// ==== Script de protección ====
(function(){
  const LOG_ENDPOINT = 'log_proteccion.php'; // Ajusta a tu ruta PHP

  function logAttempt(type, details = '') {
    const payload = {
      type,
      details,
      page: window.location.pathname + window.location.search,
      timestamp: new Date().toISOString(),
    };
    try {
      const blob = new Blob([JSON.stringify(payload)], {type : 'application/json'});
      if (navigator.sendBeacon) {
        navigator.sendBeacon(LOG_ENDPOINT, blob);
        return;
      }
    } catch(e){}
    fetch(LOG_ENDPOINT, {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(payload),
      keepalive: true
    }).catch(()=>{});
  }

  document.addEventListener('contextmenu', e => {
    e.preventDefault();
    logAttempt('contextmenu', `x:${e.clientX},y:${e.clientY}`);
    return false;
  });

  document.addEventListener('copy', e => {
    e.preventDefault();
    logAttempt('copy', 'Intento de copiar contenido');
    return false;
  });

  document.addEventListener('dragstart', e => {
    logAttempt('dragstart', `target:${e.target.tagName}`);
    e.preventDefault();
    return false;
  });

  document.addEventListener('keydown', e => {
    const key = e.key.toLowerCase();
    const ctrl = e.ctrlKey || e.metaKey;
    const shift = e.shiftKey;
    if (e.key === 'F12' || (ctrl && key === 'u') || (ctrl && shift && key === 'i') || (ctrl && key === 's') || (ctrl && shift && key === 'c')) {
      e.preventDefault();
      e.stopPropagation();
      logAttempt('hotkey', `key:${e.key}, ctrl:${ctrl}, shift:${shift}`);
      return false;
    }
  }, true);

  document.addEventListener('selectstart', e => {
    e.preventDefault();
    logAttempt('selectstart', `target:${e.target.tagName}`);
    return false;
  });

  document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'hidden') {
      logAttempt('visibility_hidden', 'Documento ocultado o devtools abierto');
    }
  });

  document.querySelectorAll('img').forEach(img => {
    img.classList.add('img-protect');
  });

})();
