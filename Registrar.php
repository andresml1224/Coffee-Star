<?php
    if (isset($_POST['Registrar'])) {
        include 'conexionBase.php';

        $Documento = intval($_POST['Documento']);
        $Nombre = $_POST['Nombre'];
        $Rol = $_POST['Rol'];
        $Correo = $_POST['Correo'];
        $rutaImagen = 'img/FotosUsuarios/' . $_FILES['ImagenUsuario']['name'];
        $nombreImagen = $_FILES['ImagenUsuario']['tmp_name'];

        // Verificar si se seleccionó un archivo
        if (isset($_FILES['ImagenUsuario']) && $_FILES['ImagenUsuario']['error'] === UPLOAD_ERR_OK) {
            // Procesar el archivo
            if (move_uploaded_file($nombreImagen, $rutaImagen)) {
                // El archivo se movió correctamente, ahora puedes continuar con la inserción en la base de datos
                $rol = intval($Rol);

              
            if ($rol == 1) {
                $query1 = "INSERT INTO usuarios(IdUsuarios, Documento, Nombre, Rol, Correo, Clave, Imagen)
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
                $query3 = "INSERT INTO usuarios(IdUsuarios, Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento, '$Documento', '$Nombre', 3, '$Correo', $Documento, '$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query3);
                if ($ConsultaUsuario) {
                    echo "<script> alert('Chef registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            }elseif ($rol == 2) {
                $query2 = "INSERT INTO usuarios(IdUsuarios, Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento, '$Documento', '$Nombre', 2, '$Correo', $Documento, '$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query2);
                if ($ConsultaUsuario) {
                    echo "<script> alert('Mesero registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            }elseif ($rol == 4) {
                $query4 = "INSERT INTO usuarios(IdUsuarios, Documento, Nombre, Rol, Correo, Clave, Imagen)
                    VALUES($Documento, '$Documento', '$Nombre', 4, '$Correo', $Documento, '$rutaImagen')";
                $ConsultaUsuario=mysqli_query($conn, $query4);

                if ($ConsultaUsuario) {
                    echo "<script> alert('Cliente registrado correctamente');
                    window.location.href='Login.php'; </script>";
                }
                else {
                    echo "Error de consulta";
                }
            } else {
                // Hubo un problema al mover el archivo
                echo "Error al mover el archivo.";
            }
        } else {
            // No se seleccionó ningún archivo o hubo un error en la carga
            echo "No se seleccionó ningún archivo o hubo un error en la carga.";
        }
    } else {
        echo "error de consulta";
    }
}
?>