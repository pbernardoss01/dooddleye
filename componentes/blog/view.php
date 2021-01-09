<?php 
$productid = 'no hay producto id';
  if (isset($data['productid'])) $productid = $data['productid']
?>

<div class="container" id="entradasBlog">
<?php 
  echo $productid;
?>
<div class="row">
  <div id="entrada" style="display:none">
    <div class="row">
        <h4><a id="tituloEntrada" href="#"></a></h4>
    </div>
    <div class="row">
      <div id="contenidoEntrada">      
        
      </div>
    </div>
    <div class="row">
      <i class="icon-user"></i><a href="#">Dooddleye</a> 
    | <i class="icon-calendar"></i><div id="fechaEntrada"></div>
    | <i class="icon-comment"></i> <a href="#">3 Comments</a>
    |
    | 
        
    <a href="#"><span class="label label-info"></span></a> 
          <a href="#"><span class="label label-info">UI</span></a> 
          <a href="#"><span class="label label-info">growth</span></a>
        </p>
      </div>
    </div>
  </div>
</div>
<hr>
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