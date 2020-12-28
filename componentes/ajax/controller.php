<?php
include COMPONENT_PATH . '/ajax/model.php';

$data = array();
$_SESSION['productos']="lol";  
switch ($_POST['action']) {
  case 'checkUser': 
    $data = AjaxModel::userExists($_POST['mail'], $_POST['clave']);
    if ($data == 'true') {
      $userData = AjaxModel::getUser($_POST['mail'], $_POST['clave']);
      
      $_SESSION['validUser'] = true;
      $_SESSION['userData'] = $userData;
    }
    break;
    case 'createUser': 
      $_SESSION['registro'] = "entra";
      $data = AjaxModel::mailExists($_POST['mail']);
      $_SESSION['registro'] = $data;

      if ($data == 'false') {
        $userData = AjaxModel::createUser($_POST['mail'], $_POST['clave']);
        $_SESSION['registro'] = $userData;
      }
    break;
    case 'mostrarProductos': 
      $_SESSION['productos']="lol";      
      $data = AjaxModel::getProducts();
      AjaxModel::showProducts();
      $_SESSION['productos']=$data;      
    break;
  default:
    echo 'null';
    break;
}


// Datos a recoger de la peticion
echo $data;