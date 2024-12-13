<!doctype html>
<html lang="en">
  <head>
  	<title>Mundo Boxeo Argentina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
	
	<link rel="stylesheet" href="../css/stylevistapadmin.css">

	</head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<nav class="navbar">
					<div class="navbar-container">
						<div class="navbar-logo-container">
                        <link rel="stylesheet" href="../css/navbar.css">
							<img src="../img/logo4.webp" alt="Logo" class="navbar-logo-img">
							<a href="#" class="navbar-logo">Mundo Boxeo Argentina</a>
						</div>
						<ul class="navbar-menu">
							<li><a href="../login.html">Login</a></li>
							<li><a href="vistaprod.php">Productos</a></li>
							<li><a href="productos.php">Administración</a></li>
							<li><a href="#">Cerrar sesión</a></li>
						</ul>
					</div>
				</nav>
			
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Mundo Boxeo Argentina</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">Menú del administrador</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr id="tabla1">
						    	<th>&nbsp;</th>
								<a href="formulario_agregar_producto.php" id="agregar-producto">Agregar producto</a>
						    	<th>Producto</th>
						      <th>Precio</th>
						      <th>Stock</th>
						      <th>Marca</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                            <?php
                            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend"); 

                            $query = "SELECT * FROM productos";
                            $resultado = mysqli_query($conexion, $query);

                            while($unaFila = mysqli_fetch_assoc($resultado)){
                                echo ' <tr class="alert" role="alert">
						    	<td>
						    		<img class="imagen-1" src="'.$unaFila["imagen_producto"].'"><img>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span> '.$unaFila["nombre_producto"].' </span>
						      		<span>  '.$unaFila["descripcion_producto"].'  </span>
						      	</div>
						      </td>
						      <td>$'.$unaFila["precio_producto"].' </td>
						      <td> '.$unaFila["stock_producto"].' </td>
				          <td>'.$unaFila["marca_producto"].'</td>
						      <td>
						      	<a style="margin-left: 20px; text-align: center; justify-content: center;" href="../php/eliminar_producto.php?id='.$unaFila["id_producto"].'" id="boton_eliminar" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fas fa-times"></i></span>
				          	    </a>
								<a style="background-color: #23a7ff; color: #ffffff; text-align: center; justify-content: center; padding: 10px; display: flex;" href="formulario_editar_producto.php?id='.$unaFila["id_producto"].'">Editar producto</a>
				        	</td>
						    </tr> ';
                            }

                            mysqli_close($conexion);
                            ?>
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">Hecho por Franco Nahuel Arias Coronel, Potrero Digital. © 2024. </footer>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php



?>