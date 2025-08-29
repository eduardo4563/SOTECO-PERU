<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "soteco"; // ← reemplaza con el nombre de tu base

$conexion = new mysqli($host, $usuario, $clave, $baseDeDatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
