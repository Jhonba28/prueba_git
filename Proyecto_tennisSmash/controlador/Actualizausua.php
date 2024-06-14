<?php 
include ('conex.php');

	$usuario = $_POST['idusuario'];
	$TipoDoc = $_POST['TipoDoc'];
	$Tipousua = $_POST['TipoUsua'];
	$Nombre = $_POST['NombUsua'];
	$Apellidos = $_POST['ApellUsua'];
	$Genero= $_POST['GeneUsu'];
	$Fecha = $_POST['FechaNac'];
	$clave = $_POST['PassUsua'];
	$Direccion = $_POST['DirUsua'];
	$Cel = $_POST['CeluUsua'];
	$correo = $_POST['CorreoUsua'];
/*	
	echo  $_POST['idusuario']; echo "<br>";
	echo  $_POST['TipoDoc']; echo "<br>";
	echo  $_POST['TipoUsua']; echo "<br>";
	echo  $_POST['NombUsua']; echo "<br>";
	echo   $_POST['ApellUsua']; echo "<br>";
	echo  $_POST['GeneUsu']; echo "<br>";
	echo  $_POST['FechaNac']; echo "<br>";
echo  $_POST['PassUsua']; echo "<br>";
echo  $_POST['DirUsua']; echo "<br>";
	echo  $_POST['CeluUsua']; echo "<br>";
echo  $_POST['CorreoUsua']; echo "<br>";
*/

$eje = $conexion -> query("UPDATE usuario SET IdTipoDoc='$TipoDoc', idTipoUsuario='$TipoDoc', NombreUsuario='$Nombre', ApellidoUsuario='$Apellidos', GeneroUsua='$Genero' , FechaNacUsua='$Fecha',ClaveUsua='$clave', DireccionUsua='$Direccion',CelUsua='$Cel', CorreoUsua='$correo' WHERE idUsuario='$usuario'");



if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/admin/Admin.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/admin/Admin.php';
	</script>";
}


 ?>