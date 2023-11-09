<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CoffeeSTAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <?php
        include "navbar.php";
    ?>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
            <form class="d-flex" role="search" action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="Buscar">
        <button name="btns" class="btn btn-primary" type="submit">Buscar</button>
    </form> <br>

<fieldset>

    <table class= "table">
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (isset($_GET['btns']) && $_GET ['Buscar'] != NULL){
        $search=$_GET['Buscar'];
        $Buscar = "%$search%";
        include "conexionBase.php";
        $mostrar = "SELECT * FROM empleados WHERE idEmpleados LIKE '$Buscar' or Nombre LIKE '$Buscar' or Cargo LIKE '$Buscar' or Correo LIKE '$Buscar'";
        $resultado = mysqli_query($conn,$mostrar);
            if (mysqli_num_rows($resultado)>0){
        
        while ($vec= mysqli_fetch_array($resultado)) {?>
            <tr>
                <td><?php echo $vec[0];?></td>
                <td><?php echo $vec[1];?></td>
                <td><?php echo $vec[2];?></td>
                <td><?php echo $vec[3];?></td>
                <td>
                    <a href='ActEmpleadoForm.php?doc=<?php echo $vec[0]?>'><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href='EliminarEmpleado.php?doc=<?php echo $vec[0]?>'><i class="fa-duotone fa-trash"></i></a>
                </td>
            </tr>
        
        <?php 
        }
        }
            else {
                echo "No se encontraron datos para esa consulta";
            }
        }
        else {
            echo "Ingrese el indicio de busqueda";
        }
        ?>
        
    </table>
    </fieldset>
            </div>
        </div>
    </div>

    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Ubicanos</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Rionegro-Antioquia-Colombia</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+57 3234108779</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>andresmontoya269@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horario de Atencion</h4>
                <div>
                    <h6 class="text-white text-uppercase">Lunes - Sabado</h6>
                    <p>8.00 AM - 9.00 PM</p>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://kit.fontawesome.com/c36cb32bff.js" crossorigin="anonymous"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>