<?php

class AjaxModel {
        
  public static function userExists($mail, $clave) {  
    $db = new database();

    $query = "SELECT count(*) AS n FROM usuario WHERE mail = '$mail' AND clave = '$clave'";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    if (isset($result[0]['n'])) {
      if (intval($result[0]['n']) == 1) {
        return 'true';
      } else {
        return 'false';
      }
    }
  }

  public static function getUser($mail, $clave) {
    $db = new database();

    $query = "SELECT * FROM usuario WHERE mail = '$mail' AND clave = '$clave'";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $result[0];
  }

  public static function mailExists($mail) {  
    $db = new database();

    $query = "SELECT count(*) AS n FROM usuario WHERE mail = '$mail'";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    if (isset($result[0]['n'])) {
      if (intval($result[0]['n']) == 1) {
        return 'true';
      } else {
        return 'false';
      }
    }
  }

  public static function createUser($nombre , $apellido1, $apellido2, $telefono, $direccion, $mail, $clave){
    $db = new database();

    $query = "INSERT INTO usuario(nombre, apellido1, apellido2, direccion, telefono, mail, clave, rol) VALUES ('$nombre', '$apellido1', '$apellido2', '$direccion', '$telefono', '$mail', '$clave', '1');";
  
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $result;
    
  }
  public static function getProducts() {
    $db = new database();

    $query = "SELECT * FROM producto";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $result;
  }

 

  public static function getEntradas() {
    $db = new database();

    $query = "SELECT * FROM entrada";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $result;
  }



  public static function addProductToCard($id) {
    $db = new database();

    $query = "SELECT * FROM producto where idProducto=$id";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $result;
  }


public static function recogerCategorias($arrays) {
  $db = new database();

  $query = "SELECT idCategoriaProducto, nombre FROM categoriaproducto";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}

public static function recogerSeries($arrays) {
  $db = new database();

  $query = "SELECT idSerieProducto, nombre FROM serieproducto";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}

public static function mostrarPedidos($idUsuario) {
  $db = new database();
  
  $query = "SELECT pedido.fechaPedido, pedido.precioTotal, detallepedido.cantidad, detallepedido.precioTotal AS precioProducto, producto.nombreProducto FROM detallepedido INNER JOIN pedido ON pedido.idPedido=detallepedido.idPedido  INNER JOIN usuario ON usuario.idUsuario=pedido.idUsuario INNER JOIN producto ON producto.idProducto=detallepedido.idProducto WHERE usuario.idUsuario='$idUsuario'";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}
public static function cambiarDatosUsuario($idUsuario, $nombre, $apellido1, $apellido2, $direccion, $telefono, $mail) {
  $db = new database();
  
  $query = "UPDATE usuario SET nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2', direccion = '$direccion', telefono = '$telefono', mail = '$mail' WHERE usuario.idUsuario = '$idUsuario';";
  
  $db->query($query);
  
  $query = "SELECT * FROM usuario WHERE idUsuario='$idUsuario;";

  $db->query($query);
  return $result;

}
public static function mostrarDatosUsuario($idUsuario) {
  $db = new database();

  $query = "SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result[0];
}

public static function borrarProducto($producto) {
  $db = new database();

  $query = "DELETE FROM producto WHERE idProducto = '$producto'";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();
  return true;
}

public static function hacerPedido($idUsuario, $precioTotal) {
  $db = new database();

  $query = "INSERT INTO pedido (idUsuario, precioTotal) VALUES ('$idUsuario', '$precioTotal');";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();
  $query = "SELECT idPedido FROM pedido ORDER BY idPedido DESC LIMIT 1;";
  $db->query($query);
  $result = $db->cargaFila();
  return $result["idPedido"];

}
public static function detallePedido($idProducto, $idPedido, $cantidad,$precio) {
  $db = new database();

  $query = "INSERT INTO detallepedido (idProducto, idPedido, cantidad, precioTotal) VALUES ('$idProducto','$idPedido','$cantidad','$precio');";

  $db->query($query);
  
  

}
}

/*a = new URLSearchParams(window.location.search)*/