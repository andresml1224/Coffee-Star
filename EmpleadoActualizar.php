<?php
if (isset ($_POST['Enviar'])) {
include 'conexionBase.php';
$cedulaEmpleado = $_POST['Cedula'];
$nombreEmpleado = $_POST['Nombre'];
$correoEmpleado = $_POST['Correo'];
$cargoEmpleado = $_POST['Cargo'];

$query ="UPDATE 
        empleados SET idEmpleados ='$cedulaEmpleado', Nombre = '$nombreEmpleado', Correo = '$correoEmpleado', Cargo = '$cargoEmpleado', Clave = '$cedulaEmpleado'
        WHERE idEmpleados = $cedulaEmpleado";
$Consulta=mysqli_query($conn,$query);

$query2 = "UPDATE usuarios SET IdUsuarios = '$cedulaEmpleado' ,Documento = '$cedulaEmpleado' , Nombre = '$nombreEmpleado', Rol = $cargoEmpleado, Correo = '$correoEmpleado', Clave = '$cedulaEmpleado'
        WHERE IdUsuarios = '$cedulaEmpleado'
    $ConsultaUsuario=mysqli_query($conn, $query2);


if ($Consulta) {
    echo "Se actualizo el empleado a la bd a la tabla correspondiente" . "<br>";
    echo "<a href = 'FormEmpleado.php'>Volver</a>";
}else {
    echo "Hay un error en la consulta";
}

}

?>