<div id="nuevoProducto" class="container">
    <div class="titulo text-center col-12">
        <h2>Nuevo Producto</h2>
    </div> 
    <div class="d-flex">
        <div id="Images" class="col-md-5 col-xs-12">
            <div class="" id="add-photo-container">
                <div class="add-new-photo first" id="add-photo">
                    <span><i class="fas fa-camera"></i></span>
                </div>
                <input type="file" multiple id="add-new-photo" name="images[]">
            </div>
            <div class="col-12">
                <div class="image-container">
                    <img id="imagenProducto" src="" alt="Foto del producto">
                </div>
            </div>        
        </div>
            
        <div id="caracteristicasProducto" class="col-md-7 col-xs-12">
            <input id="nombreProducto" placeholder="Nombre de producto" type="text" class="col-12 form-control"></input>

            <select id="categoriaProducto" class="form-control">
                <option value="0">Categoria</option>
                <option value="1">Laminas</option>
                <option value="2">Tazas</option>
                <option value="3">Camisetas</option>
            </select>
            <select id="serieProducto" class="form-control">
                <option value="0">Serie</option>
                <option  value="1">Besto</option>
                <option  value="2">Koloi</option>
                <option value="3">Olona</option>
                <option  value="4">Malang</option>
            </select>
            <textarea id="descripcionProducto" placeholder="Descripción de producto" class="col-12 form-control" rows="2" cols="50"></textarea>
            
            <input id="precioProducto" placeholder="Precio de producto" type="number" class="col-12 form-control"></input>
        </div>
    </div>
    
    <div class="d-flex justify-content-center">
        <button id="" onclick="editarProducto(event)" type="button" class="btn btn-sm btn-outline-success">Editar producto</button>
        <a id="" href="?page=productosAdmin"  type="button" class="btn btn-sm btn-outline-secondary">Volver</a>
    </div>

    
</div>







<script>
// Eliminar previsualizaciones
    $(this).parent().remove();
    $("#add-photo-container ").hide();;

const idProducto = parseInt(window.location.search.split("productid=")[1]);
window.addEventListener('load', event_load => {
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarProducto',
            id: idProducto
        },
            success: function(data) {
                console.log(data[0])

                $("#imagenProducto")[0].setAttribute('src', `${data[0].imagen}`)
                $('#nombreProducto').val(data[0].nombreProducto)
                $('#descripcionProducto').append(data[0].descripcion)
                $("#serieProducto").val(parseInt(data[0].idSerieProducto))
                $("#categoriaProducto").val(parseInt(data[0].idCategoriaProducto))
                $("#precioProducto").val(data[0].precio)
            
            },
            error: function(error) {
               
            }
    })
})

// Abrir el inspector de archivos

$(document).on("click", "#add-photo", function(){
    $("#add-new-photo").click();
});



//Abrir el inspector de archivos

$(document).on("change", "#add-new-photo", function () {

    console.log(this.files);
    var files = this.files;
    var element;
    var supportedImages = ["image/jpeg", "image/png", "image/gif"];
    var seEncontraronElementoNoValidos = false;

    for (var i = 0; i < files.length; i++) {
        element = files[i];
        
        if (supportedImages.indexOf(element.type) != -1) {
            createPreview(element);
        }
        else {
            seEncontraronElementoNoValidos = true;
        }
    }

    

});


// Eliminar previsualizaciones

$(document).on("click", ".image-container", function(e){
    $(this).parent().remove();
    $("#add-photo-container").show();;
});


//Crear previsualizacion de la imagen


function createPreview(file) {
    var imgCodified = URL.createObjectURL(file);
    $contenedor=$("#add-photo-container");
    console.log($contenedor);
    var img = $('<div class="col-12"><div class="image-container"><img id="imagenCargada" src="' + imgCodified + '" alt="Foto del usuario"></div></div>');
    $(img).insertBefore($contenedor);
    $contenedor.hide();
}

//Guardar producto

function editarProducto(event){
    var nombreNuevoProducto = document.getElementById("nombreProducto").value;
    var categoriaNuevoProducto = document.getElementById("categoriaProducto").value;
    var serieNuevoProducto = document.getElementById("serieProducto").value;
    var imagenBase64 = getBase64Image(document.getElementById("imagenCargada"));
    var descripcionNuevoProducto= document.getElementById("descripcionProducto").value;
    var precioNuevoProducto= document.getElementById("precioProducto").value;
    console.log(imagenBase64)
    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'editarProducto',
            id: idProducto,
            nombre: nombreNuevoProducto,
            categoria: categoriaNuevoProducto,
            serie: serieNuevoProducto,
            imagen: imagenBase64,
            descripcion: descripcionNuevoProducto,
            precio: precioNuevoProducto
        },
            success: function(data) {
                console.log(data)
            },
            error: function(error){

            } 
    });
}


function getBase64Image(img) {
  var canvas = document.createElement("canvas");
  canvas.width = img.naturalWidth;
  canvas.height = img.naturalHeight;
  var ctx = canvas.getContext("2d");
  ctx.drawImage(img, 0, 0);
  var dataURL = canvas.toDataURL("image/png");
  return dataURL;
}






</script>