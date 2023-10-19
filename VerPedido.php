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
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">CoffeeSTAR</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.html" class="nav-item nav-link active">Principal</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Registrar</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="FormPedido.php" class="dropdown-item">Pedido</a>
                            <a href="FormProducto.php" class="dropdown-item">Producto</a>
                            <a href="FormCliente.php" class="dropdown-item">Clientes</a>
                            <a href="FormVenta.php" class="dropdown-item">Venta</a>
                            <a href="FormEmpleado.php" class="dropdown-item">Empleado</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="VerPedido.php" class="dropdown-item">Pedido</a>
                            <a href="VerProducto.php" class="dropdown-item">Producto</a>
                            <a href="VerCliente.php" class="dropdown-item">Clientes</a>
                            <a href="VerVenta.php" class="dropdown-item">Venta</a>
                            <a href="VerEmpleado.php" class="dropdown-item">Empleado</a>
                        </div>
                    </div>
                    <a href="Login.html" class="nav-item nav-link">Login</a>
                    <a href="Registros.html" class="nav-item nav-link">Registrarse</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Cafe-Bar</h2>
                        <h1 class="display-1 text-white m-0">CoffeeSTAR</h1>
                        <h2 class="text-white m-0">* DESDE 2023 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Ubicados en Rionegro-Antioquia</h2>
                        <h1 class="display-1 text-white m-0">CoffeeSTAR</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

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
            <th>IdPedido</th>
            <th>Mesa</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Cliente</th>
            <th>Empleado</th>
            <th>Acciones</th>
        </tr>
        <?php
        if (isset($_GET['btns']) && $_GET ['Buscar'] != NULL){
        $search=$_GET['Buscar'];
        $Buscar = "%$search%";
        include "conexionBase.php";
        $mostrar = "SELECT * FROM pedido WHERE IdPedido LIKE '$Buscar' or Mesa LIKE '$Buscar' or FechaPedido LIKE '$Buscar' or HoraPedido LIKE '$Buscar' or Clientes_CedulaCliente LIKE '$Buscar' or Empleados_idEmpleados	
        LIKE '$Buscar'";
        $resultado = mysqli_query($conn,$mostrar);
            if (mysqli_num_rows($resultado)>0){
        
        while ($vec= mysqli_fetch_array($resultado)) {?>
            <tr>
                <td><?php echo $vec[0];?></td>
                <td><?php echo $vec[1];?></td>
                <td><?php echo $vec[2];?></td>
                <td><?php echo $vec[3];?></td>
                <td><?php echo $vec[4];?></td>
                <td><?php echo $vec[5];?></td>
                <td>
                    <a href='ActPedidoForm.php?doc=<?php echo $vec[0]?>'><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href='EliminarPedido.php?doc=<?php echo $vec[0]?>'><i class="fa-duotone fa-trash"></i></a>
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