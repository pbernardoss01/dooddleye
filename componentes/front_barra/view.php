<!-- Menu Cabecera -->
<div id="barraTop">
  <div class="container" >
    <div class="row">
      <nav class="navbar navbar-light navbar-expand col-12">

          <ul class="navbar-nav mr-auto col-12 ">
            <a class="col-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="col-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="col-2" href="#"><i class="fab fa-instagram"></i></a>
            <a class="col-2" href="#"><i class="fab fa-deviantart"></i></a>
            <!-- Boton de usuario -->
            <?php 
              if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {  
                echo '<a class="col-2" href="index.php?page=closeSesion"><i class="fas fa-times-circle"></i></a>';
              } else { 
                echo '<a class="col-2" href="index.php?page=login"><i class="fas fa-user"></i></a>';
              } 
            ?>  
          </ul>
       
      </nav>
    </div>
  </div>
</div>



<!-- /Header -->