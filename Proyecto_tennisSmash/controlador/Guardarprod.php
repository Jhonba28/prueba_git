<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$idProducto = $_POST['idProducto'];
	$TipoProd = $_POST['TipoProd'];
	$NombreProd = $_POST['NombreProd'];
	$DescripProd = $_POST['DescripProd'];
	$ValorCompra = $_POST['ValorCompra'];
	$ValorVenta= $_POST['ValorVenta'];
	$CantProd = $_POST['CantProd'];
	$Link = $_POST['Link'];

	
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO producto (idProducto, idTipoProd, NombreProd, DescripProd, ValorCompra, ValorVenta, CantProd, Link) VALUES ('$idProducto', '$TipoProd', '$NombreProd', '$DescripProd', '$ValorCompra', '$ValorVenta', '$CantProd', '$Link')";
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
					location.href='../Vista/App/admin/ProductosAdmin.php';
					</script>";
			}else{
				echo "NO NADA";
			}
  }

  mysqli_close($conexion);
 ?>