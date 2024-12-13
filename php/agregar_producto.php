<?php

use function PHPSTORM_META\type;

$nombre_producto = $_POST["nombre_producto"];
$descripcion_producto = $_POST["descripcion_producto"];
$precio_producto = $_POST["precio_producto"];
$stock_producto = $_POST["stock_producto"];
$marca_producto = $_POST["marca_producto"];
$imagen_producto = $_FILES["imagen_producto"];

$type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION);


$data = file_get_contents($imagen_producto["tmp_name"]);


$imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);


$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");

$query = "INSERT INTO productos (nombre_producto, descripcion_producto, stock_producto, marca_producto, imagen_producto) VALUES ('".$nombre_producto."', '".$descripción_producto."', '".$stock_producto."', '".$marca_producto."', '".$imagen_base64."')";

$resultado = mysqli_query($conexion, $query);


if($resultado === true ){
    echo "Salio todo bien, se agregó con exito!";
    echo "<br>";
}
else{
    echo "El proceso salió mal!";
    echo "<br>";
}

mysqli_close($conexion);

header('Location: ../views/productos.php');

?>