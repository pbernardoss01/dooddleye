<div id="tituloPedido" class="text-center col-12">
        <h2>entradas</h2>
    </div> 


<div id="listaEntradas" class="container-fluid">
    
    <div id="cabecera" class="col-12" >
        <div class="row" >
            <div class="col-2">
            <strong>Imagen</strong>
                  
            </div>
            <div id="idEntrada">
                <strong>Id</strong> 
            </div>
            <div id="tituloEntrada" class="col-9">
                <strong>Titulo y contenido</strong>  
            </div>
                
            <div class="text-md-center">
                <a type="button"  href="?page=crearEntrada"  class="btn btn-outline-secondary btn-xs">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a> 
            </div>
        </div> 
    </div>
    <div id="entrada" class="col-12" style="display:none ">
        <div class="row" >
            <div class="col-2 text-center d-flex">
                <a id="enlaceEntrada"> <img class="img-responsive" src="" alt="prewiew" width="120" height="80"></a>
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


                console.log(data)
                const $listaEntradas = document.querySelector('#listaEntradas')
                const $tarjetaEntrada = document.querySelector('#entrada')
                var contador=0

                data.forEach(entrada => {
                  console.log(entrada)
                  console.log(entrada.idEntrada)

                    //clona la tarjeta modelo
                    contador++
                    const clone = $tarjetaEntrada.cloneNode(true)
       
                    //asigna id y display a la tarjeta clon
                    
                    clone.style.display = 'flex'

                    //recoge tag img, descripcion, precio y boton 
                    const $entradaImg = clone.querySelector('img')
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
                    $entradaImg.setAttribute('src', `${entrada.imagen}`)
                    
                    $idEntrada.append(entrada.idEntrada)
                    $tituloEntrada.append(entrada.titulo)
                    $contenidoEntrada.append(entrada.contenido)
                    $listaEntradas.append(clone)

                   
                })
               
          
            },
            error: function(error) {
                
        
                
            }
        })
    })


    function borrarEntrada(event) {
      console.log(event)
        let entradaId = -1
    if (event.target.dataset.id) {
        entradaId = event.target.dataset.id
        console.log(entradaId)
    } else {
        const parent = event.target.parentElement
        if (parent.dataset.id)  {
            entradaId = parent.dataset.id
        }else{
            console.log("fail")
        }
    
    }

    entradaId = parseInt(entradaId)
console.log(entradaId)
    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'borrarEntrada',
            entrada: entradaId
        },
        success: function(data) {
            console.log(data)
            var id="#entrada"+entradaId
            console.log(id)
            $(id).remove();

        },
        error: function(error) {
            console.log(arguments, "lol");
        }

    
    })
}





</script>