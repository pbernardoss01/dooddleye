
<!-- Modal -->
<div id="registro" class= "offset-3 col-6" aria-hidden="true">
  <div class="container-fluid">   
    <div id="logoRegistro" class="row row offset-3 col-6 ">
      <a href="index.php"><img src="/img/logo/logo1.png" class="img-fluid mx-auto d-block"> </a>
    </div>

    <div class="row d-flex justify-content-center titulo">
      Registro
    </div>

    <div class="form-group links text-center">
      <a href="?page=login">Ya tienes una cuenta de Dooddleye. Accede a ella.</a>
    </div>
  
    <div id="formularioRegistro" class="form">
      
      <div class="formularioRegistro" >
        <div class="row" >
          <!-- Nombre -->  
          <div class="control-group col-md-3 col-12 "><div class="obligatorio">*</div>    
            <input id="nombre" class="form-control" type="text"  placeholder="Nombre">
            <div class="invalid-feedback">
                Formato incorrecto
            </div>     
          </div>
          <!--Primer apellido-->  
          <div class="control-group col-md-3 col-12"><div class="obligatorio">*</div>    
            <input id="apellidos" class="form-control " type="text"  placeholder="Apellidos">
            <div class="invalid-feedback">
              Numero incorrecto
            </div>     
          </div>
          
          <!-- telefono -->  
          <div class="control-group col-md-3 col-12"><div class="obligatorio">*</div>    
            <input id="telefono" class="form-control " type="text"  placeholder="telefono">
            <div class="invalid-feedback">
              El formato de numeración son 9 dígitos, siendo el primero 9, 6 ó 7
            </div>     
          </div>

        </div>
      </div>

      <div id="direccion" class="formularioRegistro" >
        
        <!-- direccion linea 1 -->
        <div class="control-group"><div class="obligatorio">*</div>    
          <input id="linea1" name="linea1" type="text" placeholder="Calle, plaza, vía, etc." class="form-control">  
        </div>
        <!-- direccion linea 2 -->            
        <div class="control-group"><div class="obligatorio">*</div>    
          <input id="linea2" name="linea2" type="text" placeholder="Apartamento, suite, bloque, edificio, piso, etc." class="form-control">
        </div>

        <div class="row">
          <div class="control-group col-md-3 col-12"><div class="no-obligatorio">.</div>    
            
            <select id="pais" name="country"  class="form-control ">
                <option value="AF">Afghanistan</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctica</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia</option>
                <option value="BA">Bosnia and Herzegowina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="BN">Brunei Darussalam</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="CV">Cape Verde</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos (Keeling) Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, the Democratic Republic of the</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Cote d'Ivoire</option>
                <option value="HR">Croatia (Hrvatska)</option>
                <option value="CU">Cuba</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czech Republic</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="TP">East Timor</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands (Malvinas)</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="FX">France, Metropolitan</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HM">Heard and Mc Donald Islands</option>
                <option value="VA">Holy See (Vatican City State)</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran (Islamic Republic of)</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Korea, Democratic People's Republic of</option>
                <option value="KR">Korea, Republic of</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Lao People's Democratic Republic</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libyan Arab Jamahiriya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macau</option>
                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia, Federated States of</option>
                <option value="MD">Moldova, Republic of</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="AN">Netherlands Antilles</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="RE">Reunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russian Federation</option>
                <option value="RW">Rwanda</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint LUCIA</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SK">Slovakia (Slovak Republic)</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="España"  selected="selected">España</option>
                <option value="LK">Sri Lanka</option>
                <option value="SH">St. Helena</option>
                <option value="PM">St. Pierre and Miquelon</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syrian Arab Republic</option>
                <option value="TW">Taiwan, Province of China</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania, United Republic of</option>
                <option value="TH">Thailand</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Viet Nam</option>
                <option value="VG">Virgin Islands (British)</option>
                <option value="VI">Virgin Islands (U.S.)</option>
                <option value="WF">Wallis and Futuna Islands</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="YU">Yugoslavia</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
            </select> 
          </div>
        
            <!-- ciudad -->  
          <div class="col-md-3 col-12 control-group"><div class="obligatorio">*</div>
            <input id="ciudad" name="ciudad" type="text" class="form-control" placeholder="Ciudad">
          </div>
            <!-- provincia --> 
          <div class="col-md-3 col-12 control-group"> <div class="obligatorio">*</div>    
            <input id="provincia" name="provincia" type="text" class="form-control" placeholder="Estado/Provincia/Región">          
          </div>
            <!-- Codigo postal -->  
          <div class="col-md-3 col-12 control-group"><div class="obligatorio">*</div>    
            <input id="CP" name="CP" type="text" class="form-control" placeholder="Codigo postal">           
          </div>      
          <div class="invalid-feedback">
              Revisa los datos de dirección
          </div> 
        </div>
      </div>

      <div class="row formularioRegistro" >
        <!-- Correo electronico -->  
        <div class="col-md-3 col-12 control-group"><div class="obligatorio">*</div>    
          <input id="mail" class="form-control" type="mail"  placeholder="Correo electrónico">
          <div class="invalid-feedback">
            Correo electronico incorrecto
          </div>       
        </div>  
        <!-- Contraseña -->  
        <div class="col-md-3 col-12 control-group"><div class="obligatorio">*</div>    
          <input id="clave" class="form-control" type="password"  placeholder="Contraseña">
          <div class="invalid-feedback">
            Contraseña no valida
          </div>       
        </div>
        <!-- Confirmacion de contraseña -->  
        <div class="col-md-3 col-12 control-group"><div class="obligatorio">*</div>    
          <input id="clave2" class="form-control" type="password"  placeholder="Confirmar contraseña"> 
          <div class="invalid-feedback">
            La contraseña no coincide
          </div>       
        </div>
      </div>
      <div class="obligatorio">*Obligatorio</div>  
      <div class="obligatorio" style="margin-top:0.5em"> La contraseña debe contener al menos un caracter especial, una mayuscula y un numero</div>  
      
    </div>


    <!-- Boton -->
    <div class="row d-flex justify-content-center">
      <div class="form-group text-center col-md-3 col-12 ">
        <button id="btnRegistro" onclick="realizarRegistro(event)" class="btn btn-dark mb-2">Registrarse</button>
      </div>
    </div>
  
  </div>
