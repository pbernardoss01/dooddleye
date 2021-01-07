<div class="col-12" id="catalogoProductos">
    <div class="col-md-4" style="display:none">
        <div id="tarjetaProducto" class="card mb-4 shadow-sm">
            <a href=""><img id="imagenProduto" src="" class="bd-placeholder-img card-img-top" ></a> 
            <div class="card-body">
                <p id="descripcionProducto" class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Añadir a carrito</button>
                    </div>
                    <span id="precioProducto"></span>
                </div>
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
                    clone.style.display = 'block'
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