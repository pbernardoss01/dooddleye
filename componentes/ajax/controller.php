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
      $data = AjaxModel::getProducts();
      echo json_encode($data);
      exit;     
    break;
    case 'mostrarProducto': 
      $data = AjaxModel::addProductToCard($_POST['id']);
      echo json_encode($data);
      exit;     
    break;

    case 'addACesta': 
      $data = AjaxModel::addProductToCard($_POST['id']);
      if(!isset($_SESSION['cesta'])){
        $_SESSION['cesta']= $data;
      }else{
        $copiaSesion= $_SESSION['cesta'];
        $cesta =array_merge($copiaSesion, $data);
        $_SESSION['cesta']=$cesta;
      }
          
    exit;     
    break;

    case 'mostrarCesta':
      $data = $_SESSION['cesta'];
      echo json_encode($data);
      
      exit;     
    break;
    case 'mostrarEntradas': 
      $data = AjaxModel::getEntradas();
      echo json_encode($data);
      exit;     
    break;

    case 'recogerCategorias': 
      $data = AjaxModel::recogerCategorias();
      echo json_encode($data);
      exit;     
    break;
    case 'recogerSeries': 
      $data = AjaxModel::recogerSeries();
      echo json_encode($data);
      exit;     
    break;
  default:
    echo 'null';
    break;
}


// Datos a recoger de la peticion
echo $data;