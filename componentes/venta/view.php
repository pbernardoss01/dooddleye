<div class="container">

 <?php 
    if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true && $_SESSION['userRol'] == "1") {  
       
    ?>    
        
        <div class="row">
            
            <div id="tarjetaVenta" class="col-12 d-flex justify-content-center card" >    
                <form action="#" class="credit-card-div">
                    <div class="panel panel-default col-12 row" >
                        
                            <div id="datosUsuarioVenta" class="col-4">
                                <div class="" id="nombreUsuario"></div>
                                <div class="" id="direccionUsuario"></div>
                                <div class="" id="telefono"></div>      
                            </div>
                            <div class="col-8" id="datosTarjetaCredito">
                                
                                <div class="row col-md-12">
                                    <input type="text" class="form-control" placeholder="Numero de tarjeta de crédito/débito" />                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <span class="help-block text-muted small-font" >Mes de expiración</span>
                                        <input type="text" class="form-control" placeholder="MM" />
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <span class="help-block text-muted small-font" >Año de expiración</span>
                                        <input type="text" class="form-control" placeholder="YY" />
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" > CCV</span>
                                        <input type="text" class="form-control" placeholder="CCV" />
                                    </div>
                                    
                                </div>
                                <div class="row col-md-12">
                                    <input type="text" class="form-control" placeholder="Nombre completo de la tarjeta de crédito/débito" />
                                </div>
                            </div>
                        
                      
                        <div id="botonesVenta" class="row col-12 d-flex justify-content-end">
                        <a href="index.php?page=carrito"  type="button" class="btn  btn-outline-secondary boton">Cancelar</a>
                        <button id=""  onclick="realizarPedido(event)" type="button" class="btn btn-warning boton">Paga ahora</button>
                       
                        </div>
                        
                    </div>
                                
                </form>
            </div>
        </div>
        
        
        
     <?php   ;

    }else{
        echo 'Logueate <a class="dropdown-item" href="index.php?page=usuario">Mi cuenta</a>';
    }
    ?> 

    </div>





    
<script type="text/javascript">
    

    window.addEventListener('load', event_load => {
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'recogerDatosUsuario'
        },
            success: function(data) {
                
                $nombreUsuario=$("#nombreUsuario")
                $telefono=$("#telefono")
                $direccionUsuario=$("#direccionUsuario")
                $nombreUsuario.append("Nombre y apellidos: ", data.nombre, ' ' , data.apellido1, ' ' , data.apellido2)
                $direccionUsuario.append("Direccion de envio: ",data.direccion)
                $telefono.append("Telefono: ",data.telefono)
                
            },
            error: function(error) {
                
        
                
            }
        })

    })




    function cancelar(event){
        windows.location.href="index.php?page=carrito"
    }

    function realizarPedido(event){
       
    }
    </script>

    