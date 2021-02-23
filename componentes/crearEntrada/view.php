
<div id="editEntrada" class="container">
    <div  id="tituloEditarEntrada" class="text-center col-12">
        <h2><a href="?page=adminEntradas">Editar entrada</a></h2>
    </div> 
    <div>
        <div  class="col-12">
            <div class="col-12" id="add-photo-container">
                <div class="add-new-photo first" id="add-photo">
                    <span><i class="fas fa-camera"></i></span>
                </div>
                <input type="file" multiple id="add-new-photo" name="images[]">
            </div>
            <div class="contenedorImagen col-12">
                <div class="image-container">
                    <img id="imagenEntrada" src="" alt="Foto de la entrada">
                </div>
            </div>
            
            

        </div>
            
        <div id="caracteristicasEntrada" class="col-12">
            <input id="tituloEntrada" placeholder="Título de entrada" type="text" class="col-12 form-control"></input>
            <textarea id="descripcionEntrada" placeholder="Contenido de entrada" class="col-12 form-control" rows="25" cols="150"></textarea>
            
           
        </div>
        <div id="botonesEntrada" class="d-flex justify-content-center col-12">
                <button id="" onclick="publicarEntrada(event)" type="button" class="btn btn-sm btn-outline-success">Publicar entrada</button>
                <a id="" href="?page=adminEntrada"  type="button" class="btn btn-sm btn-outline-secondary">Volver</a>
        </div>
    </div>
    
</div>





<script>
const $id = parseInt(window.location.search.split("entradaid=")[1])

$('.contenedorImagen ').hide()    



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
    var img = $('<div class="col-12"><div class="image-container"><img id="imagenEntrada" src="' + imgCodified + '" alt="Foto del usuario"></div></div>');
    $(img).insertBefore($contenedor);
    $contenedor.hide();
}

//Guardar entrada

function publicarEntrada(event){
   
    if( document.getElementById("tituloEntrada").value==null|| document.getElementById("descripcionEntrada").value==null||document.getElementById("imagenEntrada")==null){

        alert("Tienes que cargar una imagen y rellenar todos los campos para guardar los cambios en la entrada");
    }else{


    var imagenBase64 = getBase64Image(document.getElementById("imagenEntrada"));
    var tituloEntrada= document.getElementById("tituloEntrada").value;
    var descripcionEntrada= document.getElementById("descripcionEntrada").value;
    
    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'crearEntrada',
            titulo: tituloEntrada,
            contenido: descripcionEntrada,
            imagen: imagenBase64
           
        },
            success: function(data) {
                console.log(tituloEntrada)
                console.log(descripcionEntrada)
               // window.location.href=`?page=adminEntradas`;
            },
            error: function(error){
                console.log(error)
            } 
    });}
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