<div id="tituloAdminEntradas" class="text-center col-12">
        <h2><a href="?page=usuario">Entradas</a></h2>
    </div> 


<div id="listaEntradas" class="container-fluid">
    <div class="row justify-content-center" >
                <a type="button"  href="?page=crearEntrada"  class="btn btn-outline-secondary btn-xs">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a> 
            </div>
    
        
    <div id="entrada" class="col-12" style="display:none ">
            
        <div class="row" >
            <div class="col-12 col-md-2 text-center d-flex">
                <a id="enlaceEntrada"> <img class="img-responsive col-12"  src="" alt="prewiew"></a>
            </div>
            <div id="idEntrada" ></div>
                
               
            <div class="col-9">
                <h6 id="tituloEntrada"></h6>    
                <div id="contenidoEntrada"> </div>
            </div>    
            <div class="text-md-center">
                
                    <a id="editEntrada" type="button" href="page=editEntrada&entradaid=" class="btn btn-outline-primary btn-xs">
                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                    </a>
                    <button id="btnEntrada" type="button" onclick="borrarEntrada(event)"  class="btn btn-outline-danger btn-xs">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                
            </div>
        </div> 
    </div>
</div>


<script>


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


                const $listaEntradas = document.querySelector('#listaEntradas')
                const $tarjetaEntrada = document.querySelector('#entrada')
                var contador=0

                data.forEach(entrada => {
                
                    //clona la tarjeta modelo
                    contador++
                    const clone = $tarjetaEntrada.cloneNode(true)
       
                    //asigna id y display a la tarjeta clon
                    
                    clone.style.display = 'flex'

                    //recoge tag img, descripcion, precio y boton 
                   
                    const $enlaceEntrada = clone.querySelector('#enlaceEntrada')
                    const $editEntrada = clone.querySelector('#editEntrada')
                    const $idEntrada = clone.querySelector('#idEntrada')
                    const $tituloEntrada = clone.querySelector('#tituloEntrada')
                    const $contenidoEntrada = clone.querySelector('#contenidoEntrada')
                    const $btnEntrada = clone.querySelector('button')
                    
                    //asigna atributos
                    clone.setAttribute('id', `entrada${entrada.idEntrada}`)
                    clone.setAttribute('class', `card col-12 tarjetaEntrada `)
                    clone.setAttribute('data-precio', `${entrada.precio}`)
                    clone.setAttribute('data-serie', `${entrada.idSerieEntrada}`)
                    clone.setAttribute('data-categoria', `${entrada.idCategoriaEntrada}`)
                    $enlaceEntrada.setAttribute('href', `index.php/?page=entrada&entradaid=${entrada.idEntrada}`)
                    $btnEntrada.setAttribute('data-id', `${entrada.idEntrada}`)
                    $editEntrada.setAttribute('href', `index.php/?page=editEntrada&entradaid=${entrada.idEntrada}`)
                    
                    
                    $idEntrada.append(entrada.idEntrada)
                    $tituloEntrada.append(entrada.titulo)
                    $contenidoEntrada.append(entrada.contenido)
                    $listaEntradas.append(clone)

                   
                })
               
          
            },
            error: function(error) {
                
                console.log(error)      
                
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


    function borrarEntrada(event) {

        let entradaId = -1
    if (event.target.dataset.id) {
        entradaId = event.target.dataset.id
 
    } else {
        const parent = event.target.parentElement
        if (parent.dataset.id)  {
            entradaId = parent.dataset.id
        }else{
            console.log("fail")
        }
    
    }

    entradaId = parseInt(entradaId)
 
    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'borrarEntrada',
            id: entradaId
        },
        complete: function(data) {
       
            var id="#entrada"+entradaId;
      
            $(id).remove();


            alert("La entrada "+ entradaId + " se borró correctamente.");
            

        },
        error: function(error) {
            //console.log(arguments);
        }

    
    })
}





</script>