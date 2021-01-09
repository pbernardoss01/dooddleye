<?php
// BBDD

include 'librerias/db.pdo.php';

// Carga controlador para un componenete
function loader($componente){
  include 'componentes/'.$componente.'/controller.php';
}

// Inicio sesion	
session_start();

// La pagaina a la que se llama es para ajax no se devuelven los datos directamente
if (isset($_POST['page'])) {
  if ($_POST['page'] == 'ajax') {
    loader('ajax');
    exit();
  } 
}else if(isset($_GET['page'])) {  // Obtiene el nombre del componente solicitado si hay ($_GET['page']) o uno por defecto
  $componente = $_GET['page'];
} else {
  $componente = 'home';
} 



