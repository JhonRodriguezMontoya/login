<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div> 
                <div class="caja__trasera-register">
                    <h3>Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion </p>
                    <button id="btn__registrarse">Registrate</button>  
                </div> 
            </div> 
            <div class="contenedor__login-register">
                <form action="" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                    <form action="php/registro_usuarios_be.php" method ="POST" class="formulario__register">
                        <h2>registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
                        <input type="text" placeholder="Correo electronico" name = "correo">
                        <input type="text" placeholder="Usuario" name = "usuario">
                        <input type="password" placeholder="Contraseña" name = "contrasena">
                        <button>Registrarse</button>
                    </form>
            </div>  
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>