<div class="container">
    <div class="row d-flex justify-content-center">


    <?php 
                  if($_SESSION['userRol'] == "2") {  
                    echo '<a class="link-carta-usuario" href="index.php?page=pedidos" >
                            <div class="card carta-usuario" style="width: 20rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Mis Pedidos</h5>
                                    <p class="card-text">Realizar el seguimiento, devolver un producto o repetir compras anteriores.</p> 
                                </div>
                            </div>
                        </a>';
                    echo '<a class="link-carta-usuario" href="index.php?page=datos" >
                            <div class="card carta-usuario" style="width: 20rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Mis Datos</h5>
                                    <p class="card-text">Editar inicio de sesión, direccion y otros datos personales.</p> 
                                </div>
                            </div>
                        </a>';
                  } else if($_SESSION['userRol'] == "0") {  
                    
                    echo ' <a class="link-carta-usuario" href="index.php?page=productosAdmin" >
                    <div class="card carta-usuario" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text">Editar inicio de sesión, direccion y otros datos personales.</p>
                            
                        </div>
                    </div>
                </a>';
                
                  }
                ?>  




       

    </div>
</div>


