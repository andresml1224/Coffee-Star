<?php
if (isset($_POST['Enviar'])) {
    include 'conexionBase.php';

    $IdProducto = $_POST['Id'];
    $nombreProducto = $_POST['Nombre'];
    $tipoProducto = $_POST['Tipo'];
    $stockProducto = $_POST['Stock'];
    $precioProducto = $_POST['Precio'];

    if ($_FILES['Imagen']['size'] > 0) {
        $rutaImagen = 'img/' . $_FILES['Imagen']['name'];
        $nombreImagen = $_FILES['Imagen']['tmp_name'];
        move_uploaded_file($nombreImagen, $rutaImagen);

        $query = "UPDATE productos SET 
                  Nombre = '$nombreProducto',
                  Tipo = '$tipoProducto',
                  Imagen = '$rutaImagen',
                  Stock = '$stockProducto',
                  Precio = '$precioProducto'
                  WHERE IdProducto = '$IdProducto'";
    } else {
        $query = "UPDATE productos SET 
                  Nombre = '$nombreProducto',
                  Tipo = '$tipoProducto',
                  Stock = '$stockProducto',
                  Precio = '$precioProducto'
                  WHERE IdProducto = '$IdProducto'";
    }

    $Consulta = mysqli_query($conn, $query);

    if ($Consulta) {
        echo "Se actualizó el producto en la base de datos." . "<br>";
        echo "<a href='FormProducto.php'>Volver</a>";
    } else {
        echo "Hubo un error en la consulta: " . mysqli_error($conn);
    }
}
?>
