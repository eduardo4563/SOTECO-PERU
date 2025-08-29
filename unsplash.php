<?php
function obtenerImagenUnsplash($nombreProducto) {
    $access_key = '56EM-MSRnFv7ys3uwvT2e1pC7i8iicT9y1ixFM001Jk'; // ← Tu ACCESS KEY (no secret key)

    $producto_nombre = urlencode($nombreProducto);

    $url = "https://api.unsplash.com/search/photos?query=$producto_nombre&client_id=$access_key&per_page=1";

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
    ]);
    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);

    if (!empty($data['results'][0]['urls']['small'])) {
        return $data['results'][0]['urls']['small'];
    } else {
        return "img/producto-generico.png"; // Imagen por defecto si no se encuentra
    }
}
?>
