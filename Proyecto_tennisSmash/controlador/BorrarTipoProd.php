<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

	
			

			$del = $conexion -> query("DELETE FROM tipoproducto WHERE idTipoProd = '$id' ");
				if ($del) {
					echo "<script>
					
					alert('Tipo de Producto borrado correctamente');
						location.href='../Vista/App/admin/Config.php';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../Vista/App/admin/Config.php';
					</script>";

				}


		
 ?>