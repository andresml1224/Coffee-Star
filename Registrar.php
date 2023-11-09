<?php
    if (isset ($_POST['Registrar'])) {
        include 'conexionBase.php';
        $Documento = intval($_POST['Documento']);
        $Nombre = $_POST['Nombre'];
        $Rol = $_POST['Rol'];
        $Correo = $_POST['Correo'];
        $rutaImagen = 'img/FotosUsuarios/'.$_FILES['Imagen']['name'];
        $nombreImagen = $_FILES['Imagen']['tmp_name'];
        move_uploaded_file($nombreImagen,$rutaImagen);
        $rol = intval($Rol);

              
            if ($rol == 1) {
                $query1 = "INSERT INTO usuarios(IdUsuarios ,Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento, '$Documento', '$Nombre', 1, '$Correo', $Documento, '$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query1);
                if ($ConsultaUsuario) {
                    echo "<script> alert('Administrador registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            }elseif ($rol == 3) {
                $query3 = "INSERT INTO usuarios(IdUsuarios ,Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento,'$Documento', '$Nombre', 3, '$Correo', $Documento,'$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query3);
                if ($ConsultaUsuario) {
                    echo "<script> alert('Chef registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            }elseif ($rol == 2) {
                $query2 = "INSERT INTO usuarios(IdUsuarios ,Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento,'$Documento', '$Nombre', 2, '$Correo', $Documento, '$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query2);
                if ($ConsultaUsuario) {
                    echo "<script> alert('Mesero registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            }elseif ($rol == 4) {
                $query4 = "INSERT INTO usuarios(IdUsuarios ,Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento,'$Documento', '$Nombre', 4, '$Correo', $Documento, '$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query4);

                if ($ConsultaUsuario) {
                    echo "<script> alert('Cliente registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            }
        }else{
            echo "error de consulta";
    }
?>