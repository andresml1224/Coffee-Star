<?php
if (isset ($_POST['Enviar'])) {
include 'conexionBase.php';
$cedulaCliente = $_POST['Cedula'];
$nombreCliente = $_POST['Nombre'];
$correoCliente = $_POST['Correo'];

$query ="UPDATE 
        clientes SET CedulaCliente ='$cedulaCliente', Nombre = '$nombreCliente', Correo = '$correoCliente', Clave = '$cedulaCliente'
        WHERE CedulaCliente = $cedulaCliente";
$Consulta=mysqli_query($conn,$query);

$query2 = "UPDATE usuarios SET IdUsuarios = '$cedulaCliente' ,Documento = '$cedulaCliente' , Nombre = '$nombreCliente', Rol = 4, Correo = '$correoCliente', Clave = $cedulaCliente
        WHERE IdUsuarios = '$cedulaCliente'
    $ConsultaUsuario=mysqli_query($conn, $query2);

if ($Consulta && $ConsultaUsuario) {
    echo "Se actualizo el cliente a la bd a la tabla correspondiente" . "<br>";
    echo "<a href = 'FormCliente.php'>Volver</a>";
}else {
    echo "Hay un error en la consulta";
}

}

?>