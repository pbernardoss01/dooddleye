<?php
include COMPONENT_PATH . '/ajax/model.php';

$data = array();
$_SESSION['productos']="lol";  
switch ($_POST['action']) {
    case 'loginUser': 
      $data = AjaxModel::userExists($_POST['mail'], $_POST['clave']);
      if ($data == 'true') {
        $userData = AjaxModel::getUser($_POST['mail'], $_POST['clave']);
        
        $_SESSION['validUser'] = true;
        $_SESSION['userData'] = $userData;
        $_SESSION['userRol'] = end($userData);
      
        
      }
      echo json_encode($data);
    break;
    case 'checkUser': 
      $data = AjaxModel::mailExists($_POST['mail']);
      echo json_encode($data);
      
    break;
    case 'createUser': 

      $userData = AjaxModel::createUser($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['direccion'], $_POST['mail'], $_POST['clave']);

      echo json_encode($userData);
      exit;     
    break;
    case 'mostrarProductos': 
      $data = AjaxModel::getProducts();
      echo json_encode($data);
      exit;     
    break;
    case 'mostrarImagenesProductos': 
      $data = AjaxModel::getImagenesProducts();
      echo json_encode($data);
      exit;     
    break;
    case 'mostrarProducto': 
      $data = AjaxModel::getProducto($_POST['id']);
      echo json_encode($data);
      exit;     
    break;

    case 'addACesta': 
      $data = AjaxModel::getProducto($_POST['id']);
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
    case 'mostrarImagenesEntradas': 
      $data = AjaxModel::getImagenesEntradas();
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

      echo json_encode($_SESSION['cesta']);
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
      $idProductos=array();
      

      for ($i = 0; $i < count($pedido); $i++) { array_push($idProductos, $pedido[$i]['idProducto']);}
      
      $cantidadesProductos = array_count_values($idProductos) ;

      foreach ($cantidadesProductos as $id => $cantidad) {
        $encontrado = null;
        foreach($pedido as $producto) {
          if ($encontrado == null) {
            if ($producto['idProducto'] !== null && $producto['idProducto'] == $id) {
              $encontrado = $producto;
              $precio=floatval($encontrado['precio'])*$cantidad;
              AjaxModel::detallePedido($id, $idPedido, $cantidad, $precio);
            }
          }
        }
        
      }

        // if($pedido[$i]['idProducto'] !== null){

        //   $idProducto = $pedido[$i]['idProducto'];
        //   $precio=floatval($pedido[$i]['precio']);
        //   $data =AjaxModel::detallePedido($idProducto, $idPedido, $cantidad, $precio);
        // }
      
      


      $_SESSION['cesta']='';
      echo json_encode($pedido);
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
    case 'crearProducto': 
      $data = AjaxModel::createProducto($_POST['nombre'], $_POST['categoria'], $_POST['serie'], $_POST['descripcion'],$_POST['precio'],$_POST['imagen']);
      
      echo json_encode($data);
      exit;       
    break;
    case 'editarProducto': 
      $data = AjaxModel::editProducto($_POST['id'], $_POST['nombre'], $_POST['categoria'], $_POST['serie'], $_POST['descripcion'],$_POST['precio'],$_POST['imagen']);
      
      echo json_encode($data);
      exit;       
    break;
  
    case 'mostrarEntrada': 
      $data = AjaxModel::getEntrada($_POST['idEntrada']);
      
      echo json_encode($data);
      exit;       
    break;
    case 'crearEntrada': 
      $data = AjaxModel::createEntrada($_POST['titulo'],$_POST['contenido'],$_POST['imagen']);
      
      echo json_encode($data);
      exit;       
    break;
    case 'editarEntrada': 
      $data = AjaxModel::getEntrada($_POST['idEntrada'],$_POST['titulo'],$_POST['contenido'],$_POST['imagen']);
      
      echo json_encode($data);
      exit;       
    break;
    case 'mostrarComentariosEntrada': 
      $data = AjaxModel::getComentarioEntrada($_POST['idEntrada']);
      
      echo json_encode($data);
      exit;       
    break;
    case 'crearComentario': 
      $user =$_SESSION['userData']['idUsuario'];
      $entrada =$_POST['idEntrada'];
      $contenido =$_POST['contenidoComentario'];
      $data = AjaxModel::createComentarioEntrada($user, $entrada, $contenido);
      echo json_encode($data);
      exit;       
    break;
    case 'borrarEntrada': 
     $data = AjaxModel::borrarEntrada($_POST['entrada']);

      exit;       
    break;
 
  default:
    echo 'null';
    break;
}
