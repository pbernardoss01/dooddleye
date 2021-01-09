<div class="container" id="producto">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <!-- There's only One image -->
            <div class="">
                <div class="main-product-image">
                    <img id="imagenProducto" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
             <div class="form-group row">
                <div class="col-sm-8 col-md-9 description">
                    <p id="descripcionProducto"></p>
                </div>
            </div>
            <div class="form-group price_elem row">
                <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Precio:</label>
                <div class="col-sm-8 col-md-9">
                    <span class="product-form-price" id="precioProducto"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Quantity" class="col-sm-3 col-md-3 form-control-label">Cantidad:</label>
                <div class="col-sm-8 col-md-9">
                    <input type="number" class="qty form-control" id="input-qty" name="qty" maxlength="5" value="1">
                </div>
            </div>


           

            <div class="form-group product-stock product-available row visible">
                <label class="col-sm-3 col-md-3 form-control-label"></label>
                <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                    <input type="button" onclick="" class="adc btn btn-primary" value="Añadir a la cesta">              
                </div>
            </div>
        </div>
       
    </div>
</div>


<script type="text/javascript">
    
    const $id = parseInt(window.location.search.split("productid=")[1])
    
    window.addEventListener('load', event_load => {
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarProducto',
            id: $id
        },
            success: function(data) {
                console.log(data[0].idSerieProducto)
                const $imagenProducto = $("#imagenProducto")
                const $descripcionProducto = $('#descripcionProducto')
                const $precioProducto = $('#precioProducto')
                
                $("#imagenProducto")[0].setAttribute('src', `/img/productos/${data[0].idSerieProducto}/${data[0].nombreProducto}.jpg`)
                $descripcionProducto.append(data[0].descripcion)
                $precioProducto.append(data[0].precio)

            },
            error: function(error) {
               
            }
    })
})
</script>






