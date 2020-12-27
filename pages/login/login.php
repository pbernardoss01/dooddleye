<!-- 
 Página Home
 Patricia Bernardos
 Proyecto Final Desarrollo de Aplicaciones Web
-->

<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>
<html lang="es">
    <div class="preloader"></div>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Patricia Bernardos Sobrino">
        <link href="../../vendor/fontawesome-free/css/all.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
        <title>Dooddleye</title>

        <!-- Bootstrap core CSS -->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="../../css/style.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="../../css/styleLogin.css?v=<?php echo time(); ?>" />
        <link href="../../img/favicon/favicon.ico" >
        <script src="../../js/login.js"></script>
        
        
    </head>

    <body>

        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="../../img/Logo/logoDooddleye2.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form action="" method="post">
                    <input type="text" id="username" class="fadeIn second" name="login" placeholder="Correo electrónico">
                    <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="../shop.php">Volver a la tienda</a>
                </div>
                <div id="formFooter">
                    <a class="underlineHover" href="#">¿Has olvidado tu contraseña?</a>
                </div>

            </div>
        </div>
  <!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
<script>
$(document).ready(function() 
{

$('#login').click(function()
{
var username=$("#username").val();
var password=$("#password").val();
var dataString = 'username='+username+'&password='+password;
if($.trim(username).length>0 && $.trim(password).length>0)
{
$.ajax({
type: "POST",
url: "ajaxLogin.php",
data: dataString,
cache: false,
beforeSend: function(){ $("#login").val('Connecting...');},
success: function(data){
if(data)
{
$("body").load("home.php").hide().fadeIn(1500).delay(6000);
//or
window.location.href = "home.php";
}
else
{
//Shake animation effect.
$('#box').shake();
$("#login").val('Login')
$("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
}
}
});

}
return false;
});

});
</script>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>s
    </body>
</html>