<?php
# Metodo para el tratamiento de notificaciones:
error_reporting(E_ALL);
ini_set('display_errors', 1);

# Objeto conexion a la base de datos:
include('conex.php');

# Validacion de obturacion del boton:
if (isset($_POST['registro'])) {
    
    # Captura de variables:
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    // $direccion = $_POST['direccion'];
    $contrasena = $_POST['contrasena'];
    $edad = $_POST['age'];
    
    # Definimos las constantes del procedimiento:
    if (empty($_POST['tipousua'])) {
        # Para el caso del tipo de usuario, si no lo enviamos, Definiremos nuestro tipo de usuario:
        $tipo = 2; //En este caso el tipo del usuario es 2, porque es el que se ha definido como cliente
    } else {
        $tipo = $_POST['tipousua'];
    }

    # Verificación de la existencia del correo o teléfono:
    $sql_check = "SELECT id_usuario FROM usuario WHERE mail = '$email' OR telefono = '$telefono'";
    $result = $conexion->query($sql_check);

    if ($result->num_rows > 0) {
        echo "El usuario con ese correo electrónico o teléfono ya existe.";
    } else {
        # Inserción del nuevo usuario:
        $sql_insert = "INSERT INTO usuario (nombre, apellido, edad,mail, telefono, contraseña, fk_id_tipo_usuario)
        VALUES ('$nombres', '$apellidos', '$edad','$email', '$telefono', '$contrasena', $tipo)";

        # Ejecución de la consulta:
        if ($conexion->query($sql_insert) === TRUE) {
            echo "Nuevo registro creado con éxito, se te redirigirá al login en 2 segundos.";
            echo "<meta http-equiv='refresh' content='2;url=../vista/public/tennismash-master2/html/Login.php'>";
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conexion->error;
        }
    }

    exit();
}
?>
