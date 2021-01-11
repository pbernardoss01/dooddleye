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
                                <div class="" id="precioTotal"></div>      
                            </div>
                            <div class="col-8" id="datosTarjetaCredito">
                                
                                <div class="row col-md-12">
                                    <!-- <input type="text" class="form-control" placeholder="Numero de tarjeta de crédito/débito" />-->
                                    <input type="text" class="form-control" id="creditCard" placeholder="Numero de tarjeta de crédito/débito" value="" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">
                                        Numero incorrecto
                                    </div>

                                </div>
                                
                                <div class="row">
                                    <div class="col-4">
                                        <span class="help-block text-muted small-font" >Mes de expiración</span>
                                        <input id="mesExpired" type="text" class="form-control" placeholder="MM" required>
                                        
                                        <div class="invalid-feedback">
                                            Numero incorrecto
                                        </div>
                                    </div>
                                    <div class="col-4 ">
                                        <span class="help-block text-muted small-font" >Año de expiración</span>
                                        <input id="yearExpired" type="text" class="form-control" placeholder="YY" required>
                                        
                                        <div class="invalid-feedback">
                                            Numero incorrecto
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span class="help-block text-muted small-font" > CCV</span>
                                        <input id="CCV" type="text" class="form-control" placeholder="CCV" required>
                                        
                                        <div class="invalid-feedback">
                                            Numero incorrecto
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row col-md-12">
                                    <input id="nombreTarjeta" type="text" class="form-control" placeholder="Nombre completo de la tarjeta de crédito/débito" />
                                    
                                        <div class="invalid-feedback">
                                            Numero incorrecto
                                        </div>
                                </div>
                            </div>
                        
                      
                        <div id="botonesVenta" class="row col-12 d-flex justify-content-end">
                        <a href="index.php?page=carrito"  type="button" class="btn  btn-outline-secondary boton">Cancelar</a>
                        <a  onclick="realizarPedido(event)" type="button" class="btn  btn-outline-secondary boton">Paga ahora</a>
                       
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
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarCesta'
        },
            success: function(data) {
            console.log(data)/*
                if (!Array.isArray(data) && Object.keys(data).length) {
                    data = Object.values(data)
                }*/
                console.log(data)
                const preciototal = data.reduce(function(total, producto) {
                    return total + parseFloat(producto.precio)
                }, 0)

                $('#precioTotal').append(`El precio a pagar es: ${preciototal}€`)
            },
            error: function(error) {
                
        
                
            }
        })
    })
   
   
    function validate(data) {
        let valid = true

        if ('creditCard' in data ) {
            const $input =  document.querySelector('#creditCard')
            if (data.creditCard.trim() !== '' && (/^[0-9]{12}$/).test(data.creditCard)) {
                $input.classList.add('is-valid')
                $input.classList.remove('is-invalid')
            } else {
                $input.classList.add('is-invalid')
                $input.classList.remove('is-valid')
                valid = false
            }
        }
        if ('mesExpired' in data ) {
            const $input =  document.querySelector('#mesExpired')
            if (data.mesExpired.trim() !== '' && (/^(0[1-9]|1[012])$/).test(data.mesExpired)) {
                $input.classList.add('is-valid')
                $input.classList.remove('is-invalid')
            } else {
                $input.classList.add('is-invalid')
                $input.classList.remove('is-valid')
                valid = false
            }
        }
        if ('yearExpired' in data ) {
            const $input =  document.querySelector('#yearExpired')
            if (data.yearExpired.trim() !== '' && (/^2[1-9]{1}$/).test(data.yearExpired)) {
                $input.classList.add('is-valid')
                $input.classList.remove('is-invalid')
            } else {
                $input.classList.add('is-invalid')
                $input.classList.remove('is-valid')
                valid = false
            }
        }
        if ('ccv' in data ) {
            const $input =  document.querySelector('#CCV')
            if (data.ccv.trim() !== ''  && (/^[0-9]{3}$/).test(data.ccv)) {
                $input.classList.add('is-valid')
                $input.classList.remove('is-invalid')
            } else {
                $input.classList.add('is-invalid')
                $input.classList.remove('is-valid')
                valid = false
                console.log("opps")
            }
        }
        if ('nombreTarjeta' in data ) {
            const $input =  document.querySelector('#nombreTarjeta')
            if (data.nombreTarjeta.trim() !== '' && (/^[A-Za-z\s]{0,50}$/).test(data.nombreTarjeta)) {
                $input.classList.add('is-valid')
                $input.classList.remove('is-invalid')
            } else {
                $input.classList.add('is-invalid')
                $input.classList.remove('is-valid')
                valid = false
            }
        }

        return valid
    }


    function realizarPedido(event){
       const data = {
        creditCard: document.querySelector('#creditCard').value,
        mesExpired: document.querySelector('#mesExpired').value,
        yearExpired: document.querySelector('#yearExpired').value,
        ccv: document.querySelector('#ccv').value,
        nombreTarjeta: document.querySelector('#nombreTarjeta').value
       }
       const isValid = validate(data)
      
       var nombreTarjeta= $('#nombreTarjeta').value
       
        const precio=  $('#precioTotal').text
       if (isValid) {
    /*    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'hacerPedido',
            preciototal: precio
        },
            success: function(data) {
                console.log("exito")
        },
            error: function(error) {
                console.log(error)
            }
       })*/
    }
    }
    </script>