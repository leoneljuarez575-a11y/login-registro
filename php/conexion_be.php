<?php
$host = "${{RAILWAY_PRIVATE_DOMAIN}}";  // el que te da Railway
$usuario = "root";                            // el que te da Railway
$clave = "pvxnlarxDSXefidLYIxYxACwkcBfucNk";                   // la contraseña de Railway
$base_datos = "${{MYSQL_DATABASE}}";                      // el nombre de la DB
$puerto = 3306;                               // el puerto que te asignaron

$conexion = mysqli_connect($host, $usuario, $clave, $base_datos, $puerto);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
