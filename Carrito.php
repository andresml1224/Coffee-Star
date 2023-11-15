<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carrito</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/estiloCarrito.css" rel="stylesheet">
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
                <img src="<?php echo $vec[3]?>" alt="" class="img-item" style="height: 200px; width: 130px">
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


</body>
</html>