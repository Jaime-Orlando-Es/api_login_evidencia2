<?php
// config.php

// Parámetros de conexión a la base de datos
$host = '127.0.0.1';
$port = 8889;
$db = 'api_usuarios';
$user = 'root';
$pass = 'JE5628'; 

$conexion = new PDO(
    "mysql:host=localhost;dbname=api_usuarios;port=8889;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock",
    'root',
    'JE5628'
);

try {
    // Crear conexión PDO
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    
    // Establecer el modo de errores a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "✅ Conexión establecida correctamente";

} catch (PDOException $e) {
    // Mostrar error si falla la conexión
    die("❌ Error en la conexión: " . $e->getMessage());
}
?>