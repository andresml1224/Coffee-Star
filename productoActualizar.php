<?php
if (isset ($_POST['Enviar'])) {
    include 'conexionBase.php';
    $IdProducto = $_POST['Id'];
    $nombreProducto = $_POST['Nombre'];
    $tipoProducto = $_POST['Tipo'];
    $stockProducto = $_POST['Stock'];
    $precioProducto = $_POST['Precio'];

    if (isset($_FILES['Imagen']['name'])) {
        $rutaImagen = 'img/' . $_FILES['Imagen']['name'];
        move_uploaded_file($_FILES['Imagen']['tmp_name'], $rutaImagen);
    } else {
        $rutaImagen = $imagenProducto;
    }

    $query = "UPDATE productos
    SET IdProducto = '$IdProducto', Nombre = '$nombreProducto', Tipo = '$tipoProducto', 
    Imagen = '$rutaImagen', Stock = '$stockProducto', Precio = '$precioProducto'";
    $Consulta=mysqli_query($conn,$query);

    if ($Consulta) {
        echo "Se actualizo el producto a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormProducto.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }

}
?>