<div  id="rowSeries" class="row" >
    <div id="productCard" style="display:none">
        <img src=""/>
        
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
                const $productCard = document.querySelector('#productCard')
                const $rowSeries = document.querySelector('#rowSeries')

                data.forEach(product => {
                    const clone = $productCard.cloneNode(true)
                    clone.style.display = 'block'
                    const $productImg = clone.querySelector('img')
                    $productImg.setAttribute('src', `/img/productos/animals/${product.nombreProducto}.jpg`)
                    $rowSeries.append(clone)

                })
            },
            error: function(error) {
                
                console.log(error,"lol");
            }
        })
        
    })

</script>