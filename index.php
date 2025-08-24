<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes una cuenta</h3>
                    <P>Inicia sesión para entrar en la pagina</P>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>Create una cuenta</h3>
                    <P>Registrate para que puedas ingresar</P>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Contenedores login-register-->
            <div class="contenedor__login-registro">
                <!--Pertenece al login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Ingrese la contraseña" name="clave">
                    <button type="submit">Entrar</button>

                </form>
                <!--Pertenece al registro-->
                <form action="php/registro_db.php" method="POST" class="formulario__registro">
                    <h2>Registrate</h2>
                    <input type="text" placeholder="Ingresa tu nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Ingresa tu correo electronico" name="correoregistro">
                    <input type="text" placeholder="Ingresa tu Usuario" name="usuario">
                    <input type="password" placeholder="Ingresa tu contraseña" name="claveregistro">
                    
                    <button>Registrarme</button>
                    </form>

            </div>

        </div>



    </main>
    <script src="assets/js/script.js"></script>   
</body>
</html>
