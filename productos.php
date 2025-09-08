<?php
require 'conexion.php';

// Obtener productos de la BD
$sql = "SELECT * FROM productos WHERE stock >= 5 ORDER BY id DESC";
$res = $conexion->query($sql);

$baseImg = "https://imagenes.deltron.com.pe/images/productos/on-line/items/large/";
$data = [];

while ($p = $res->fetch_assoc()) {
    $codigo = strtolower($p['codigo']);
    $folder1 = substr($codigo, 0, 2);
    $folder2 = substr($codigo, 2, 2);
    $imgUrl = $baseImg . "{$folder1}/{$folder2}/{$codigo}.jpg";

    $data[] = [
        "id" => $p['id'],
        "titulo" => $p['descripcion'],
        "categoria" => strtolower($p['categoria']),
        "rating" => 4.5,
        "img" => $imgUrl ?: "https://via.placeholder.com/300x200?text=Sin+Imagen",
        "marca" => $p['marca'],
        "codigo" => $p['codigo'],
        "codigosistema" => $p['codigosistema'],
        "unidad" => $p['unidad'],
        "stock" => $p['stock']
    ];
}
$productosJSON = json_encode($data, JSON_UNESCAPED_UNICODE);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SOTECO PERÚ — Tienda Virtual</title>
  <meta name="description" content="Tienda virtual de SOTECO PERÚ: hardware, software y ciberseguridad." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="productos.css?6200">
</head>
<body>
  <!-- Loader -->
  <div class="loader" id="loader">
    <div style="display:grid; place-items:center; gap:12px">
      <div class="spinner"></div>
      <div>Cargando la tienda…</div>
    </div>
  </div>

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Hero -->
  <section class="hero">
    <div class="bg" aria-hidden="true"></div>
    <div class="wrap content">
      <br><br>
      <p>Arma tu setup, equipa tu empresa y protege tus activos digitales. En SOTECO PERÚ unimos rendimiento y diseño para que tu tecnología se vea y funcione de 10.</p>
    
      <div class="kpis">
        <div class="kpi"><h4>+500</h4><small class="muted">Productos</small></div>
        <div class="kpi"><h4>24/7</h4><small>Soporte</small></div>
        <div class="kpi"><h4>48h</h4><small>Entregas Lima</small></div>
        <div class="kpi"><h4>Garantía</h4><small>Oficial</small></div>
      </div>

      <!-- Filtros / Buscador -->
      <div class="toolbar">
        <div class="filters">
          <button class="chip active" data-filter="all">Todo</button>
          <button class="chip" data-filter="laptop">Laptops</button>
          <button class="chip" data-filter="pc">PCs</button>
          <button class="chip" data-filter="periferico">Periféricos</button>
          <button class="chip" data-filter="software">Software</button>
        </div>
        <div style="display:flex; gap:10px; align-items:center">
          <input type="search" id="q" placeholder="Buscar producto…" autocomplete="off" />
          <select id="sort">
            <option value="popular">Ordenar: Populares</option>
            <option value="precio-asc">Precio: menor a mayor</option>
            <option value="precio-desc">Precio: mayor a menor</option>
            <option value="nuevo">Novedades</option>
          </select>
        </div>
      </div>
    </div>
  </section>

  <!-- Catálogo -->
  <main id="catalogo" class="wrap" style="padding:24px 20px 0">
    <div class="grid" id="grid"></div>

    <!-- Paginación simple -->
    <div style="display:flex; justify-content:center; gap:10px; margin:16px 0 0">
      <button class="btn-ghost" id="btnMas">Cargar más</button>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <!-- Modal Detalle Producto -->
  <div class="modal" id="modal">
    <div class="m-overlay" id="modalOverlay" aria-hidden="true"></div>
    <div class="m-card" role="dialog" aria-label="Detalle de producto">
      <div class="m-body">
        <div class="m-media" id="mMedia"></div>
        <div class="m-info">
          <div style="display:flex; align-items:center; justify-content:space-between; gap:10px">
            <h3 id="mTitle">Producto</h3>
            <button class="icon-btn" id="mClose" aria-label="Cerrar"><i class="fa-solid fa-xmark"></i></button>
          </div>
          <div class="price">
            <span class="old" id="mOld"></span>
            <span class="curr" id="mCurr"></span>
          </div>
          <div class="stars" id="mStars" aria-hidden="true">★★★★★</div>
          <p id="mDesc" style="margin:10px 0 14px; color:#cbd5e1"></p>

          <!-- Cantidad -->
         <!-- Cantidad + Cotización -->
