<!-- Menu Cabecera -->

<nav id="barraTop" class="navbar navbar-expand navbar-fixed-top col-12">

    <ul class="navbar-nav mr-auto col-12 d-flex justify-content-md-between">
      <li class="col-md-1 d-none d-md-flex  justify-content-center" ><a  href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li class="col-md-1 d-none d-md-flex justify-content-center"><a class="col-2" href="#"><i class="fab fa-twitter"></i></a></li>
      <li class="col-md-1 d-none d-md-flex  justify-content-center"><a class="col-2" href="#"><i class="fab fa-instagram"></i></a></li>
      <li class="col-md-1 d-none d-md-flex justify-content-end"><a class="col-2" href="#"><i class="fab fa-deviantart" a></i></a></li>
   
      <?php 
            if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {  
             
              echo '<li class="col-md-4  d-md-flex" style="justify-content: space-around;">
                      <a href="index.php?page=usuario"  title="Tu cuenta" class="margin-sides">
                        <i class="fas fa-user"></i> '.
                          $_SESSION['userData']["nombre"].
                      '</a>
                      <a href="index.php?page=closeSesion"  title="Cierra Sesion" class="margin-sides">
                        <i class="fa fa-window-close"></i>
                          Cerrar sesión
                      </a>
                    </li>';
           
            }else{
            //Muestra un acceso al login  
              echo '<li class="col-md-1  d-md-flex">
                      <a class="col-2" title="Logueate" href="index.php?page=login" al>
                        <i class="fas fa-user"></i>
                      </a>
                    </li>';
            }
          ?>
        
      
      <li class="col-md-1 d-md-flex">
        <a  href="?page=carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      </li>
    </ul>

</nav>


  
  
  


