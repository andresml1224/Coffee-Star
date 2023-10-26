<?php
if (isset ($_POST['Enviar'])) {
    include 'conexionBase.php';
    $IdProducto = $_POST['Id'];
    $nombreProducto = $_POST['Nombre'];
    $tipoProducto = $_POST['Tipo'];
    $stockProducto = $_POST['Stock'];
    $precioProducto = $_POST['Precio'];
    $rutaImagen = 'img/'.$_FILES['Imagen']['name'];
    $nombreImagen = $_FILES['Imagen']['tmp_name'];
    move_uploaded_file($nombreImagen,$rutaImagen);
    $query ="INSERT INTO 
            productos(IdProducto, Nombre, Tipo, Imagen, Stock, Precio)
            VALUES('$IdProducto','$nombreProducto','$tipoProducto', '$rutaImagen', '$stockProducto', '$precioProducto')";
    $Consulta=mysqli_query($conn,$query);

    if ($Consulta) {
        echo "Se inserto el producto a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormProducto.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }

}

?>