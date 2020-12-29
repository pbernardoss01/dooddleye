<!-- Modal -->
<div id="login" class= "col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-12" aria-hidden="true">
  <div class="container">
    <div class="justify-content-center ">
      <div class=" align-items-center">
        <a href="index.php"><img src="./img/Logo/logoDooddleye.png" class="img-fluid mx-auto d-block"> </a>
      </div>
      <div class="text-center titulo">
        Registro
      </div>
      <div class="form-group links text-center">
        <a href="index.php?page=login">Ya tienes una cuenta de Dooddleye. Accede a ella.</a>
      </div>
      <div class="form">
        <div class="form-group">
          <input id="mail" class="form-control" type="mail"  placeholder="Correo electrónico">
          <input id="clave" class="form-control" type="password"  placeholder="Contraseña"> 
          <input id="clave2" class="form-control" type="password"  placeholder="Confirmar contraseña"> 
        </div>

        <div class="form-group text-center">
          <button id="btnRegistro" class="btn btn-dark mb-2">Continuar</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
  

<!-- Script -->


<script type="text/javascript">

  window.addEventListener('load', event_load => {

    const $inputMail = document.querySelector('#mail')
    const $inputClave = document.querySelector('#clave')
    const $inputClave2 = document.querySelector('#clave2')
    const $btnRegistro = document.querySelector('#btnRegistro')

    function validForm() {
      let ok = true

      if ($inputMail.value.trim() === '') {
        ok = false;
        // Si quieres muesta un mensaje de error
      }

      if ($inputClave.value.trim() === '') {
        ok = false;
        // Si quieres muesta un mensaje de error
      }
      
      return ok
    }
    function validClave($inputClave, $inputClave2) {
      let ok = false

      if ($inputClave != $inputClave2) {
        ok = true; 
      }
      
      return ok
    }

    function validUser($mail) {
      let ok = false;
      $emailExp = /[a-zA-Z0-9]@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;
      console.log($emailExp.test($mail));
      if ($emailExp.test($mail)){
        ok = true;
      }
      console.log(ok)
      return ok
    }

    // Añadir las acciones a los botones
    $btnRegistro.addEventListener('click', e => {
      e.preventDefault()

      if (!validForm()) {
        alert('Se ha de completar el formulario')
//      } else if (!validUser($inputMail)) {
//        alert('Debes introducir un email')
      } else if (!validClave($inputClave)) {
        alert('Las contraseñas no son iguales')
      } else
      {
        console.log("entra")
        $.ajax({
          url: '/',
          type: 'POST',
          data: {
            page: 'ajax',
            action: 'createUser',
            mail: $inputMail.value,
            clave: $inputClave.value
          },
          success: function(data) {
            
            window.location.href="/dooddleye?page=login";
          },
          error: function(error) {
            alert(error)
            alert("Usuario creado");
          }
        })
      }
    })
  })
</script>