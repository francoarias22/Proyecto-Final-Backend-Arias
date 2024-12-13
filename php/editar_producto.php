<?php
if(isset($_POST["id_producto"])){
    $id = $_POST["id_producto"];
    if(!empty($id)){
        $nombre_producto = $_POST["nombre_producto"];
        $descripcion_producto = $_POST["descripcion_producto"];
        $precio_producto = $_POST["precio_producto"];
        $stock_producto = $_POST["stock_producto"];
        $marca_producto = $_POST["marca_producto"];
        $imagen_producto = $_FILES["imagen_producto"];
        
        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");


        if(!empty($_FILES["imagen_producto"]["name"])){
            $type = pathinfo($imagen_producto["name"], PATHINFO_EXTENSION);

            $data = file_get_contents($imagen_producto["tmp_name"]);

            $imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);


            $query = "UPDATE productos SET nombre_producto =  '".$nombre_producto."', descripcion_producto = '".$descripcion_producto."', precio_producto = '".$precio_producto."',  stock_producto = '".$stock_producto."', marca_producto = '".$marca_producto."', imagen_producto = '".$imagen_base64."' WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);
        }
        else{
            $query = "UPDATE productos SET nombre_producto =  '".$nombre_producto."', descripcion_producto = '".$descripcion_producto."', precio_producto = '".$precio_producto."',  stock_producto = '".$stock_producto."', marca_producto = '".$marca_producto."' WHERE id_producto = ".$id;
            $resultado = mysqli_query($conexion, $query);
        }

        if($resultado){
            header('Location: ../views/productos.php');
        }
        else{
            echo "Hubo un problema con el servidor, intente de nuevo más tarde.";
        }
        
        mysqli_close($conexion);
    }
}
?>