<div class="container" id="pedidos">
    <div class="row">
        <div id="tituloPedido" class="text-center col-12">
            <h3>Pedidos</h3>
        </div>    
    </div>
    <div id="pedido" class="row" style="display:none;">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-6 text-center">Fecha del pedido: <span id="fechaPedido"></span></div>
                <div class="col-6 text-center"> Precio Total:  <span id="precioTotal"></span></div>
            </div>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr class="filters">  
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                    </tr>
                </thead>
                <tbody id="datosPedido">
                    <tr>
                        <td id="producto"></td>
                        <td id="cantidad"></td>
                        <td id="precioUnitario"></td>
                    </tr>
                </tbody>
            </table>
        </div>
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
                const formateado = data.reduce((listado, row) => {
                    const productData = {
                        cantidad: row.cantidad,
                        precioProducto: row.precioProducto,
                        nombreProducto:  row.nombreProducto
                    };

                    if(!listado[row.fechaPedido]) {
                        listado[row.fechaPedido] = {
                            precioTotal: row.precioTotal,
                            productos: [productData]
                        } 
                    }else {
                        listado[row.fechaPedido].productos.push(productData)
                    }

                    return listado
                }, {})
                
                
                const $divPedidos = document.querySelector('#pedidos')
                const $tablaPedido = document.querySelector('#pedido')
          
                const fechasPedidos = Object.keys(formateado)
                
                fechasPedidos.forEach(fecha => {

                    const clone = $tablaPedido.cloneNode(true)
                    const tr = clone.querySelector('#datosPedido tr')
                    const tbody = clone.querySelector('#datosPedido')
                    
                    const $fecha = clone.querySelector('#fechaPedido')
                    const $precioTotal = clone.querySelector('#precioTotal')
                    clone.style.display = 'flex'
                    
                    $fecha.append(fecha)
                    $precioTotal.append(formateado[fecha].precioTotal)
                    
                    formateado[fecha].productos.forEach( producto=> {datosPedido
                    
                    
                        const cloneProducto = tr.cloneNode(true)

                        const $producto = cloneProducto.querySelector('#producto')
                        const $cantdad = cloneProducto.querySelector('#cantidad')
                        const $precioUnitario = cloneProducto.querySelector('#precioUnitario')
                        
                        $producto.append(producto.nombreProducto)
                        $cantdad.append(producto.cantidad)
                        $precioUnitario.append(producto.precioProducto)

                        tbody.append(cloneProducto)
                    
                    })
                  $divPedidos.append(clone)  
                  
                })

                
            },
            error: function(error) {
          
        
                
            }
        })

        
    })




</script>

