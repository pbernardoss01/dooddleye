
<div class="jumbotron">
    <div class="d-flex justify-content-center">
        <h1>Mi trabajo</h1>
    </div>
    <div class="d-flex justify-content-center textoJumbotron">    
        <p>Con esta página presento todo mi trabajo como ilustrador. Desde aquí tenéis disponibles todas mis láminas y algunos otros productos que tienen estampados mis 
        ilustraciones, para poder comprarlas. Además está disponible todo mi currículum y un blog donde voy contando mi día como ilustrador.</p>
    </div>
    <div class="d-flex justify-content-center">    
        <a class="btn btn-outline-secondary btn-lg" href="index.php/?page=curriculum" role="button">Lee mi curriculum</a>
    </div>
</div>
<div  id="rowSeries" class="row">
    <div id="productCard" class="col-lg-6 col-md-6 col-12 tarjetaSerie">
        <a class="" href="index.php/?page=tienda" role="button">
            <img class="col-12 imagenSerie" src="/img/productos/1/animal1.jpg"/> <div class="textHoverSerie">Besto</div>
            <div class="overlaySerie">
            </div>
        </a>
    </div>
    <div id="productCard"  class="col-lg-6 col-md-6 col-12 tarjetaSerie">
        <a class="" href="index.php/?page=tienda" role="button">
            <img class="col-12 imagenSerie" src="/img/productos/2/vehiculo1.jpg"/> <div class="textHoverSerie">Koloi</div>
            <div class="overlaySerie">
            </div>
        </a>
    </div>
    <div id="productCard" class="col-lg-6 col-md-6 col-12 tarjetaSerie">
    <a class="" href="index.php/?page=tienda" role="button">  
    <img class="col-12 imagenSerie" src="/img/productos/3/persona1.jpg"/><div class="textHoverSerie">Olona</div>
        <div class="overlaySerie">
            
        </div></a>
    </div>
    <div id="productCard" class="col-lg-6 col-md-6 col-12 tarjetaSerie">
    <a class="" href="index.php/?page=tienda" role="button">  
        <img class="col-12 imagenSerie" src="/img/productos/4/paisaje1.jpg"/>
        <div class="textHoverSerie">Malang</div>
        <div class="overlaySerie">
           
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
    <div class="carousel-inner" id="sliderContenedorProductos">
        <div class="carousel-item active">
            <div id="productosBesto" class="row d-flex justify-content-center">
                <div id="cartaSliderProducto" class="card cartaSliderProducto col-xs-12 col-sm-12  col-md-12  col-lg-3" style="display:none;">
                    <a id="productoEnlace" >
                        <img id="imagenProductoSlider" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            
                            <p id="descripcionProducto"></p>
                        <a id="linkProducto" class="btn btn-outline-info btn-sm" href="">Ver producto</a>
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
                const productosBesto = document.querySelector('#productosBesto')
                const productosMalang = document.querySelector('#productosMalang')
                const productosOlona = document.querySelector('#productosOlona')
                const productosKoloi = document.querySelector('#productosKoloi')
                const cartaSliderProducto = document.querySelector('#cartaSliderProducto')
                
                var contadorBesto=0
                var contadorKoloi=0
                var contadorOlona=0
                var contadorMalang=0
                const stop= 4
                for (let i = 0; i < data.lenght; i++) {
                    str = str + i;
                }
                data.forEach(producto => {

console.log(producto)
console.log(contadorBesto)
console.log(stop)


                    if(producto.idSerieProducto=="1" && contadorBesto!=stop){

                        const clone = cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productoEnlace = clone.querySelector('#productoEnlace')
                        const $linkProducto = clone.querySelector('#linkProducto')
                        $productoEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        $linkProducto.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        productosBesto.appendChild(clone)
                        contadorBesto++
                    }

                    if(producto.idSerieProducto=="2" && contadorKoloi!=stop){
                        const clone = cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productEnlace = clone.querySelector('#productoEnlace')
                        $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        console.log(clone)
                        productosKoloi.appendChild(clone)
                        contadorKoloi++
                        
                    }
                    if(producto.idSerieProducto=="3" && contadorOlona!=stop){
                        const clone = cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productEnlace = clone.querySelector('#productoEnlace')
                        $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        productosOlona.appendChild(clone)
                        contadorOlona++
                    }
                    if(producto.idSerieProducto=="4" && contadorMalang!=stop){
                        const clone = cartaSliderProducto.cloneNode(true)
                        clone.setAttribute('id', `producto${producto.idProducto}`)
                        clone.style.display = 'flex'
                        const $productEnlace = clone.querySelector('#productoEnlace')
                        $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                        const $productImg = clone.querySelector('img')
                        $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                        const $descripcionProducto = clone.querySelector('#descripcionProducto')
                        $descripcionProducto.append(producto.descripcion)
                        productosMalang.appendChild(clone)
                        contadorMalang++
                    }

                    
                  

                   
                })
               
            },
            error: function(error) {
                
                console.log(error)      
                
            }
        })  })

      

</script>

