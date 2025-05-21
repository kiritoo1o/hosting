<?php
// Configuración de base de datos para diferentes entornos

// Detectar si estamos en localhost o en producción
$isLocalhost = ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1');

if ($isLocalhost) {
    // Configuración para desarrollo local (XAMPP)
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'Personas';
} else {
    // Configuración para producción (tu hosting)
    // Estos valores los obtienes de tu panel de hosting
    $host = $_ENV['DB_HOST'] ?? 'localhost';
    $user = $_ENV['DB_USER'] ?? 'tu_usuario_db';
    $password = $_ENV['DB_PASS'] ?? 'tu_password_db';
    $dbname = $_ENV['DB_NAME'] ?? 'tu_nombre_db';
}

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Configurar charset para evitar problemas con acentos
$conn->set_charset("utf8");
?>