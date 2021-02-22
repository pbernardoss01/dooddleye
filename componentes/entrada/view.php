<div id="entradaBlog">

    <div id="cabeceraEntrada">
        <h1 id="tituloEntrada"></h1>
        <strong id="fechaEntrada"></strong>
        <img id="imagenEntrada">
    </div>
    <div id="cuerpoEntrada" class="container" >
        <div id="contenidoEntrada"></div>
    </div>
</div>

<div id="comentariosEntrada">
    <div  class="container" >
    <h3 class="col-12" id="tituloComentario">Comentario</h3>
        <div id="nuevoComentarioEntrada">
         
            <textarea class="col-12 form-control" id="textoComentario" name="comment" cols="45" rows="4" placeholder="Añade un comentario..." aria-required="true"></textarea>
            <input  onclick="publicar(event)" class="btn btn-dark" type="button"  value="Publicar">
        </div>

        <div id="listaComentariosEntrada">
            <div id="comentarioEntrada" >
                <h5><strong id="autorComentario"></strong> dice...</h5>
                <p class="col-12" id="contenidoComentario"></p>
                <strong id="fechaComentario"></strong>
                
            </div>
        </div>

    </div>
</div>








<script>

const $id = parseInt(window.location.search.split("entradaid=")[1])
$('#comentarioEntrada').hide()
    window.addEventListener('load', event_load => {
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarEntrada',
            id: $id
        },
            success: function(data) {
                console.log(data)
                console.log($id)

                 $tituloEntrada = $('#tituloEntrada')
                 $contenidoEntrada = $('#contenidoEntrada')
                 $fechaEntrada = $('#fechaEntrada')
                
                
                $("#imagenEntrada")[0].setAttribute('src', `${data[0].imagen}`)
               
                $fechaEntrada.append(data[0].fecha)
                $tituloEntrada.append(data[0].titulo)
                $contenidoEntrada.append(data[0].contenido)
                

            },
            error: function(error) {
               
            }
        })
  
    
        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'mostrarComentariosEntradas',
            id: $id
        },
            success: function(data) {
                console.log(data)
                const $comentarioEntrada = document.querySelector('#comentarioEntrada')
                const $listaComentariosEntrada = document.querySelector('#listaComentariosEntrada')

                data.forEach(comentario => {
                    const clone = $comentarioEntrada.cloneNode(true)
                    console.log(comentarioEntrada.titulo)
                   
                    const $autorComentario = clone.querySelector('#autorComentario')
                    const $contenidoComentario = clone.querySelector('#contenidoComentario')
                    const $fechaComentario = clone.querySelector('#fechaComentario')
                    
                    clone.style.display = 'block'
                    $autorComentario.append(comentario.nombre)
                    $contenidoComentario.append(comentario.contenido)
                    $fechaComentario.append(comentario.fecha)
                    $listaComentariosEntrada.append(clone)
                })
            },
            error: function(error) {
               
            }
        })
    })


function publicar(event){
    $contenidoComentario =document.getElementById("textoComentario").value
    console.log($contenidoComentario)
    $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'crearComentario',
            idEntrada: $id,
            contenidoComentario: $contenidoComentario
        },
        success: function(data) {
            location.reload();
            
        },
            error: function(error) {
               
        }
    })
    

}



</script>

