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
        $_SESSION['userRol'] = end($userData);
      }
    break;
    case 'createUser': 
      $_SESSION['registro'] = "entra";
      $data = AjaxModel::mailExists($_POST['mail']);
      $_SESSION['registro'] = $data;
      $userData="fail";
      if ($data == false) {
        $userData = AjaxModel::createUser($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['telefono'], $_POST['direccion'], $_POST['mail'], $_POST['clave']);

      }
      echo json_encode($data);
      exit;     
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

    case 'cambiarDatos': 
      AjaxModel::cambiarDatosUsuario($_SESSION['userData']['idUsuario'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['direccion'], $_POST['telefono'], $_POST['mail']);
      $userData = AjaxModel::mostrarDatosUsuario($_SESSION['userData']['idUsuario']);
     
      $_SESSION['userData'] = $userData;
      
      exit;     
    break;
   
    case 'borrarProductoCesta': 
      $producto=$_POST['producto'];
      unset($_SESSION['cesta']["$producto"]);

      echo json_encode(empty($_SESSION['cesta']));
      exit;     
    break; 
    case 'mostrarPedidos': 
      
      $usuarioLogueado =$_SESSION['userData']['idUsuario'];
      $data =AjaxModel::mostrarPedidos($usuarioLogueado);
      echo json_encode($data);
      exit;     
    break;
    case 'hacerPedido':
      $usuarioLogueado = $_SESSION['userData']['idUsuario'];
      $idPedido =AjaxModel::hacerPedido($usuarioLogueado, $_POST['preciototal']);
      $pedido = $_SESSION['cesta'];
      $idProducto="";
      foreach ($pedido as &$value) {
        if( $idProducto == $value['idProducto']){  
            $cantidad=$cantidad + 1;
            $precio=$precio+ floatval($value['precio']);
        }else{
          $idProducto = $value['idProducto'];
          $cantidad = 1;
          $precio=floatval($value['precio']);
        }
        $data =AjaxModel::detallePedido($idProducto, $idPedido, $cantidad, $precio);
      }
     
      
      echo json_encode($cantidad);
      exit;     
    break;
    case 'borrarProducto': 
      $data = AjaxModel::borrarProducto($_POST['producto']);
      
      echo json_encode($data);
      exit;
      break;
    case 'mostrarEntradas': 
      $data = AjaxModel::getEntradas();
      
      echo json_encode($data);
      exit;       
    break;
  default:
    echo 'null';
    break;
}
