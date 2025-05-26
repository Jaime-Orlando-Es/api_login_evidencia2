<?php
// config.php

// Parámetros de conexión a la base de datos
$host = '127.0.0.1';
$port = 3306;
$db = 'api_usuarios';
$user = 'root';
$pass = 'JE5628'; 

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