


<div class="container">
<div class="col-12 row " id="entradasBlog">
  <!--Plantilla clonar y volcar los datos de las entradas-->
    <div class="card col-lg-3 col-md-4 mb-4 " style="display:none" id="entrada" >
      <a id="enlaceEntrada"><img id="imagenEntrada" class="card-img-top"  src="" alt="Card image cap">
      <div class="card-body">
        <h5 id="titleEntrada" class="card-title" > </h5>
        
        <div id="fechaEntrada"></div>
      </div></a>
    </div>  
    


</div>
</div>


<script type="text/javascript">
//Ocultar plantilla
    $('#entrada').hide()

//Evento de carga de documento    
    window.addEventListener('load', event_load => {
//Peticion ajax para recoger los datos de todas las entradas    

        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarEntradas'
        },
            success: function(data) {
                //Recoger la respuesta de la peticion "Mostrar entradas" 

                //Recoger por dom el elemento de plantilla para las entradas
                const $entrada = document.querySelector('#entrada')
                //Recoger por dom el elemento donde guardar todas las entradas generadas
                const $entradasBlog = document.querySelector('#entradasBlog')

                //Recorrer todas entradas 
                data.forEach(entrada => {
                //Clonar plantilla
                    const clone = $entrada.cloneNode(true)
                    //Recoger enlace de la 
                    const $enlaceEntrada = clone.querySelector('#enlaceEntrada')
                    const $tituloEntrada = clone.querySelector('#titleEntrada')
                    
                   
                    const $fechaEntrada = clone.querySelector('#fechaEntrada')
                    clone.setAttribute('id', `entrada${entrada.idEntrada}`)
                 
                    $enlaceEntrada.setAttribute('href', `?page=entrada&entradaid=${entrada.idEntrada}`)

                    clone.style.display = 'flex'
                    $tituloEntrada.append(entrada.titulo)
                   
                    $fechaEntrada.append(entrada.fecha)
                    $entradasBlog.append(clone)
                })
            },
            error: function(error) {
                
                console.log(error);
            },
            complete: function() {
                $.ajax({
                    url: '/',
                    type: 'POST',
                    dataType: "json",
                    data: {
                        page: 'ajax',
                        action: 'mostrarImagenesEntradas'
                    },
                    success: function(hecho) {
                        hecho.forEach(entrada => {
                         
                            document.querySelector(`#entrada${entrada.idEntrada} img`).setAttribute('src', `${entrada.imagen}`)
                         
                         
                        })
                  
                    },
                    error: function(error) {

console.log(error)

                    }
                })

                
            }
        })
        
    })

</script>

<?php var_dump(isset($_SESSION['validUser'])&&$_SESSION['validUser']==true)?>