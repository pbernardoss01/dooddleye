<!-- Menu Cabecera -->

<nav id="barraTop" class="navbar navbar-expand navbar-fixed-top col-12 ">

    <ul class="navbar-nav mr-auto col-12 d-flex justify-content-around">
      <li class="col-md-1 d-none d-md-flex  justify-content-center" ><a  href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li class="col-md-1 d-none d-md-flex justify-content-center"><a class="col-2" href="#"><i class="fab fa-twitter"></i></a></li>
      <li class="col-md-1 d-none d-md-flex  justify-content-center"><a class="col-2" href="#"><i class="fab fa-instagram"></i></a></li>
      <li class="col-md-1 d-none d-md-flex justify-content-center"><a class="col-2" href="#"><i class="fab fa-deviantart" a></i></a></li>
   
      <?php 
            if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {  
             
              echo '<li class="col-md-1 col-4 d-md-flex justify-content-center">
                      <a href="?page=usuario" class=" " title="Tu cuenta" class="margin-sides">
                        <i class="fas fa-user"></i><div class="d-md-block d-none" >'.
                         $_SESSION['userData']["nombre"].
                      '</div></a>
                      </li><li class="col-md-1 col-4 d-md-flex justify-content-center">
                      <a href="?page=closeSesion"  title="Cierra Sesion" class="margin-sides">
                        <i class="fa fa-window-close"></i>
                          <div  class="d-md-block d-none" >Cerrar sesión</div>
                      </a>
                    </li>';
           
            }else{
            //Muestra un acceso al login  
              echo '<li class="col-md-1  d-md-flex justify-content-center">
                      <a class="col-2" title="Logueate" href="?page=login" al>
                        <i class="fas fa-user"></i>
                      </a>
                    </li>';
            }
          ?>
        
      
      <li class="col-md-1 d-md-flex justify-content-center">
        <a  href="?page=carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      </li>
    </ul>

</nav>


  
  
  


