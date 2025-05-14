<?php
$host = 'localhost'; // Cambia si es necesario
$user = 'root'; // Cambia si es necesario
$password = '';
$dbname = 'Personas';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
?>