<?php
$url = "https://api.exchangerate.host/latest?base=USD&symbols=PEN";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // SÍGUENOS LAS REDIRECCIONES
$response = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

echo "<pre>";
echo "URL final: " . $info['url'] . "\n";
echo "Respuesta cruda:\n";
echo htmlspecialchars($response);
echo "</pre>";
