<div class="container" id="barraFiltros">
    <div class="row">
        <div class="col-2 pt-2" >
        <span><strong id="contador"></strong></span>
        </div>

        <div class="col-3">
            <form class="form-horizontal">
                <div class="form-group row">
                <label class="col-md-6 control-label text-right pt-2">Filtrar por categoria:</label>
                <div class="col-md-6">
                    <select id="filtrarCategoria" class="form-control"  onchange="filtradoCategoria(event)">
                        <option value="0">Todas</option>
                        <option value="1">Laminas</option>
                        <option value="2">Tazas</option>
                        <option value="3">Camisetas</option>
                       <!-- <option id="opcionCategoria" value="/techno/name/asc#category-gallery"></option>
--></select>
                </div>
                </div>
            <input type="hidden" value="WFbgp88A9K59yU/Kr1qyc/JRVvG8d0Po0W3R4a8zBNo=" name="authenticity_token">
            </form>
        </div>
       
        <div class="col-3">
            <form class="form-horizontal">
                <div class="form-group row">
                <label class="col-md-6 control-label text-right pt-2">Filtrar por serie:</label>
                <div class="col-md-6">
                    <select id="filtrarSerie" class="form-control" onchange="filtradoSerie(event)">
                        <option  value="0">Todas</option>
                        <option value="1">Animales</option>
                        <option  value="2">Automoviles</option>
                        <option value="3">Gente</option>
                        <option  value="4">Paisajes</option>
                    </select>
                </div>
                </div>
            <input type="hidden" value="WFbgp88A9K59yU/Kr1qyc/JRVvG8d0Po0W3R4a8zBNo=" name="authenticity_token">
            </form>
        </div>
        
    <div class="col-4">
        <form class="form-horizontal">
            <div class="form-group row">
            <label class="col-md-3 control-label text-left pt-2">Ordenar por:</label>
            <div class="col-md-9">
                <select id="filtrarPrecio" class="form-control" onchange="filtradoPrecio(event)">
                    <option value="...">
                        Selecciona...
                    </option>
                    
                    <option value="bajo">
                        Precio: de más bajo a más alto
                    </option>
                    
                    <option value="alto">
                        Precio: de más alto a más bajo
                    </option>
                
                </select>
            </div>
            </div>
            <input type="hidden" value="WFbgp88A9K59yU/Kr1qyc/JRVvG8d0Po0W3R4a8zBNo=" name="authenticity_token"></form>
        </div>
    </div>
    
  </div>


    <div class="col-12 row" id="catalogoProductos">
        
    
            <div id="tarjetaProducto" class="card col-lg-4 col-md-6 mb-4 " style="display:none">
                <a href="index.php/?page=producto&productid=">
                    <img  id="imagenProduto"  class="card-img-top" src="" alt="">
                </a>
                <div class="card-body">
                    <h5 id="precioProducto"></h5>
                    <p id="descripcionProducto" class="card-text"></p>
                    <button id=""  onclick="addCarrito(event)" type="button" data-id="" class="btn btn-sm btn-outline-secondary">Añadir a carrito</button>
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
                const $catalogoProductos = document.querySelector('#catalogoProductos')
                const $tarjetaProducto = document.querySelector('#tarjetaProducto')
                var contador=0

                data.forEach(producto => {
                    categorias.push(producto.idCategoriaProducto)
                    series.push(producto.idSerieProducto)
                    //clona la tarjeta modelo
                    contador++
                    const clone = $tarjetaProducto.cloneNode(true)
       
                    //asigna id y display a la tarjeta clon
                    
                    clone.style.display = 'flex'

                    //recoge tag img, descripcion, precio y boton 
                    const $productImg = clone.querySelector('img')
                    const $productEnlace = clone.querySelector('a')
                    const $descripcionProducto = clone.querySelector('#descripcionProducto')
                    const $precioProducto = clone.querySelector('#precioProducto')
                    const $btnProducto = clone.querySelector('button')
                    
                    //asigna atributos
                    clone.setAttribute('id', `producto${producto.idProducto}`)
                    clone.setAttribute('class', `card col-lg-4 col-md-6 mb-4 tarjetaProducto `)
                    clone.setAttribute('data-precio', `${producto.precio}`)
                    clone.setAttribute('data-serie', `${producto.idSerieProducto}`)
                    clone.setAttribute('data-categoria', `${producto.idCategoriaProducto}`)
                    $productEnlace.setAttribute('href', `index.php/?page=producto&productid=${producto.idProducto}`)
                
                    $productImg.setAttribute('src', `/img/productos/${producto.idSerieProducto}/${producto.nombreProducto}.jpg`)
                    
                    $descripcionProducto.append(producto.descripcion)
                    $precioProducto.append(producto.precio)
                    $catalogoProductos.append(clone)

                   
                })
                categorias = borrarDuplicados(categorias);
                series = borrarDuplicados(series);
          
                
                document.querySelector('#contador').append(contador+" productos")
            },
            error: function(error) {
                
        
                
            }
        })

 /*  
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'recogerCategorias'
        },
        success: function(data){
            const filtrarCategoria=document.querySelector("#filtrarCategoria")
            const opcionCategoria=document.querySelector("#opcionCategoria")
            console.log(data)
            data.forEach(categoria => {
                console.log(categoria)
                if(categorias.includes( categoria.idCategoriaProducto)){
                    const clone = $tarjetaProducto.cloneNode(true)
                    clone.append(categoria.nombre)
                    $filtrarCategoria.append(clone)
                }
            })


        },
        error: function(error){

        }
        })
        

        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'recogerSeries',
            series: series
        },
        success: function(data){

        },
        error: function(error){

        }
        })
        */
        
    })




    function addCarrito(event){
        $.ajax({
            url: '/',
            type: 'POST',
            dataType: "json",
            data: {
                page: 'ajax',
                action: 'addACesta',
                id: event.target.id
            },
            success: function(data) {
   
                
            },
            error: function(error) {
                
         
                
            }
        })  
          
    }
    
    function filtradoSerie(event){
        var contador= 0
        var opcionSeleccionada = document.querySelector("#filtrarSerie");
     
        
        if("0"== opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){
            $("#catalogoProductos .tarjetaProducto").each(function (){
                $(this)[0].style.display = 'flex'
            })
        }else{
            $("#catalogoProductos .tarjetaProducto").each(function (){
                if($(this)[0].dataset.serie != opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){
                    $(this)[0].style.display = 'none'
                    
                }else{
                    $(this)[0].style.display = 'flex'}
            })
        }
        $("#catalogoProductos .tarjetaProducto").each(function (){
            if($(this)[0].style.display=="flex"){
                contador++
            }
        })

        $('#contador').empty()
        $('#contador').append(contador+" productos")
        $("#filtrarCategoria").val("0")
           $("#filtrarPrecio").val("0")
    }






    function filtradoCategoria(event){
        var contador= 0
        /*parseInt(document.querySelector('#contador').innerHTML.charAt(0))
        */
        var opcionSeleccionada = document.querySelector("#filtrarCategoria");
        
        if("0"== opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){
            $("#catalogoProductos .tarjetaProducto").each(function (){
                $(this)[0].style.display = 'flex'
            })
        } else{
           $("#catalogoProductos .tarjetaProducto").each(function (){
          
               
                if($(this)[0].dataset.categoria != opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){
                    $(this)[0].style.display = 'none'
                  
               
                }else{
                    $(this)[0].style.display = 'flex'}
            })}
            $("#catalogoProductos .tarjetaProducto").each(function (){
                if($(this)[0].style.display=="flex"){
                    contador++
                
                }
            })
        $('#contador').empty()
           $('#contador').append(contador+" productos")
           $("#filtrarSerie").val("0")
           $("#filtrarPrecio").val("0")
    }


    function filtradoPrecio(event){
        var arrayProductos=[] 
        var opcionSeleccionada = document.querySelector("#filtrarPrecio");


        $("#catalogoProductos .tarjetaProducto").each(function (){
            arrayProductos.push({precio:$(this)[0].dataset.precio, div:$(this)[0]})
        })
      
        
        if("bajo"== opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){    
            $("#catalogoProductos .tarjetaProducto").each(function (){
            arrayProductos.push({precio:$(this)[0].dataset.precio, div:$(this)[0]})
                $(this)[0].remove
            })
            arrayProductos=arrayProductos.sort((a,b)=>a.precio-b.precio)
            arrayProductos.forEach(activity => {
            
                
                $('#catalogoProductos').append(activity["div"])
            })
        
        } else if("alto"== opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){    
            
            $("#catalogoProductos .tarjetaProducto").each(function (){
            arrayProductos.push({precio:$(this)[0].dataset.precio, div:$(this)[0]})
                $(this)[0].remove
            })
            arrayProductos=arrayProductos.sort((a,b)=>b.precio-a.precio)
            arrayProductos.forEach(activity => {
                $('#catalogoProductos').append(activity["div"])
            })

        
        }if("..."== opcionSeleccionada.options[opcionSeleccionada.selectedIndex].value){    
           
            $("#catalogoProductos .tarjetaProducto").each(function (){
                $(this)[0].style.display="flex"
        })        
    }
    $("#filtrarCategoria").val("0")
        $("#filtrarSerie").val("0")
    }

</script>

