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
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
     
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
