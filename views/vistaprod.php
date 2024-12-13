<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Mundo Boxeo Argentina</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
	<link rel="stylesheet" href="../css/vistaprodcs.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="section-products">
	<nav class="navbar">
		<link rel="stylesheet" href="../css/navbar.css">
		<div class="navbar-container">
			<div class="navbar-logo-container">
				<img src="../img/logo4.webp" alt="Logo" class="navbar-logo-img">
				<a href="#" class="navbar-logo">Mundo Boxeo Argentina</a>
			</div>
			<ul class="navbar-menu">
				<li><a href="../login.html">Login</a></li>
				<li><a href="vistaprod.php">Productos</a></li>
				<li><a href="./productos.php">Administración</a></li>
				<li><a href="#">Cerrar sesión</a></li>
			</ul>
		</div>
	</nav>
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Mundo Boxeo Argentina</h3>
										<h2>Equipate para tu siguiente combate en el cuadrilatero acá</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
                         <?php
                         $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend"); 
                         $query = "SELECT * FROM productos";
                         $resultado = mysqli_query($conexion, $query);
                         while($unaFila = mysqli_fetch_assoc($resultado)){
                            echo ' 						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
    											<img style="max-width: 250px;" src="'.$unaFila["imagen_producto"].'"><img>
										</div>
										<div class="part-2">
												<h3 class="product-title">'.$unaFila["nombre_producto"]. " " . $unaFila["marca_producto"].'</h3>
												<h4>' . "$" .$unaFila["precio_producto"].'</h4>
										</div>
								</div>
						</div> ';
                        }

                        mysqli_close($conexion);
                        ?>
				</div>
		</div>
	</section>
	<footer class="footer">Hecho por Franco Nahuel Arias Coronel, Potrero Digital. © 2024. </footer>
<!-- partial -->
  
</body>
</html>
