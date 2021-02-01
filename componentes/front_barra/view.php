<!-- Menu Cabecera -->

<nav id="barraTop" class="navbar navbar-expand navbar-fixed-top ">
  <div class="container row">
    <ul class="navbar-nav mr-auto col-12 d-none d-lg-flex">
      <li class="col-2" ><a  href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li class="col-2"><a class="col-2" href="#"><i class="fab fa-twitter"></i></a></li>
      <li class="col-2"><a class="col-2" href="#"><i class="fab fa-instagram"></i></a></li>
      <li class="col-2"><a class="col-2" href="#"><i class="fab fa-deviantart"></i></a></li>
      <li class="col-2 nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="index.php?page=usuario" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">

          <?php 
            if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {  
              echo '<a class="dropdown-item" href="index.php?page=usuario">Mi cuenta</a>';
              echo '<a class="dropdown-item" href="index.php?page=closeSesion">Cerra sesion</a>';
            } else { 
              echo '<a class="dropdown-item" href="index.php?page=login">Identificate</a>';
            } 
          ?>  
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li class="col-2 nav-item dropdown" >
      <a class="col-2" href="index.php?page=carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a></li>
    </ul>
   
  <div id="barraTop" class="d-flex d-lg-none justify-content-center col-12">
    <?php 
      if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {  
        echo '<a class="opcionesBarra" href="index.php?page=usuario">Mi cuenta</a>';
        echo '<a class="opcionesBarra" href="index.php?page=closeSesion">Cerra sesion</a>';
      } else { 
        echo '<a class="opcionesBarra" href="index.php?page=login">Identificate</a>';
      } 
    ?>  
    <div class="dropdown-divider"></div>
    <a class="opcionesBarra" href="index.php?page=carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a>
    </div>
  </div>
</nav>


  
  
  


