<?php
  include 'conexionBase.php';
  $doc=$_GET['doc'];
  $query="SELECT * FROM clientes WHERE CedulaCliente =$doc";
  $Consulta=mysqli_query($conn,$query);
  $vec=mysqli_fetch_array($Consulta);
?>
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
    <!-- Navbar Start -->
    <?php
        include "navbar.php";
    ?>

    <div class="col-lg-6">
        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
            <h1 class="text-white mb-4 mt-5">Actualizar Clientes</h1>
            <form class="mb-5" action="ClienteActualizar.php" method="post">
                <div class="form-group">
                    <h2 class="text-primary font-weight-medium m-0">Ingrese su cedula</h2>
                    <input type="number" class="form-control" name="Cedula" value="<?php echo $vec[0] ?>"
                        required="required" />
                </div>
                <div class="form-group">
                    <h2 class="text-primary font-weight-medium m-0">Ingrese su nombre</h2>
                    <input type="text" class="form-control" name="Nombre"value="<?php echo $vec[1] ?>"
                        required="required" />
                </div>
                <div class="form-group">
                    <h2 class="text-primary font-weight-medium m-0">Ingrese su correo</h2>
                    <input type="email" class="form-control" name="Correo"value="<?php echo $vec[2] ?>"
                        required="required" />
                </div>
                <div class="form-group">
                    <h2 class="text-primary font-weight-medium m-0">Ingrese una contraseña</h2>
                    <input type="password" class="form-control" name="Contraseña"
                        required="required" />
                </div>
                <div>
                    <input class="btn btn-primary btn-block font-weight-bold py-3" type="reset" value="Reset">
                    <input class="btn btn-primary btn-block font-weight-bold py-3" type="submit" value="Enviar" name="Enviar">
                </div>
            </form>
        </div>
    </div>
    <!-- Footer Start -->
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

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>