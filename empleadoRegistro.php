<?php
if (isset ($_POST['Enviar'])) {
include 'conexionBase.php';
$cedulaEmpleado = $_POST['Cedula'];
$nombreEmpleado = $_POST['Nombre'];
$cargoEmpleado = $_POST['Cargo'];
$correoEmpleado = $_POST['Correo'];

$query ="INSERT INTO 
        empleados(idEmpleados, Nombre, Cargo, Correo, Clave)
        VALUES('$cedulaEmpleado','$nombreEmpleado','$cargoEmpleado', '$correoEmpleado', '$cedulaEmpleado')";
$Consulta=mysqli_query($conn,$query);

$query2 = "INSERT INTO usuarios(IdUsuarios ,Documento, Nombre, Rol, Correo, Clave)
        VALUES('$cedulaEmpleado','$cedulaEmpleado', '$nombreEmpleado', '$cargoEmpleado', '$correoEmpleado', '$cedulaEmpleado')";
    $ConsultaUsuario=mysqli_query($conn, $query2);

if ($Consulta && $ConsultaUsuario) {
    echo "Se inserto el empleado a la bd a la tabla correspondiente" . "<br>";
    echo "<a href = 'FormEmpleado.php'>Volver</a>";
}else {
    echo "Hay un error en la consulta";
}

}else {
    echo "Por favor llene el formulario";
    header('location:FormEmpleado.php');
}

?>