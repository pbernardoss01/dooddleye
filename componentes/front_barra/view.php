<!-- Menu Cabecera -->
<div id="barraTop">
  <div class="container" >
    <div class="row">
      <nav class="navbar navbar-light navbar-expand col-12">

          <ul class="navbar-nav mr-auto col-12 ">
            <li class="col-2" ><a  href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="col-2"><a class="col-2" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="col-2"><a class="col-2" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="col-2"><a class="col-2" href="#"><i class="fab fa-deviantart"></i></a></li>
            <li class="col-2" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              
                <?php 
                  if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {  
                    echo '<a class="dropdown-item" href="index.php?page=closeSesion">Cerra sesion</a>';
                  } else { 
                    echo '<a class="dropdown-item" href="index.php?page=login">Identificate</a>';
                  } 
                ?>  
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?page=carrito">Carrito</a>
              </div>
        </li>
            
            </li>
            <!-- Boton de usuario -->
            
          </ul>
       
      </nav>
    </div>
  </div>
</div>



<!-- /Header -->