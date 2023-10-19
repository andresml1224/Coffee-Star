<?php
if (isset ($_POST['Enviar'])) {
    include 'conexionBase.php';
    $ClientePedido = $_POST['Cliente'];
    $codigoPedido = $_POST['Codigo'];
    $mesaPedido = $_POST['Mesa'];
    $fechaPedido = $_POST['Fecha'];
    $horaPedido = $_POST['Hora'];
    $EmpleadoPedido = $_POST['Empleado'];

    $query ="UPDATE pedido 
    SET IdPedido = '$codigoPedido', Mesa = '$mesaPedido', FechaPedido = '$fechaPedido', HoraPedido = '$horaPedido', Clientes_CedulaCliente = '$ClientePedido' , 
    Empleados_idEmpleados = '$EmpleadoPedido'
    WHERE IdPedido = $codigoPedido";
    
    $Consulta=mysqli_query($conn,$query);

    if ($Consulta) {
        echo "Se actualizo el pedido a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormPedido.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }
}

?>