</div>
<!-- Script -->


<script type="text/javascript">

//Validacion de los campos 
  function validate(data) {
      let valid = true

      if ('nombre' in data ) {
          const $input =  document.querySelector('#nombre')
          if (data.nombre.trim() !== '' && (/^[A-Za-zÀ-ÿ\s]{0,50}$/).test(data.nombre)) {
              
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
              valid = false
    console.log("nombre")

          }
      }
      if ('apellidos' in data ) {
          const $input =  document.querySelector('#apellidos')
          if (data.apellidos.trim() !== '' && (/^[A-Za-zÀ-ÿ\s]{0,50}$/).test(data.apellidos)) {
     
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
              console.log("apellidos")
          
              valid = false
          }
      }

       
      if ('telefono' in data ) {
          const $input =  document.querySelector('#telefono')
          if (data.telefono.trim() !== '' && (/^\(?([9,7,6]{1})([0-9]{8})$/).test(data.telefono)) {
              
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
            
              valid = false
  console.log("telefono")

          }
      }
      if ('direccion' in data ) {
          const $input =  document.querySelector('#direccion')
          if (data.direccion.trim() !== '' && (/^[A-Za-z0-9ºªÀ-ÿ\s]{10,200}$/).test(data.direccion)) {
           
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
         
              valid = false
  console.log("direccion")

          }
      }
      if ('mail' in data ) {
          const $input =  document.querySelector('#mail')
          if (data.mail.trim() !== '' && (/^[a-zA-Z0-9._-]{2,15}?@[a-zA-Z_]{2,15}?\.[a-zA-Z]{2,3}$/).test(data.mail)) {
              
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
              valid = false
  console.log("mail")

          }
      }
      if ('clave' in data ) {
          const $input =  document.querySelector('#clave')
          if (data.clave.trim() !== ''  && (/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[_.#?!@$%^&*-]).{8,}$/).test(data.clave)) {
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
              valid = false
  console.log("clave")
        
          }
      }
      if ('clave2' in data ) {
          const $input =  document.querySelector('#clave2')
          if (data.clave2==data.clave) {
              $input.classList.remove('is-invalid')
          } else {
              $input.classList.add('is-invalid')
              valid = false
  console.log("clave2")
        
          }
      }
      

      return valid
  }

//Evento del boton "registro"
  function realizarRegistro(event){

    console.log("ok")
    //Recogida de los datos de 
    const $direccion = document.querySelector('#linea1').value + " " + document.querySelector('#linea2').value  + "\n" +  document.querySelector('#CP').value + " " + document.querySelector('#ciudad').value + "\n" + document.querySelector('#provincia').value + " " + document.querySelector('#pais').value;
    

    const datosNuevo = {
      nombre: document.querySelector('#nombre').value,
      apellidos: document.querySelector('#apellidos').value,
      telefono: document.querySelector('#telefono').value,
      direccion: $direccion,
      mail: document.querySelector('#mail').value,
      clave: document.querySelector('#clave').value,
      clave2: document.querySelector('#clave2').value
    }
   console.log(datosNuevo)
    const isValid = validate(datosNuevo)
  console.log(isValid)
    
  if (isValid) {
      $.ajax({
      url: '/',
      type: 'POST',
      dataType: "json",
      data: {
          page: 'ajax',
          action: 'checkUser',
          mail: datosNuevo.mail
          
      },
      success: function(data) {
          console.log(data)
          data=data.split('"').join("");
        if(data=="true"){
          alert("Ya existe una cuenta con ese correo")
        }else{

        
          $.ajax({
          url: '/',
          type: 'POST',
          dataType: "json",
          data: {
              page: 'ajax',
              action: 'createUser',
              nombre: datosNuevo.nombre,
              apellidos: datosNuevo.apellidos,
              direccion: datosNuevo.direccion,
              telefono: datosNuevo.telefono,
              mail: datosNuevo.mail,
              clave: datosNuevo.clave
              
          },
            success: function(resultado) {
              window.location.href="?page=confirmacionRegistro";
            },
            error: function(error) {
                console.log(error)
            }
          })
        }
  },
      error: function(error) {
          console.log(error)
      }
  })
}
  
  
  }
   
    
</script>

