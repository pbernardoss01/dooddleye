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

  public static function createUser($mail, $clave) {
    $db = new database();

    $query = "INSERT INTO usuario(idUsuario, nombre, apellido1, apellido2, direccion, telefono, mail, clave) VALUES (NULL, 'a', 'a', 'a', 'a', '9', '$mail', '$clave');";
 
    $db->query($query);
    return "done";
    
  }
  public static function getProducts() {
    $db = new database();

    $query = "SELECT * FROM producto";
    
    $db->query($query);
    
    $result = $db->cargaMatriz();

    return $result;
  }
  public static function getProduct() {
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
}

/*a = new URLSearchParams(window.location.search)*/