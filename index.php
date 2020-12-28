<?php 
/* index.php
	Fichero principal llamado reiteradamente para cada seccion solicitada
	El parametro option indica la sección a cargar
*/

  /* Definir las variables globales de rutas */
  define('COMPONENT_PATH', './componentes');


	// framework para construir MVC
	include 'librerias/framework.php'; 
?>

<html>
    <head>      
      <title>Dooddleye</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Patricia Bernardos Sobrino">

      <!-- Fontawesome -->
      <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


      <!-- Custom styles for this template -->
      <link href="/css/style.css" rel="stylesheet">
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="js/lightbox/lightbox-2.6.min.js"></script>
    </head>
    <body>

      <?php 
          include COMPONENT_PATH . '/spinner/view.php';
          // Cuerpo
          echo loader($componente); 				
          echo var_dump($_SESSION);
      ?>
    </body>
    
</html>
