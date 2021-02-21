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
            

           

            <div id="botonesProducto">
                <input type="button" id="btnCarrito" onclick="addCarrito(event)" class="adc btn btn-primary col-sm-12 col-md-6 " value="Añadir a la cesta">              
                <a  href="?page=tienda" class="adc btn btn btn-outline-info col-sm-12 col-md-6" >Volver a la tienda</a> 

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
                console.log(data[0])
                const $imagenProducto = $("#imagenProducto")
                const $descripcionProducto = $('#descripcionProducto')
                const $precioProducto = $('#precioProducto')
                const $btnProducto = document.querySelector('#btnCarrito')
                
                $("#imagenProducto")[0].setAttribute('src', `${data[0].imagen}`)
                $btnProducto.setAttribute('data-id', `${data[0].idProducto}`)
                $descripcionProducto.append(data[0].descripcion)
                $precioProducto.append(data[0].precio)

            },
            error: function(error) {
               
            }
    })
})



//Funcion añadir a carrito. Añade el elemento seleccionado a la sesion
function addCarrito(event){

        console.log(event.target.dataset.id)
        $.ajax({
            url: '/',
            type: 'POST',
            dataType: "json",
            data: {
                page: 'ajax',
                action: 'addACesta',
                id:event.target.dataset.id
            },
            success: function(data) {
               console.log("exito")
                
            },
            error: function(error) {
               console.log(error)              
            }
        })  
    }
    
</script>






