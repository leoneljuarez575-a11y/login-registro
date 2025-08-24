<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$name = getenv("DB_NAME");
$port = getenv("DB_PORT") ?: 3306;

$conexion = mysqli_connect($host, $user, $pass, $name, (int)$port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
