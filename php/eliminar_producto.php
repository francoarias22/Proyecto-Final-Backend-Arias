<?php

if(isset($_GET["id"])){
    echo "Salio todo bien!";
    echo "<br>";
    $id_p = $_GET["id"];
    if(!empty($id_p)){
        echo "Salió otra vez todo bien!";
        echo "<br>";
        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend"); 

        $query = "DELETE FROM productos WHERE id_producto =" . $id_p;
        $resultado = mysqli_query($conexion, $query);

        mysqli_close($conexion);

        if($resultado === true ){
            echo "Salio todo bien, se eliminó con exito!";
            echo "<br>";
            header('Location: ../views/productos.php');
        }
        else{
            echo "El proceso salió mal!";
            echo "<br>";
        }
    }
    else{
        echo "El proceso salió mal!";
        echo "<br>";
    }
}
else{
    echo "El proceso salió mal!";
    echo "<br>";
}

?>