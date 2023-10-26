<?php
    session_start();
    if (!isset($_SESSION['Documento'])) {
        header('Location: login.php');
    }else {
        $rol = $_SESSION['Rol'];
        if($rol == 4){ ?>

<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CoffeeSTAR</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link active">Principal</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Registrar</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="FormPedido.php" class="dropdown-item">Pedido</a>
                        <a href="FormCliente.php" class="dropdown-item">Clientes</a>
                    </div>
                </div>
                <a href="Perfil.php" class="nav-item nav-link">Ver Perfil</a>
                <a href="Carrito.php" class="nav-item nav-link">Ver Carrito</a>
                <a href="" class="nav-item nav-link">Cerrar Sesion</a>
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
<?php
        } elseif ($rol == 1) { ?>
           <!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CoffeeSTAR</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link active">Principal</a>
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
                <a href="Perfil.php" class="nav-item nav-link">Ver Perfil</a>
                <a href="Carrito.php" class="nav-item nav-link">Ver Carrito</a>
                <a href="" class="nav-item nav-link">Cerrar Sesion</a>
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

<?php
        } elseif($rol == 2) { ?>


<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CoffeeSTAR</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link active">Principal</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Registrar</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="FormProducto.php" class="dropdown-item">Producto</a>
                        <a href="FormVenta.php" class="dropdown-item">Venta</a>
                        <a href="FormEmpleado.php" class="dropdown-item">Empleado</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="VerPedido.php" class="dropdown-item">Pedido</a>
                        <a href="VerProducto.php" class="dropdown-item">Producto</a>
                        <a href="VerVenta.php" class="dropdown-item">Venta</a>
                    </div>
                </div>
                <a href="Perfil.php" class="nav-item nav-link">Ver Perfil</a>
                <a href="" class="nav-item nav-link">Cerrar Sesion</a>
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

<?php
        } elseif ($rol == 3) { ?>
           <!-- Navbar Start -->
<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CoffeeSTAR</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link active">Principal</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Registrar</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="FormProducto.php" class="dropdown-item">Producto</a>
                        <a href="FormVenta.php" class="dropdown-item">Venta</a>
                        <a href="FormEmpleado.php" class="dropdown-item">Empleado</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="VerPedido.php" class="dropdown-item">Pedido</a>
                        <a href="VerProducto.php" class="dropdown-item">Producto</a>
                        <a href="VerVenta.php" class="dropdown-item">Venta</a>
                    </div>
                </div>
                <a href="Perfil.php" class="nav-item nav-link">Ver Perfil</a>
                <a href="Login.php" class="nav-item nav-link">Cerrar Sesion</a>
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

<?php
        } else { ?>
            <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">CoffeeSTAR</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link active">Principal</a>
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
                <a href="Login.php" class="nav-item nav-link">Login</a>
                <a href="Perfil.php" class="nav-item nav-link">Ver Perfil</a>
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
<?php

    }
}
  ?>