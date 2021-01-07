
    <div class="col-12 row" id="catalogoProductos">
        
          <div class="col-lg-4 col-md-6 mb-4" style="display:none">
            <div id="tarjetaProducto" class="card col-lg-4 col-md-6 mb-4">
                <a href="">
                    <img  id="imagenProduto"  class="card-img-top" src="" alt="">
                </a>
                <div class="card-body">
                    <h5 id="precioProducto"></h5>
                    <p id="descripcionProducto" class="card-text"></p>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Añadir a carrito</button>
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
                console.log(data)
                const $catalogoProductos = document.querySelector('#catalogoProductos')
                const $tarjetaProducto = document.querySelector('#tarjetaProducto')
                

                data.forEach(producto => {
                    const clone = $tarjetaProducto.cloneNode(true)
                    console.log(clone.querySelector('#descripcionProducto'))
                    clone.style.display = 'flex'
                    const $productImg = clone.querySelector('img')
                    $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                    const $descripcionProducto = clone.querySelector('#descripcionProducto')
                    const $precioProducto = clone.querySelector('#precioProducto')

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

</script>