<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carrito</title>
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
    <link href="css/estiloCarrito.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&family=Titillium+Web:wght@200;300;400;600;700&display=swap');
*{
    margin: 0;
    padding:0;
    font-family: 'Open Sans';
}
header{
    background: url(img/header.jpg);
    background-size: cover;
    background-position:center;
    height: 300px;
}
header h1{
    text-align: center;
    font-size: 35px;
    /* background-color: #000; */
    color: #fff;
    padding: 30px 0;
}
.contenedor{
    max-width: 1200px;
    padding: 10px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    /* oculto lo que queda fuera del .contenedor */
    contain: paint;
}
/* SECCION CONTENEDOR DE ITEMS */
.contenedor .contenedor-items{
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    grid-gap:30px;
    grid-row-gap: 30px;
    /* width: 60%; */
    width: 100%;
    transition: .3s;
}
.contenedor .contenedor-items .item{
    max-width: 200px;
    margin: auto;
    border: 1px solid #666;
    border-radius: 10px;
    padding: 20px;
    transition: .3s;
}
.contenedor .contenedor-items .item .img-item{
    width: 100%;
}
.contenedor .contenedor-items .item:hover{
    box-shadow: 0 0 10px #666;
    scale: 1.05;
}
.contenedor .contenedor-items .item .titulo-item{
    display: block;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
}
.contenedor .contenedor-items .item .precio-item{
    display: block;
    text-align: center;
    font-weight: bold;
    font-size: 22px;
}

.contenedor .contenedor-items .item .boton-item{
    display: block;
    margin: 10px auto;
    border: none;
    background-color: black;
    color: #fff;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
}
/* seccion carrito */
.carrito{
    border: 1px solid #666;
    width: 35%;
    margin-top: 30px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: auto;
    position: sticky !important;
    top: 0;
    transition: .3s;
    /* Estilos para ocultar */
    margin-right: -100%;
    opacity: 0;
}
.carrito .header-carrito{
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 30px 0;
}
.carrito .carrito-item{
    display: flex;
    align-items: center;
    /* justify-content: space-between; */
    position: relative;
    border-bottom: 1px solid #666;
    padding: 20px;
}
.carrito .carrito-item img{
    margin-right: 20px;
}
.carrito .carrito-item .carrito-item-titulo{
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
}
.carrito .carrito-item .selector-cantidad{
    display: inline-block;
    margin-right: 25px;
}
.carrito .carrito-item .carrito-item-cantidad{
    border: none;
    font-size: 18px;
    background-color: transparent;
    display: inline-block;
    width:30px;
    padding: 5px;
    text-align: center;
}
.carrito .carrito-item .selector-cantidad i{
    font-size: 18px;
    width: 32px;
    height: 32px;
    line-height: 32px;
    text-align: center;
    border-radius: 50%;
    border: 1px solid #000;
    cursor: pointer;
}
.carrito .carrito-item .carrito-item-precio{
    font-weight: bold;
    display: inline-block;
    font-size: 18px;
    margin-bottom: 5px;
}
.carrito .carrito-item .btn-eliminar{
    position: absolute;
    right: 15px;
    top: 15px;
    color: #000;
    font-size: 20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    border: 1px solid #000;
    cursor: pointer;
    display: block;
    background: transparent;
    z-index: 20;
}
.carrito .carrito-item .btn-eliminar i{
    pointer-events: none;
}

.carrito-total{
    background-color: #f3f3f3;
    padding: 30px;
}
.carrito-total .fila{
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}
.carrito-total .btn-pagar{
    display: block;
    width: 100%;
    border: none;
    background: #000;
    color: #fff;
    border-radius: 5px;
    font-size: 18px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    transition: .3s;
}
.carrito-total .btn-pagar:hover{
    scale: 1.05;
}

/* SECCION RESPONSIVE */
@media screen and (max-width: 850px) {
    .contenedor {
      display: block;
    }
    .contenedor-items{
        width: 100% !important;
    }
    .carrito{
        width: 100%;
    }
  }
    </style>
</head>
<body>
   

<!-- About Start -->
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
            <?php
            include 'conexionBase.php';
            $consulta=mysqli_query($conn, "SELECT * FROM productos");
            while ($vec=mysqli_fetch_array($consulta)) { ?>
                <span class="codigo-item"><?php $vec[0] ?></span>
                <span class="titulo-item"><?php echo $vec[1]. " - ". $vec[2] ?></span>
                <img src="img/logo.png" alt="" class="img-item" style="height: 200px; width: 130px">
                <span class="precio-item"><?php echo "$ ". $vec[5] ?></span>
                <button class="boton-item">Agregar al Carrito</button>
            <?php } ?>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>


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
    <script src="js/app.js"></script>
</body>
</html>