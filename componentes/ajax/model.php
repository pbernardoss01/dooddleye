<?php

class AjaxModel {
 
 
 
  //Funciones para interactuar los usuarios de la pagina
       
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

  public static function createUser($nombre , $apellidos, $telefono, $direccion, $mail, $clave){
    $db = new database();

    $query = "INSERT INTO usuario(nombre, apellidos, direccion, telefono, mail, clave, rol) VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', '$mail', '$clave', '2');";
  
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $query;
    
  }


  public static function cambiarDatosUsuario($idUsuario, $nombre, $apellidos, $direccion, $telefono, $mail) {
    $db = new database();
    
    $query = "UPDATE usuario SET nombre = '$nombre', apellidos = '$apellidos', direccion = '$direccion', telefono = '$telefono', mail = '$mail' WHERE usuario.idUsuario = '$idUsuario';";
    
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
  

//Filtros de productos para la tienda  

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




//Funciones para interactuar con pedidos en la tienda


public static function mostrarPedidos($idUsuario) {
  $db = new database();
  
  $query = "SELECT pedido.fechaPedido, pedido.precioTotal, detallepedido.cantidad, detallepedido.precioTotal AS precioProducto, producto.nombreProducto FROM detallepedido INNER JOIN pedido ON pedido.idPedido=detallepedido.idPedido  INNER JOIN usuario ON usuario.idUsuario=pedido.idUsuario INNER JOIN producto ON producto.idProducto=detallepedido.idProducto WHERE usuario.idUsuario='$idUsuario'";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
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

  $query = "INSERT INTO detallepedido (idProducto, idPedido, cantidad, precioTotal) VALUES ($idProducto,$idPedido,$cantidad,$precio);";

  $db->query($query);

  return $idProducto;

}



//Funciones para interactuar con productos de la tienda

public static function getProducts() {
  $db = new database();

  $query = "SELECT producto.idProducto, producto.nombreProducto, producto.idCategoriaProducto, producto.precio, producto.idSerieProducto, producto.descripcion FROM producto";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}


public static function getImagenesProducts() {
  $db = new database();

  $query = "SELECT idProducto, imagen FROM producto";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}




public static function getProducto($id) {
  $db = new database();

  $query = "SELECT * FROM producto where idProducto=$id";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}


public static function createProducto($nombre, $categoria, $serie, $descripcion, $precio, $imagen) {
  $db = new database();

  $query = "INSERT INTO producto (nombreProducto, idCategoriaProducto, idSerieProducto, precio, descripcion, imagen) VALUES ('$nombre', $categoria, $serie, $precio, '$descripcion', '$imagen');";

  $db->query($query);
}

public static function editProducto($id, $nombre, $categoria, $serie, $descripcion, $precio, $imagen) {
  $db = new database();

  $query = "UPDATE producto SET  nombreProducto= '$nombre', idCategoriaProducto=$categoria, idSerieProducto=$serie, precio=$precio, descripcion='$descripcion', imagen='$imagen' WHERE idProducto=$id;";

  $db->query($query);

}

public static function borrarProducto($producto) {
  $db = new database();

  $query = "DELETE FROM producto WHERE idProducto = '$producto'";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();
  return true;
}


//Funciones para interactuar con comentarios de entradas del blog
public static function getComentarioEntrada($id) {
  $db = new database();

  $query = "SELECT comentariosentradas.idComentario, comentariosentradas.idUsuario, comentariosentradas.idEntrada, comentariosentradas.contenido, comentariosentradas.fecha, usuario.nombre FROM comentariosentradas INNER JOIN usuario ON comentariosentradas.idUsuario = usuario.idUsuario  WHERE comentariosentradas.idEntrada=$id;";

  $db->query($query);
  $result = $db->cargaMatriz();

  return $result;
}
public static function createComentarioEntrada( $idUsuario, $entrada, $contenido) {
  $db = new database();

  $query = "INSERT INTO comentariosentradas(idUsuario, idEntrada, contenido) VALUES ($idUsuario, $entrada, '$contenido');";

  $db->query($query);


}


//Funciones para interactuar con entradas del blog
public static function getEntrada($id) {
  $db = new database();

  $query = "SELECT * FROM entrada WHERE idEntrada = '$id';";

  $db->query($query);
  $result = $db->cargaMatriz();

  return $result;
}


public static function createEntrada( $titulo, $contenido, $imagen) {
  $db = new database();
  $query = "INSERT INTO entrada (titulo, contenido, imagen) VALUES ('$titulo', '$contenido', '$imagen');";

  $db->query($query);

}
public static function editEntrada($id, $titulo, $contenido, $imagen) {
  $db = new database();

  $query = "UPDATE entrada SET  titulo='$titulo', contenido='$contenido', imagen='$imagen' WHERE idEntrada=$id;";

  $db->query($query);

}
public static function borrarEntrada( $id) {
  $db = new database();

  $query = "DELETE FROM entrada WHERE idEntrada = '$id'";

  $db->query($query);


}


public static function getEntradas() {
  $db = new database();

  $query = "SELECT entrada.idEntrada, entrada.titulo, entrada.contenido, entrada.fecha FROM entrada";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}
public static function getImagenesEntradas() {
  $db = new database();

  $query = "SELECT idEntrada, imagen FROM entrada";
  
  $db->query($query);
  
  $result = $db->cargaMatriz();

  return $result;
}






}

/*a = new URLSearchParams(window.location.search)*/