<div class="cotizar-box">
  <label for="mCantidad">Cantidad:</label>
  <div class="cotizar-actions">
    <input type="number" id="mCantidad" value="1" min="1">
    <button class="btn-primary" id="mCotizar">
      <i class="fa-solid fa-comment-dots"></i> Cotizar
    </button>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>

  <!-- Script: datos de productos desde PHP -->
  <script>
    const productos = <?php echo $productosJSON; ?>;
  </script>

  <!-- Script principal -->
  <script>
    let filtro = 'all';
    let pagina = 1;
    const porPagina = 8;
    let query = '';
    let orden = 'popular';
    const carrito = [];
    let seleccionado = null;

    const el = sel => document.querySelector(sel);
    const els = sel => document.querySelectorAll(sel);

    function filtrarOrdenar(list){
      let r = list.filter(p => (filtro==='all'||p.categoria===filtro) && p.titulo.toLowerCase().includes(query));
      if(orden==='precio-asc') r.sort((a,b)=>a.precio-b.precio);
      if(orden==='precio-desc') r.sort((a,b)=>b.precio-a.precio);
      if(orden==='nuevo') r = r.reverse();
      return r;
    }

    function templateCard(p){
      return `<article class="card" data-id="${p.id}">
        <span class="badge">${p.categoria}</span>
        <div class="media" style="background-image:url('${p.img}'); background-size:cover; background-position:center"></div>
        <div class="body">
          <h3 style="font-size:1rem; font-weight:700">${p.titulo}</h3>
          <div class="stars" aria-hidden="true">${'★'.repeat(Math.round(p.rating))}${'☆'.repeat(5-Math.round(p.rating))}</div>
          <div class="cta">
            <button class="btn-ghost" data-ver="${p.id}">Ver detalle</button>
          </div>
        </div>
      </article>`;
    }

    function renderGrid(reset=false){
      const cont = el('#grid');
      if(reset) cont.innerHTML = '';
      const data = filtrarOrdenar(productos);
      const desde = (pagina-1)*porPagina;
      const items = data.slice(desde, desde+porPagina);
      cont.insertAdjacentHTML('beforeend', items.map(templateCard).join(''));
      el('#btnMas').style.display = (desde+porPagina)>=data.length ? 'none' : 'inline-block';
    }

    // Abrir modal
    function openModal(id){
      const p = productos.find(x=>x.id==id);
      if(!p) return;
      seleccionado = p;
      el('#mMedia').style = `aspect-ratio:4/3; background:#0b1224; background-image:url('${p.img}'); background-size:cover; background-position:center`;
      el('#mTitle').textContent = p.titulo;
      el('#mDesc').textContent = 'Especificaciones de referencia. Producto original de SOTECO PERÚ.';
      el('#mCantidad').value = 1;
      el('#modal').classList.add('show');
    }

    document.addEventListener('DOMContentLoaded', ()=>{
      setTimeout(()=>{ el('#loader').style.opacity=.0; setTimeout(()=>el('#loader').remove(), 350) }, 650);
      renderGrid(true);

      els('.chip').forEach(c=> c.addEventListener('click', e=>{
        els('.chip').forEach(x=>x.classList.remove('active'));
        e.currentTarget.classList.add('active');
        filtro = e.currentTarget.dataset.filter; pagina = 1; renderGrid(true);
      }));

      el('#q').addEventListener('input', e=>{ query = e.target.value.trim().toLowerCase(); pagina = 1; renderGrid(true); });
      el('#sort').addEventListener('change', e=>{ orden = e.target.value; pagina=1; renderGrid(true); });
      el('#btnMas').addEventListener('click', ()=>{ pagina++; renderGrid(); window.scrollBy({top:220, behavior:'smooth'}) });

      el('#grid').addEventListener('click', e=>{
        const ver = e.target.closest('[data-ver]');
        if(ver) openModal(ver.dataset.ver);
      });

      el('#mClose').addEventListener('click', ()=> el('#modal').classList.remove('show'));
      el('#modalOverlay').addEventListener('click', ()=> el('#modal').classList.remove('show'));

      // Contactar por WhatsApp
  el('#mCotizar').addEventListener('click', ()=>{
  if(!seleccionado) return;
  const cantidad = parseInt(el('#mCantidad').value) || 1;

  const mensaje = `👋 ¡Hola SOTECO PERÚ!  
Me interesa solicitar una *cotización* de un producto:

🔹 *Producto:* ${seleccionado.titulo}  
🔖 *Código:* ${seleccionado.codigo}  
🏷️ *Marca:* ${seleccionado.marca}  
📦 *Cantidad solicitada:* ${cantidad}

Por favor, ¿podrían enviarme la información de precios y disponibilidad?  
Gracias 🙏`;

  const telefono = "51987654321"; // <-- tu número con código de país
  const url = `https://wa.me/${telefono}?text=${encodeURIComponent(mensaje)}`;
  window.open(url, "_blank");
});

    });
  </script>
</body>
</html>
