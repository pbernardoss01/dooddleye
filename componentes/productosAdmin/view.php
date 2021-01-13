<div id="listaProductos" class="container">
    <div id="producto" class="col-12" style="display:none ">
        <div class="row" >
            <div class="col-2 text-center d-flex">
                    <img class="img-responsive" src="" alt="prewiew" width="120" height="80">
            </div>
            <div id="descripcionProducto" class="col-8">
                
            </div>
            <div class="col-1 text-md-right">
                <div class="col-12" style="padding-top: 5px">
                    <h6><strong id="precioProducto"></strong></h6>
                </div>
            </div>    
            <div class="col-1 text-md-right">
                <div class="col-2 col-sm-2 col-md-2 text-right">
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
                    const $productEnlace = clone.querySelector('a')
                    const $descripcionProducto = clone.querySelector('#descripcionProducto')
                    const $precioProducto = clone.querySelector('#precioProducto')
                    const $btnProducto = clone.querySelector('button')
                    
                    //asigna atributos
                    clone.setAttribute('id', `producto${producto.idProducto}`)
                    clone.setAttribute('class', `card col-12 tarjetaProducto `)
                    clone.setAttribute('data-precio', `${producto.precio}`)
                    clone.setAttribute('data-serie', `${producto.idSerieProducto}`)
                    clone.setAttribute('data-categoria', `${producto.idCategoriaProducto}`)
                   // $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                    $btnProducto.setAttribute('data-id', `${producto.idProducto}`)
                
                    $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                    
                    $descripcionProducto.append(producto.descripcion)
                    $precioProducto.append(producto.precio)
                    $catalogoProductos.append(clone)

                   
                })
               
          
            },
            error: function(error) {
                
        
                
            }
        })
    })


    function borrarProducto(event) {
      console.log(event)
        let productId = -1
    if (event.target.dataset.id) {
        productId = event.target.dataset.id
        console.log(productId)
    } else {
        const parent = event.target.parentElement
        if (parent.dataset.id)  {
            productId = parent.dataset.id
        }else{
            console.log("fail")
        }
    
    }

    productId = parseInt(productId)
console.log(productId)
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
            console.log(data)
            var id="#producto"+productId
            console.log(id)
            $(id).remove();

        },
        error: function(error) {
            console.log(arguments, "lol");
        }

    
    })
}





</script>