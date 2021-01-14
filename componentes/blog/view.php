

<div class="container" id="entradasBlog">

<div class="row">
  <div id="entrada" style="display:none">
    <div class="row">
        <h4 id="tituloEntrada"></h4>
    </div>
    <div class="row">
      <div id="contenidoEntrada">      
        
      </div>
    </div>
    <div class="row" style="margin:1em 0em;">
      <div style="margin:0em 1em;"><strong>Dooddleye </strong></div> 
      <div id="fechaEntrada"></div>
    
      
    </div>
    <hr>
  </div>
</div>

</div>


<script type="text/javascript">
    
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
               
                    clone.style.display = 'block'
                    const $tituloEntrada = clone.querySelector('#tituloEntrada')
                    const $contenidoEntrada = clone.querySelector('#contenidoEntrada')
                    const $fechaEntrada = clone.querySelector('#fechaEntrada')

                    $tituloEntrada.append(entrada.titulo)
                    $contenidoEntrada.append(entrada.contenido)
                    $fechaEntrada.append(entrada.fecha)
                    $entradasBlog.append(clone)
                })
            },
            error: function(error) {
                
                console.log(error,"lol");
            }
        })
        
    })

</script>