<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio - CoffeeBreak</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
</head>
<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3">solo para amantes del cafe</span><span class="site-heading-lower">coffe break</span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">CoffeeBreak</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?r=inicio">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?r=nosotros">sobre nosotros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?r=productos">productos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?r=tienda">tienda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?r=registro">registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        if (isset($_GET['r'])) {
            if ($_GET['r'] == 'inicio' || $_GET['r'] == 'nosotros' || $_GET['r'] == 'productos' || $_GET['r'] == 'tienda' || $_GET['r'] == 'registro') {
                include($_GET['r'].".php");
            } else {
                include("error404.php");
            }
        }
        else {
            include("inicio.php");
        }
    ?>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright&nbsp;©&nbsp;CoffeeBreak 2022</p>
        </div>
    </footer>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/current-day.js"></script>
</body>
</html>