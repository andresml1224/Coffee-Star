<?php
if (isset ($_POST['Enviar'])) {
    include 'conexionBase.php';
    $IdProducto = $_POST['Id'];
    $nombreProducto = $_POST['Nombre'];
    $tipoProducto = $_POST['Tipo'];
    $imagenProducto = $_POST['Imagen'];
    $stockProducto = $_POST['Stock'];

    $query ="UPDATE productos
    SET IdProducto = '$IdProducto', Nombre = '$nombreProducto', Tipo = '$tipoProducto', 
    Imagen = '$imagenProducto', Stock = '$stockProducto'";
    $Consulta=mysqli_query($conn,$query);

    if ($Consulta) {
        echo "Se actualizo el producto a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormProducto.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }

}

?>