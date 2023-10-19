<?php
if (isset ($_POST['Enviar'])) {
include 'conexionBase.php';
$cedulaCliente = $_POST['Cedula'];
$nombreCliente = $_POST['Nombre'];
$correoCliente = $_POST['Correo'];

    $query ="INSERT INTO 
        clientes(CedulaCliente, Nombre, Correo, Clave)
        VALUES($cedulaCliente,'$nombreCliente','$correoCliente', '$cedulaCliente')";
    $Consulta=mysqli_query($conn,$query);

    $query2 = "INSERT INTO usuarios(IdUsuarios ,Documento, Nombre, Rol, Correo, Clave)
        VALUES($cedulaCliente,'$cedulaCliente', '$nombreCliente', 4, '$correoCliente', $cedulaCliente)";
    $ConsultaUsuario=mysqli_query($conn, $query2);

    if ($Consulta && $ConsultaUsuario) {
        echo "Se inserto el cliente a la bd a la tabla correspondiente" . "<br>";
        echo "<a href = 'FormCliente.php'>Volver</a>";
    }else {
        echo "Hay un error en la consulta";
    }

}else {
    echo "Por favor llene el formulario";
    header('location:FormCliente.php');
}

?>


