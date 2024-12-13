<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Boxeo Argentina</title>
    <link rel="stylesheet" href="../css/agregarprod.css">
</head>
<body>
    <form action="../php/agregar_producto.php" method="post" enctype="multipart/form-data">
        <label>Nombre:</label><input type="text" id="nombre_producto" name="nombre_producto" autocomplete="off">
        <br>
        <label>Descripcion:</label><input type="text" id="descripcion_producto" name="descripcion_producto" autocomplete="off">
        <br>
        <label>Precio:</label><input type="text" id="precio_producto" name="precio_producto" autocomplete="off">
        <br>
        <label>Stock:</label><input type="text" id="stock_producto" name="stock_producto" autocomplete="off">
        <br>
        <label>Marca:</label><input type="text" id="marca_producto" name="marca_producto" autocomplete="off">
        <br>
        <label>Seleccionar imagen</label><input type="file" id="imagen_producto" name="imagen_producto" autocomplete="off">
        <br>
        <button>Agregar</button><a href="../php/agregar_producto.php"></a>
    </form>
</body>
</html>