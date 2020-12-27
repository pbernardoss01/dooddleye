<!--  
  Página Tienda
  Patricia Bernardos
  Proyecto Final Desarrollo de Aplicaciones Web
-->


<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Patricia Bernardos Sobrino">
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <title>Dooddleye</title>

        <!-- Bootstrap CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="../css/styleTienda.css?v=<?php echo time(); ?>" />
        <link href="../img/favicon/favicon.ico"  sizes="16x16">

    </head>

    <body>

        <header>
            <!-- Barra Redes Sociales Top -->
            <div class="container-bar">
                <nav id="barra" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div id="barraTop" class="row">
                        <div id="redesSocialesTop">
                            <a class="w-25" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="w-25" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="w-25" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="w-25" href="#"><i class="fab fa-deviantart"></i></a>
                            <a data-toggle="modal" data-target="#carrito" class="w-25" href="#"> <i class="fas fa-shopping-cart"></i></a>

                            <a  href='./login/login.php'><i class='fas fa-user'></i></i></a>
                        </div>

                    </div> 
                </nav>
            </div>

            
            <!-- Menu Cabecera -->
            <div class="container h-100">
                <div class="row">
                    <div id="logoTituloCabecera" class=" align-items-center">
                        <a href="../index.php"><img src="../img/Logo/logoDooddleye2.png" class="img-fluid mx-auto d-block"></a>
                    </div>
                </div>
                <div class="row" id="barraMenu">
                    <nav class="navbar navbar-light navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Leeme en mi blog</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./shop.php">Visita mi tienda</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">conoce mis proyectos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacta conmigo</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Slider-->
            <div id="sliderCarrusel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../img/cabecera.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/cabecera2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/cabecera3.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </header>


        <main>
            
        </main>

        <!-- Pie de pagina -->
        <footer class="bg-dark justify-content-center">
            <div class="">
                <hr>


                <div class="row align-self-center text-center">
                    <nav class="navbar navbar-light navbar-expand-lg col-lg-12">

                        <div class="collapse navbar-collapse col-lg-12" id="barraMenuFooter">
                            <ul class="navbar-nav mr-auto col-lg-12">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Leeme en mi blog</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="./shop.php">Visita mi tienda</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">conoce mis proyectos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacta conmigo</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>



                <nav id="redesSocialesFooter" class="col-lg-12 align-self-center text-center">
                    <a class="w-25" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="w-25" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="w-25" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="w-25" href="#"><i class="fab fa-deviantart"></i></a>

                </nav>



                <div class="row">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3 col-lg-6">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                    </div>
                    <!-- /Copyright -->

                    <div class="footer-copyright text-center py-3 col-lg-6">
                        <ul class="list-unstyled list-inline text-center">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-fb mx-1">
                                    <i class="fab fa-facebook-f"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-tw mx-1">
                                    <i class="fab fa-twitter"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-gplus mx-1">
                                    <i class="fab fa-google-plus-g"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-li mx-1">
                                    <i class="fab fa-linkedin-in"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-dribbble mx-1">
                                    <i class="fab fa-dribbble"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>




        <!-- Modal -->
        <div class="modal fade" id="carrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>







        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    </body>

</html>