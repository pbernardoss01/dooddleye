
    <div class="col-12 row" id="catalogoProductos">
        
          <div class="col-lg-4 col-md-6 mb-4" style="display:none">
            <div id="tarjetaProducto" class="card col-lg-4 col-md-6 mb-4">
                <a href="">
                    <img  id="imagenProduto"  class="card-img-top" src="" alt="">
                </a>
                <div class="card-body">
                    <h5 id="precioProducto"></h5>
                    <p id="descripcionProducto" class="card-text"></p>
                    <button id=""  onclick="addCarrito(event)" type="button" data-id="" class="btn btn-sm btn-outline-secondary">Añadir a carrito</button>
                </div>
                
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
            action: 'mostrarProductos'
        },
            success: function(data) {
                const $catalogoProductos = document.querySelector('#catalogoProductos')
                const $tarjetaProducto = document.querySelector('#tarjetaProducto')
                
                data.forEach(producto => {
                    //clona la tarjeta modelo
                    const clone = $tarjetaProducto.cloneNode(true)
       
                    //asigna id y display a la tarjeta clon
                    
                    clone.style.display = 'flex'

                    //recoge tag img, descripcion, precio y boton 
                    const $productImg = clone.querySelector('img')
                    const $descripcionProducto = clone.querySelector('#descripcionProducto')
                    const $precioProducto = clone.querySelector('#precioProducto')
                    const $btnProducto = clone.querySelector('button')
                    
                    //asigna atributos
                    $btnProducto.setAttribute('id', `${producto.idProducto}`)
                
                    $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                    
                
                    $descripcionProducto.append(producto.descripcion)
                    $precioProducto.append(producto.precio)
                    $catalogoProductos.append(clone)



                })
            
            
            
            
            },
            error: function(error) {
                
                console.log(error,"lol");
            }
        })
        
    })

    function addCarrito(event){
        $.ajax({
            url: '/',
            type: 'POST',
            dataType: "json",
            data: {
                page: 'ajax',
                action: 'addACesta',
                id: event.target.id
            },
            success: function(data) {
                console.log(event," xd") 
            },
            error: function(error) {
                
                console.log(error,"lol");
            }
        })  
          
    }


</script>

