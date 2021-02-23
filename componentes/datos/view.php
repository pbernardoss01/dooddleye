<div id="datos" class="container">
<div class="text-center titulo">
        Tus datos
      </div>

<label>Nombre: </label><input id="nombre" class="form-control" type="mail"  value="<?php echo $_SESSION['userData']['nombre']?>">
<label>Apellidos: </label><input id="apellidos" class="form-control" type="mail" value="<?php echo $_SESSION['userData']['apellidos']?>">
<label>Dirección</label><input id="direccion" class="form-control" type="mail" value="<?php echo $_SESSION['userData']['direccion']?>">
<label>Teléfono</label><input id="telefono" class="form-control" type="mail"  value="<?php echo $_SESSION['userData']['telefono']?>">
<label>Correo electrónico</label><input id="email" class="form-control" type="mail"  value="<?php echo $_SESSION['userData']['mail']?>">
<button id="btnLogin" onclick="cambiarDatos(event)" class="btn btn-dark mb-2">Actualizar datos</button>


</div>




<script type="text/javascript">

    function cambiarDatos() {
        const $nombre = document.querySelector("#nombre").value
        const $apellidos = document.querySelector("#apellidos").value
        const $direccion = document.querySelector("#direccion").value
        const $telefono = document.querySelector("#telefono").value
        const $email = document.querySelector("#email").value

        $.ajax({
        url: '/',
        type: 'POST',
        dataType: "json",
        data: {
            page: 'ajax',
            action: 'cambiarDatos',
            nombre: $nombre,
            apellidos: $apellidos,
            direccion: $direccion,
            telefono: $telefono,
            mail: $email
        },
        success: function(data) {
      
         window.location.href="?page=confirmacionDatos";


        },
        error: function(error) { 
            console.log(error)
        }
    })
    }
</script>

