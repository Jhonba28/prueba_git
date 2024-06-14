<?php 
include ('conex.php');

	$idProducto = $_POST['idProducto'];
	$TipoProd = $_POST['TipoProd'];
	$NombreProd = $_POST['NombreProd'];
	$DescripProd = $_POST['DescripProd'];
	$ValorCompra = $_POST['ValorCompra'];
	$ValorVenta= $_POST['ValorVenta'];
	$CantProd = $_POST['CantProd'];
	$Link = $_POST['Link'];
	
/*

	echo $_POST['idProducto']; echo "<br>";
	echo $_POST['TipoProd']; echo "<br>";
 
	echo $_POST['NombreProd']; echo "<br>";
	echo $_POST['DescripProd']; echo "<br>";
	echo $_POST['ValorCompra']; echo "<br>";
	echo $_POST['ValorVenta']; echo "<br>";
	echo $_POST['CantProd']; echo "<br>";
	echo $_POST['Link']; echo "<br>"; */

$eje = $conexion -> query("UPDATE producto SET idTipoProd='$TipoProd', NombreProd='$NombreProd', DescripProd='$DescripProd', ValorCompra='$ValorCompra', ValorVenta='$ValorVenta' , CantProd='$CantProd', Link='$Link' WHERE idProducto='$idProducto'");


if ($eje) {
	echo "<script>
	alert('El Producto ha sido Modificado');
	location.href='../Vista/App/admin/ProductosAdmin.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/admin/ProductosAdmin.php';
	</script>";
}


 ?>