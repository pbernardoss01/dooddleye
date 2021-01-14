
<div class="jumbotron" style="margin:2em 0em;">
        <h1>Mi trabajo</h1>
        <p class="lead">Con esta página presento todo mi trabajo como ilustrador. Desde aquí tenéis disponibles todas mis láminas y algunos otros productos que tienen estampados mis 
        ilustraciones, para poder comprarlas. Además está disponible todo mi currículum y un blog donde voy contando mi día como ilustrador.</p>
        <a class="btn btn-lg btn-primary" href="index.php/?page=curriculum" role="button">Lee mi curriculum</a>
      </div>
<div  id="rowSeries" class="row">
    <div id="productCard" class="col-lg-6 col-md-6 col-sm-12 tarjetaSerie">
        <a class="" href="index.php/?page=tienda" role="button">
            <img class="col-12 imagenSerie" src="/img/productos/1/animal1.jpg"/>
            <div class="overlaySerie">
                <div class="textHoverSerie">Besto</div>
            </div>
        </a>
    </div>
    <div id="productCard"  class="col-lg-6 col-md-6 col-sm-12 tarjetaSerie">
    <a class="" href="index.php/?page=tienda" role="button">
        <img class="col-12 imagenSerie" src="/img/productos/2/vehiculo1.jpg"/>
        <div class="overlaySerie">
            <div class="textHoverSerie">Koloi</div>
        </div> </a>
    </div>
    <div id="productCard" class="col-lg-6 col-md-6 col-sm-12 tarjetaSerie">
    <a class="" href="index.php/?page=tienda" role="button">  <img class="col-12 imagenSerie" src="/img/productos/3/persona1.jpg"/>
        <div class="overlaySerie">
            <div class="textHoverSerie">Olona</div>
        </div></a>
    </div>
    <div id="productCard" class="col-lg-6 col-md-6 col-sm-12 tarjetaSerie">
    <a class="" href="index.php/?page=tienda" role="button">  <img class="col-12 imagenSerie" src="/img/productos/3/persona1.jpg"/>
        <img class="col-12 imagenSerie" src="/img/productos/4/paisaje1.jpg"/>
        <div class="overlaySerie">
            <div class="textHoverSerie">Malang</div>
        </div></a>
    </div>
</div>


<div id="sliderProductos" class="container-fluid">
    <div id="carouselSliderProductos" class="carousel slide" data-ride="carousel">
        <div  id="tituloSliderProducto" class="row d-flex justify-content-center">
            <h4>Productos destacados</h4>
</div>
    <ol id="indicadoresSliderProductos" class="carousel-indicators">
        <li data-target="#carouselSliderProductos" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSliderProductos" data-slide-to="1"></li>
        <li data-target="#carouselSliderProductos" data-slide-to="2"></li>
        <li data-target="#carouselSliderProductos" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div id="productosBesto" class="row d-flex justify-content-center">
                <div id="cartaSliderProducto" class="card cartaSliderProducto" style="display:none; width: 25em;">
                    <a id="productoEnlace" >
                        <img id="imagenProductoSlider" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            
                            <p id="descripcionProducto"></p>
                        
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div id="productosKoloi" class="row d-flex justify-content-center">
                
        
            </div>
        </div>
        <div class="carousel-item">
            <div id="productosOlona" class="row d-flex justify-content-center">
               
            </div>
        </div>
        <div class="carousel-item">
            <div id="productosMalang" class="row d-flex justify-content-center">
               
            </div>
        </div>
    </div>
    
    </div>
</div>




<script type="text/javascript">
    


    function borrarDuplicados(arr) {
    return arr.sort().filter(function(ProductoActual, PosicionActual, arry) {
        return !PosicionActual || ProductoActual != arry[PosicionActual - 1];
        })
    }



    var categorias=[]
                var series=[]


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
                const $productosBesto = document.querySelector('#productosBesto')
                const $productosMalang = document.querySelector('#productosMalang')
                const $productosOlona = document.querySelector('#productosOlona')
                const $productosKoloi = document.querySelector('#productosKoloi')
                const $cartaSliderProducto = document.querySelector('#cartaSliderProducto')
                var contadorBesto=0
                var contadorKoloi=0
                var contadorOlona=0
                var contadorMalang=0
                const stop= 4
                for (let i = 0; i < data.le; i++) {
                    str = str + i;
                }
                data.forEach(producto => {



                    if(producto.idSerieProducto=="1" && contadorBesto!=stop){

                        const clone = $cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productoEnlace = clone.querySelector('#productoEnlace')
                        $productoEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        $productosBesto.append(clone)
                        contadorBesto++
                    }

                    if(producto.idSerieProducto=="2" && contadorKoloi!=stop){
                        const clone = $cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productEnlace = clone.querySelector('#productoEnlace')
                        $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        $productosKoloi.append(clone)
                        contadorKoloi++
                        
                    }
                    if(producto.idSerieProducto=="3" && contadorOlona!=stop){
                        const clone = $cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productEnlace = clone.querySelector('#productoEnlace')
                        $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        $productosOlona.append(clone)
                        contadorOlona++
                    }
                    if(producto.idSerieProducto=="4" && contadorMalang!=stop){
                        const clone = $cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productEnlace = clone.querySelector('#productoEnlace')
                        $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        $productosMalang.append(clone)
                        contadorMalang++
                    }

                    
                  

                   
                })
               
            },
            error: function(error) {
                
        
                
            }
        })  })

      

</script>

