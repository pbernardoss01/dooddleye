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
                                <li class="nav-item">
                                    <a class="nav-link" href="./blog.php">Leeme en mi blog</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Visita mi tienda</a>
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


        <main class="">
            <div class="">
                <div class="row">
                    <div id="filtros" class="col-lg-2 no-padding">
                        <div class="justify-content-left">
                            <div class="card">
                                <article class="filter-group">
                                    <header class="card-header"> 
                                        <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed filtroHeader"> 
                                            <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                            </div>
                                        </a> 
                                    </header>

                                </article>
                                <article class="filter-group">
                                    <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                                                                    data-abc="true" aria-expanded="false" class="collapsed filtroHeader"> <i
                                                class="icon-control fa fa-chevron-down"></i>
                                            <h6 class="title">Categorias </h6>
                                        </a> </header>
                                    <div class="filter-content collapse" id="collapse_aside1" style="">
                                        <div class="card-body">
                                            <ul class="listadoFiltros">
                                                <li><a href="#" data-abc="true">Electronics </a></li>
                                                <li><a href="#" data-abc="true">Watches </a></li>
                                                <li><a href="#" data-abc="true">Laptops </a></li>
                                                <li><a href="#" data-abc="true">Clothes </a></li>
                                                <li><a href="#" data-abc="true">Accessories </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="filter-group">
                                    <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3"
                                                                    data-abc="true" aria-expanded="false" class="collapsed filtroHeader"> <i
                                                class="icon-control fa fa-chevron-down"></i>
                                            <h6 class="title">Tipos</h6>
                                        </a> </header>
                                    <div class="filter-content collapse" id="collapse_aside3" style="">
                                        <div class="card-body"> 

                                            <label class="custom-control custom-checkbox"> S
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                            <label class="custom-control custom-checkbox">M
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                            <label class="custom-control custom-checkbox">L
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                            <label class="custom-control custom-checkbox">XL
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                        </div>
                                    </div>
                                </article>
                                <article class="filter-group">
                                    <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4"
                                                                    data-abc="true" class="collapsed filtroHeader" aria-expanded="false"> <i
                                                class="icon-control fa fa-chevron-down"></i>
                                            <h6 class="title">Rating </h6>
                                        </a> </header>
                                    <div class="filter-content collapse" id="collapse_aside4" style="">
                                        <div class="card-body"> 
                                            <div class="bg">
                                                <div>
                                                    <div class="chiller_cb">
                                                        <input id="myCheckbox" type="checkbox" checked>
                                                        <label for="myCheckbox">Checkbox checked</label>
                                                        <span></span>
                                                    </div>
                                                    <div class="chiller_cb">
                                                        <input id="myCheckbox2" type="checkbox">
                                                        <label for="myCheckbox2">Checkbox unchecked</label>
                                                        <span></span>
                                                    </div>
                                                    <div class="chiller_cb">
                                                        <input id="myCheckbox3" type="checkbox" disabled>
                                                        <label for="myCheckbox3">Checkbox disabled</label>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>
                    <div id="boxProductos" class="col-lg-10 no-padding">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" id="boton" class="btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <img class="card-img"
                                         src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                         alt="Vans">
                                    <div class="card-img-overlay d-flex justify-content-end">
                                        <a href="#" class="card-link text-danger like">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                                        <p class="card-text">
                                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
                                            whilst still looking cool. </p>
                                        <div class="options d-flex flex-fill">
                                            <select class="custom-select mr-1">
                                                <option selected>Color</option>
                                                <option value="1">Green</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Red</option>
                                            </select>
                                            <select class="custom-select ml-1">
                                                <option selected>Size</option>
                                                <option value="1">41</option>
                                                <option value="2">42</option>
                                                <option value="3">43</option>
                                            </select>
                                        </div>
                                        <div class="buy d-flex justify-content-between align-items-center">
                                            <div class="price text-success">
                                                <h5 class="mt-4">$125</h5>
                                            </div>
                                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




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
                                    <a class="nav-link" href="./pages/shop.html">Visita mi tienda</a>
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