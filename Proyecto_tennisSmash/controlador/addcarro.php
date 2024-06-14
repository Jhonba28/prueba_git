<?php
     
	session_start();

//Si el usuario ha iniciado sesión podrá continuar con el proceso de compra, de lo contrario se le invitará a logearse.


	 if (isset($_SESSION['user']) == true) {
                      
           	if(isset($_POST["Producto"]) && isset($_POST["Cantidad"])){
						// si es el primer producto simplemente lo agregamos
						if(empty($_SESSION["cart"])){
							$_SESSION["cart"]=array( array("Producto"=>$_POST["Producto"],"Cantidad"=> $_POST["Cantidad"]));
						}else{
							// apartir del segundo producto:
							$cart = $_SESSION["cart"];
							$repeated = false;
							// recorremos el carrito en busqueda de producto repetido
							foreach ($cart as $c) {
								// si el producto esta repetido rompemos el ciclo
								if($c["Producto"]==$_POST["Producto"]){
									$repeated=true;
									break;
								}
							}
							// si el producto es repetido no hacemos nada, simplemente redirigimos
							if($repeated){
								print "<script>alert('Error: Producto Repetido!');</script>";
								print "<script>window.location='../Vista/Productos.php';</script>";
							}else{
								// si el producto no esta repetido entonces lo agregamos a la variable cart y despues asignamos la variable cart a la variable de sesion
								array_push($cart, array("Producto"=>$_POST["Producto"],"Cantidad"=> $_POST["Cantidad"]));
								$_SESSION["cart"] = $cart;
								echo "<script>
					                 alert('El producto ha sido agregado');
					                  location.href='../Vista/Productos.php';
					                  </script>";

							}
						}
		print "<script>window.location='../Vista/Productos.php';</script>";
	}


                                
                     }  else{
                                 echo "<script>
                 alert('Te invitamos a iniciar sessión');
                  location.href='../Vista/index.php#modal1';
                  </script>";
                            
                          }
            

?>

