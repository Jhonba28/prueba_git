<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Registro.css">
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
                    <form method="POST" action="../../../../controlador/Registrar.php" id="registerForm" class="container_form">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="Ingresos_data" required>
                        </div>
    
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" class="Ingresos_data" required>
                        </div>
    
                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="email" id="correo" name="correo" class="Ingresos_data" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Edad:</label>
                            <input type="text" id="age" name="age" class="Ingresos_data" required>
                        </div>
    
                        <div class="form-group">
                           <label for="telefono">Teléfono:</label>
                            <input type="tel" id="telefono" name="telefono" class="Ingresos_data" required>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                             <input type="text" id="direccion" name="direccion" class="Ingresos_data" required>
                         </div>

                        
                        <div class="form-group">
                            <label for="Constrasena">Constraseña:</label>
                             <input type="text" id="constrasena" name="contrasena" class="Ingresos_data" required>
                         </div>
                        <div class="reg__boton">
                    <button type="submit" name="registro" class="boton">Registrarse</button>
                </div>
                    </form>
                </main>
            </section>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>