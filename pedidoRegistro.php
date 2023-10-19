<?php
if (isset ($_POST['Enviar'])) {
    include 'conexionBase.php';
    $ClientePedido = $_POST['Cliente'];
    $codigoPedido = $_POST['Codigo'];
    $mesaPedido = $_POST['Mesa'];
    $fechaPedido = $_POST['Fecha'];
    $horaPedido = $_POST['Hora'];
    $EmpleadoPedido = $_POST['Empleado'];

    $query ="INSERT INTO 
            pedido(IdPedido, Mesa, FechaPedido, HoraPedido, Clientes_CedulaCliente, Empleados_idEmpleados)
            VALUES('$codigoPedido','$mesaPedido','$fechaPedido', '$horaPedido', '$ClientePedido' , '$EmpleadoPedido')";
    $Consulta=mysqli_query($conn,$query);

    if ($Consulta) {
        echo "Se inserto el pedido a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormPedido.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }

}else {
    echo "Por favor llene el formulario";
    header('location:FormPedido.php');
}

?>