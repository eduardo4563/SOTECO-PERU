<?php
// log_proteccion.php
header('Content-Type: application/json');

// incluir la conexión
require 'conexion.php';

// recibir datos
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!$data) {
    $data = $_POST;
}

$type = isset($data['type']) ? substr($data['type'],0,50) : 'unknown';
$details = isset($data['details']) ? substr($data['details'],0,500) : '';
$page = isset($data['page']) ? substr($data['page'],0,200) : '';
$timestamp = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
$referer = $_SERVER['HTTP_REFERER'] ?? '';

// insertar
$stmt = $conexion->prepare("
    INSERT INTO proteccion_logs
    (evento_tipo, evento_detalle, pagina, ip, user_agent, referer, creado_en)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
$stmt->bind_param("sssssss", $type, $details, $page, $ip, $ua, $referer, $timestamp);

if ($stmt->execute()) {
    echo json_encode(['status'=>'ok']);
} else {
    http_response_code(500);
    echo json_encode(['status'=>'error']);
}
$stmt->close();
$conexion->close();
?>
