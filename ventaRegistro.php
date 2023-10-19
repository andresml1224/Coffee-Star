<?php
if (isset ($_POST['Enviar'])) {
    include 'conexionBase.php';
    $IdVenta = $_POST['idVenta'];
    $ProductoVenta = $_POST['Producto'];
    $PedidoVenta = $_POST['Pedido'];

    $query ="INSERT INTO 
            venta(IdVenta, Productos_IdProducto, Pedido_IdPedido)
            VALUES('$IdVenta','$ProductoVenta',' $PedidoVenta')";
    $Consulta=mysqli_query($conn,$query);

    if ($Consulta) {
        echo "Se inserto la venta a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormVenta.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }

}

?>