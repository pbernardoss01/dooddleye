<div id="listaProductos" class="container">
<div id="tituloPedido" class="text-center col-12">
<h2><a href="?page=usuario"> Productos</a></h2>
    
        </div> 

    

    <div id="cabecera" class="col-12" >
        <div class="row" >
            <div class="col-2 text-center d-flex">
            <strong>Imagen</strong>
                  
            </div>
            <div id="idProducto" class="col-1">
            <strong>Id</strong>
                
            </div>
                <div id="descripcionProducto" class="col-7">
                <strong>Descripcion</strong>
                </div>
            <div class="col-1 text-md-right">
                <div class="col-12" style="padding-top: 5px">
                <strong>Precio</strong>
                </div>
            </div>    
            <div class="col-1 text-md-right">
                
   <a type="button"  href="?page=crearProducto"  class="btn btn-outline-secondary btn-xs">
        <i class="fa fa-plus" aria-hidden="true"></i>
    </a> 
            </div>
        </div> 
    </div>
    <div id="producto" class="col-12" style="display:none ">
        <div class="row" >
            <div class="col-2 text-center d-flex">
                    <a id="enlaceProducto"> <img class="img-responsive col-12" src="" alt="prewiew" ></a>
            </div>
            <div id="idProducto" class="col-1">
                
            </div>
                <div id="descripcionProducto" class="col-7">
                
                </div>
            <div class="col-1">
                <div class="col-12" style="padding-top: 5px">
                    <h6 id="precioProducto"></h6>
                </div>
            </div>    
            <div class="col-1 d-flex justify-content-center">
                <div class="col-2 col-sm-2 col-md-2 ">
                    <a id="editProducto" type="button" href="page=editProducto&productid=" class="btn btn-outline-primary btn-xs">
                            <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                    </a>
                    <button type="button" onclick="borrarProducto(event)"  class="btn btn-outline-danger btn-xs">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </div>
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
            action: 'mostrarProductos'
        },
            success: function(data) {
                const $catalogoProductos = document.querySelector('#listaProductos')
                const $tarjetaProducto = document.querySelector('#producto')
                var contador=0

                data.forEach(producto => {
                  
                    //clona la tarjeta modelo
                    contador++
                    const clone = $tarjetaProducto.cloneNode(true)
       
                    //asigna id y display a la tarjeta clon
                    
                    clone.style.display = 'flex'

                    //recoge tag img, descripcion, precio y boton 
                    const $productImg = clone.querySelector('img')
                    const $enlaceProducto = clone.querySelector('#enlaceProducto')
                    const $editProducto = clone.querySelector('#editProducto')
                    const $idProducto = clone.querySelector('#idProducto')
                    const $descripcionProducto = clone.querySelector('#descripcionProducto')
                    const $precioProducto = clone.querySelector('#precioProducto')
                    const $btnProducto = clone.querySelector('button')
                    
                    //asigna atributos
                    clone.setAttribute('id', `producto${producto.idProducto}`)
                    clone.setAttribute('class', `card col-12 tarjetaProducto `)
                    clone.setAttribute('data-precio', `${producto.precio}`)
                    clone.setAttribute('data-serie', `${producto.idSerieProducto}`)
                    clone.setAttribute('data-categoria', `${producto.idCategoriaProducto}`)
                    $enlaceProducto.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                    $btnProducto.setAttribute('data-id', `${producto.idProducto}`)
                    $editProducto.setAttribute('href', `index.php/?page=editProducto&productid=${producto.idProducto}`)
                    //$productImg.setAttribute('src', `${producto.imagen}`)
                    
                    $idProducto.append(producto.idProducto)
                    $descripcionProducto.append(producto.descripcion)
                    $precioProducto.append(producto.precio)
                    $catalogoProductos.append(clone)

                   
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
                        action: 'mostrarImagenesProductos'
                    },
                    success: function(hecho) {
                        hecho.forEach(producto => {
                            document.querySelector(`#producto${producto.idProducto} img`).setAttribute('src', `${producto.imagen}`)
                          
                         
                        })
                  
                    },
                    error: function(error) {
                        console.log(error)      


                    }
                })

                
            }
        })
        
})

    function borrarProducto(event) {

        let productId = -1
    if (event.target.dataset.id) {
        productId = event.target.dataset.id
        
    } else {
        const parent = event.target.parentElement
        if (parent.dataset.id)  {
            productId = parent.dataset.id
        }
    
    }

    productId = parseInt(productId)

    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'borrarProducto',
            producto: productId
        },
        success: function(data) {
          
            var id="#producto"+productId
        
            $(id).remove();
            alert("El producto "+ productId + " se está borrando correctamente.");
        },
        error: function(error) {
            console.log(arguments);
        }

    
    })
}





</script>