<div class="card shopping-cart">
            <div class="card-header text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
               <h2>Tu cesta</h2>
         
                <div class="clearfix"></div>
            </div>
            <div id="listaCesta" class="card-body">
                    <!-- PRODUCT -->
                    <?php 
                    if(!isset($_SESSION['cesta'])){
                        
                      echo "<h3>No hay productos en la cesta</h3>";
                    }else{
                   
                        echo '<div id="producto" class="row" style="display:none">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 id="descripcionProducto"> </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong id="precioProducto"></strong><span class="text-muted">x</span></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                    </div>';
                    }
                        
                        ?>
                    
            </div>




            <div class="card-footer">
                
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Tramitar pedido</a>
                    <div class="pull-right" style="margin: 5px">
                        Total: <b id="totalCarrito"></b>
                    </div>

                    <a href="" class="btn btn-outline-info btn-sm pull-right">Continua comprando</a>
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
            action: 'mostrarCesta'
        },
            success: function(data) {
                console.log(data)
                const $listaCesta = document.querySelector('#listaCesta')
                const $producto = document.querySelector('#producto')
                
                data.forEach(producto => {

                    //clona la tarjeta modelo
                    const clone = $producto.cloneNode(true)
       
                    //asigna id y display a la tarjeta clon
                    
                    clone.style.display = 'flex'

                    //recoge tag img, descripcion, precio y boton 
                    const $productImg = clone.querySelector('img')
                    const $descripcionProducto = clone.querySelector('#descripcionProducto')
                    const $precioProducto = clone.querySelector('#precioProducto')
                    
                    
                    //asigna atributos
                   
                
                    $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                    
                
                    $descripcionProducto.append(producto.descripcion)
                    $precioProducto.append(producto.precio)
                    $listaCesta.append(clone)



                })
            
            
            
            
            },
            error: function(error) {
                
                console.log(error,"lol");
            }
        })
        
    })



    </script>
<?php var_dump($_SESSION)?>