<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización y validación de datos
    $nombre_completo = mysqli_real_escape_string($conexion, trim($_POST['nombre_completo']));
    $correo = mysqli_real_escape_string($conexion, trim($_POST['correoregistro']));
    $usuario = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
    $clave = trim($_POST['claveregistro']);

    // Verificar que ningún campo esté vacío
    if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($clave)) {
        die("Error: Todos los campos son obligatorios.");
    }

    // Verificar si el usuario o correo ya existen
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' OR correo = '$correo'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        die("Error: El usuario o correo ya están registrados.");
    }

    // Hashear la contraseña antes de guardarla
    $clave_hashed = password_hash($clave, PASSWORD_DEFAULT);

    // Insertar los datos de forma segura
    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, clave) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nombre_completo, $correo, $usuario, $clave_hashed);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registro exitoso.";
    } else {
        echo "Error en el registro: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
} else {
    echo "Acceso no autorizado.";
}
?>