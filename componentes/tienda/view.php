<div class="col-12" id="catalogoProductos">
	<figure class="col-md-4 col-lg-3 card card-product" id="tarjetaProducto" style="display:none">
		<div class="img-wrap">
      <img id="imagenProduto" src="" class="col-12">
    </div>
		<figcaption class="info-wrap">
				<p id="descripcionProducto"></p>
		</figcaption>
		<div class="bottom-wrap">
			<a href="" class="btn btn-sm btn-primary float-right">Añadir a carrito</a>	
			<div class="price-wrap h5">
				<span id="precioProducto"></span>
			</div>
		</div>
	</figure>
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