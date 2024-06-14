<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Registrarse|Tenis Smash</title>
    <link rel="shortcut icon" href="../assets/img/iconos/LogoBlanco.ico">
    <link rel="shortcut icon" href="../assets/img/iconos/LogoBlanco.ico">
    <link rel="stylesheet" href="../assets/css/cabecera/cabecera.css">
</head>

<body>
    <div class="separator">
        <div class="separator__dark">
            <header class="nav-bg">
                <nav class="navegacion contenedor">
                  <a href="../index.php" class="navegacion__enlace">Inicio</a>
                  <a href="./sobre-nosotros.php" class="navegacion__enlace">Nosotros</a>
                  <a href="./Registro.php" class="navegacion__enlace">Registro</a>
                  <a href="../index.php" class="navegacion__enlace"><img src="../assets/img/LogoBlanco2-origin).png"
                      class="navegacion_logo" /></a>
                  <a href="./Login.php" class="navegacion__enlace">Login</a>
                  <a href="./tienda.php" class="navegacion__enlace">Tienda</a>
                  <a href="./noticias.php" class="navegacion__enlace">Noticias</a>
                </nav>
              </header>
            <div class="sep"></div>
            <section class="container">
                <header>
                    <h1 class="titulo">¡Registrate con nosotros en Tennis Smash Lab!</h1>
                </header>
                <main>
                    <form method="post" action="../../../../controlador/login.php" id="registerForm">
                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="email" id="correo" name="correo" class="input__regis" required>
                        </div>
    
                        <div class="form-group">
                            <label for="telefono">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena" class="input__regis" required>
                        </div>
                        <div class="reg__boton">
                            <input type="submit" value="Ingresar" class="boton" id="bienvenido" name="ingresar" >
                        </div>
                    </form>
                </main>
                <br>
                <p class="message">¿No te has registrado?<a href="./Registro.php" class="redirec"> Registrate aqui</a></p>
            </section>
        </div>
    </div>
    <!-- <script src="index.js"></script> -->
</body>

</html>