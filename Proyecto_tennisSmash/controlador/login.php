<?php
session_start();
include('conex.php');

//error_reporting(0);
//Indicamos que el documento será de tipo html y con caracteres de UTF-8:
header('Content-Type: text/html; charset=UTF-8');
//Al presionar el boton que previamente le llamamos "login", traeremos los datos del formulario:
$btninicio=$_POST['ingresar'];
if(isset($btninicio)){
	//Traemos de los inputs los datos de usuario y contraseña:
    $user=$_POST['correo'];
    $pass=$_POST['contrasena'];

	$sql = "SELECT mail, contraseña, CONCAT(nombre, ' ', apellido) AS nombre_completo, fk_id_tipo_usuario FROM usuario WHERE mail='$user' AND contraseña='$pass'";
    $res=$conexion->query($sql);
    $fila=$res->fetch_row();

    
    if($fila[0]==$user && $fila[1]==$pass){
    	$_SESSION['user']=$fila[0];
        $_SESSION['tipo']=$fila[3];
    	$_SESSION['usuario']=$fila[2];
    	$msj="Bienvenido ".$_SESSION['usuario']."";
			switch ($_SESSION['tipo']) {
				case '1':
					# code...
					header('location:../Vista/App/admin/Admin.php?mensaje=$msj');
					break;
				case '2':
					# code...
					header('location: ../vista/public/tennismash-master2/html/tienda.php');
					break;
				default:
					# code...
					header('location:../Vista/index.php?mensaje=$msj');
					break;
			}

    }
    else{
    	echo "<script>
					alert('Usuario y/o Contraseña Incorrectos');
					location.href='../vista/index.php';
					</script>";

     	}
}
?>
