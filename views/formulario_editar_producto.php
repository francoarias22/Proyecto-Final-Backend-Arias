<?php 

    $producto = array();

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if(!empty($id)){
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");

            $query = "SELECT * FROM productos WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);

            $producto = mysqli_fetch_assoc($resultado);

            mysqli_close($conexion);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Boxeo Argentina</title>
    <link rel="stylesheet" href="../css/agregarprod.css">
</head>
<body>
    <form action="../php/editar_producto.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id_producto" name="id_producto" value="<?php echo ((isset($producto["id_producto"])) ? ($producto["id_producto"]) : ("")) ?>">
        <label>Nombre:</label><input type="text" id="nombre_producto" name="nombre_producto" value=" <?php echo ((isset($producto["nombre_producto"])) ? ($producto["nombre_producto"]) : ("nombre_producto")) ?>" autocomplete="off">
        <br>
        <label>Descripcion:</label><input type="text" id="descripcion_producto" name="descripcion_producto" value=" <?php echo ((isset($producto["descripcion_producto"])) ? ($producto["descripcion_producto"]) : ("")) ?>" autocomplete="off">
        <br>
        <label>Precio:</label><input type="text" id="precio_producto" name="precio_producto" value=" <?php echo ((isset($producto["precio_producto"])) ? ($producto["precio_producto"]) : ("")) ?>" autocomplete="off">
        <br>
        <label>Stock:</label><input type="text" id="stock_producto" name="stock_producto" value=" <?php echo ((isset($producto["stock_producto"])) ? ($producto["stock_producto"]) : ("")) ?>" autocomplete="off">
        <br>
        <label>Marca:</label><input type="text" id="marca_producto" name="marca_producto" value=" <?php echo ((isset($producto["marca_producto"])) ? ($producto["marca_producto"]) : ("")) ?>" autocomplete="off">
        <br>
        <img style="max-width: 150px;" class="imagen-preview" src="<?php echo ((isset($producto["imagen_producto"])) ? ($producto["imagen_producto"]) : ("")) ?>">
        <br>
        <label>Seleccionar imagen</label><input type="file" id="imagen_producto" name="imagen_producto" autocomplete="off">
        <br>
        <button>Editar</button><a href="./productos.php"></a>
    </form>
</body>
</html>