<?php
$conexion = mysqli_connect("localhost", "usuario", "", "login_register_db");

if($conexion){
    echo 'Conectada correctamente a la DB';

}else {
    echo 'No se pudo conectar a la DB';
}


?>