


<div class="container">
<div class="col-12 row " id="entradasBlog">
  
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
    $('#entrada').hide()
    window.addEventListener('load', event_load => {
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarEntradas'
        },
            success: function(data) {
                console.log(data)
                const $entrada = document.querySelector('#entrada')
                const $entradasBlog = document.querySelector('#entradasBlog')

                data.forEach(entrada => {
                    const clone = $entrada.cloneNode(true)
                    console.log(entrada.titulo)
                   
                    const $enlaceEntrada = clone.querySelector('#enlaceEntrada')
                    const $tituloEntrada = clone.querySelector('#titleEntrada')
                    
                   
                    const $fechaEntrada = clone.querySelector('#fechaEntrada')
                    clone.setAttribute('id', `entrada${entrada.idEntrada}`)
                 
                    $enlaceEntrada.setAttribute('href', `index.php/?page=entrada&entradaid=${entrada.idEntrada}`)

                    clone.style.display = 'flex'
                    $tituloEntrada.append(entrada.titulo)
                   
                    $fechaEntrada.append(entrada.fecha)
                    $entradasBlog.append(clone)
                })
            },
            error: function(error) {
                
                console.log(error,"lol");
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
                            console.log(entrada)
                            document.querySelector(`#entrada${entrada.idEntrada} img`).setAttribute('src', `${entrada.imagen}`)
                            console.log(entrada.imagen)
                         
                        })
                  
                    },
                    error: function(error) {



                    }
                })

                
            }
        })
        
    })

</script>