<?php
    if (isset ($_POST['Ingresar'])) {
        include 'conexionBase.php';
        include 'funciones.php';
        $Rol = $_POST['Rol'];
        $Correo = $_POST['Correo'];
        $Clave = $_POST['Clave'];

        $Login = "SELECT * FROM usuarios WHERE Rol = '$Rol' AND Correo = '$Correo' AND Clave = '$Clave'";
        $Verificar = mysqli_query($conn, $Login);

        if (mysqli_num_rows($Verificar) == 1) {
            $vec = mysqli_fetch_array($Verificar);
            session_start();
            $_SESSION['Id'] = $vec[0];
            $_SESSION['Documento'] = $vec[1];
            $_SESSION['Nombre'] = $vec[2];   
            $_SESSION['Rol'] = $vec[3]; 
            $_SESSION['ImagenUsuario'] = $vec[6];
            $idUsuario = obtenerIdUsuario($vec['Rol'], $vec['Correo'], $vec['Clave'], $conn);

            $_SESSION['IdUsuario'] = $idUsuario;   
            if ($vec['Rol'] == 1) {
                echo "<script> alert('Bienvenido Administrador');
                                window.location.href='Perfil.php'; </script>";
            }elseif ($vec['Rol'] == 3) {
                echo "<script> alert('Bienvenido Chef');
                                window.location.href='Perfil.php'; </script>";
            }elseif ($vec['Rol'] == 2) {
                echo "<script> alert('Bienvenido Mesero');
                                window.location.href='Perfil.php'; </script>";
            }elseif ($vec['Rol'] == 4) {
                echo "<script> alert('Bienvenido Cliente');
                                window.location.href='Perfil.php'; </script>";
            }
        }else{
            echo "error de consulta";
        }
    }
?>