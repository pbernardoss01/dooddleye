<!-- Modal -->
<div id="login" class= "col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-12" aria-hidden="true">
  <div class="container-fluid">
    <div class="justify-content-center ">
      <div class=" align-items-center">
        <a href="index.php"><img src="/img/logo/logo1.png" class="img-fluid mx-auto d-block"> </a>
      </div>
      <div class="text-center titulo">
        Inicia sesión
      </div>
      
      <div class="form">
        <div id="log" class="form-group">
          <input id="mail" class="form-control" type="text"  placeholder="Correo electrónico">
          
          <input id="clave" class="form-control" type="password"  placeholder="Contraseña"> 
        </div>
        <div class="invalid-feedback">Has introducido tu contraseña o correo electronico de forma incorrecta. Revísalos y vuelve a intentarlo</div>   

        <div class="form-group text-center">
          <button id="btnLogin" class="btn btn-dark mb-2">Login</button>
        </div>
        <div class="form-group links">
          <a href="index.php?page=registro">¿No tienes una cuenta de Dooddleye? Crearte una ahora.</a>
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
    const $btnLogin = document.querySelector('#btnLogin')
  
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

    // Añadir las acciones a los botones
    $btnLogin.addEventListener('click', e => {
      e.preventDefault()

      if (!validForm()) {
        alert('Se ha de completar el formulario')
      } else {
        $.ajax({
          url: '/',
          type: 'POST',
          data: {
            page: 'ajax',
            action: 'loginUser',
            mail: $inputMail.value,
            clave: $inputClave.value,
          },
          success: function(data) {
           console.log(data)
           data=Boolean(data)
           
            if (data) {
              window.location.href="/";
              console.log("ha entrado")
            } else {
              $input =  document.querySelector('#log')
              $input.classList.add('is-invalid')
              
            }
            
           
          },
          error: function(error) {
            console.log(error)
          }
        })
      }
    })
  })
</script>