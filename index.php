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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.2/css/lightbox.min.css" integrity="sha512-Ti0dXGSC2wSEQMf71dgbpgGALde3neZBpp8nOBmDrrSo70xlCoA1cMhtthh0R6fTHtp/bAMMGZ2tIBvxPO6RQg==" crossorigin="anonymous" />
      
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.2/js/lightbox.min.js" integrity="sha512-Bu8wyKs2hRLHe2vO+uoLNiSwjtniG4qMXXDDm7wlf1UQo+T/iAfLatodyHxX5HE/ErVYxSGu651qGCzRIoYuYg==" crossorigin="anonymous"></script>


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
