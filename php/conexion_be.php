<?php
$host = getenv("mysql.railway.internal");
$user = getenv("root");
$pass = getenv("pvxnlarxDSXefidLYIxYxACwkcBfucNk");
$name = getenv("railway");
$port = getenv("3306") ?: 3306;

$conexion = mysqli_connect($host, $user, $pass, $name, (int)$port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
