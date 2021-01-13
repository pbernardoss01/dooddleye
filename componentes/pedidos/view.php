<div class="container" id="pedidos">
 
    <div id="pedido" class="panel panel-primary" style="display:none;">
        <div class="panel-heading">
            <h3 class="panel-title">Pedido</h3>
            
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th>Fecha del pedido: <p id="fechaPedido"></p></th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Precio Total:  <p id="precioTotal"></p></th>
                </tr>
            </thead>
            <tbody id="datosPedido">
                <tr  >
                    <td></td>
                    <td id="producto"></td>
                    <td id="cantidad"></td>
                    <td id="precioUnitario"></td>
                    <td></td>
                </tr>
               
            </tbody>
        </table>
    </div>


</div>

<script type="text/javascript">
    


    function borrarDuplicados(arr) {
    return arr.sort().filter(function(ProductoActual, PosicionActual, arry) {
        return !PosicionActual || ProductoActual != arry[PosicionActual - 1];
        })
    }


    window.addEventListener('load', event_load => {
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarPedidos'
        },
            success: function(data) {
  
                const $pedido = $("#pedido")
                console.log(data)
                var nuevoArray    = []
                var arrayTemporal = []

                    for(var i=0; i<data.length; i++){
                   arrayTemporal = nuevoArray.filter(resp => resp["Pedido"] == data[i]["fechaPedido"])
 /*                    if(arrayTemporal.length>0){
                        nuevoArray[nuevoArray.indexOf(arrayTemporal[0])]["Productos"].push(data[i]["nombreProducto"])
                    }else{
                        data.push({"Pedido" : data[i]["fechaPedido"] , "Productos" : [data[i]["nombreProducto"]]})
                    }
                    console.log(nuevoArray)
 */               }

        
                console.log(data)
               console.log(arrayTemporal)

                
            },
            error: function(error) {
          
        
                
            }
        })

        
    })




</script>

