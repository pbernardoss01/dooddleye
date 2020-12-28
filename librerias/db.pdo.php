<?php

/**
 * Conexion PDO
 */
class database {
    //atributo que guarda la conexión
    private $conexion;
    
    //variable que ejecuta las consultas
    private $stmt;
    
    //array con los datos de errores
    private $error = array();
    
    //variable para transacciones, 1 = Bien 0 = Mal
    private $centinela = 1;
    
    //filas afectadas por la consulta
    private $affectedRows = 0;


    private $driver = 'mysql';
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'dooddleye';
    
    //constructor que realiza la conexion a la bbdd
    public function __construct() {
        try {
            $this->conexion = new PDO($this->driver.':host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);
        } catch (Exception $e) {
            echo "Se ha producido un error en la conexion con la BD."; 
        }
    }
    
    //ejecuta una sentencia sql
    public function query($sql,$params = null){
        // $this->stmt = $this->conexion->prepare($sql);
        $this->stmt = $this->conexion->query($sql);
    }
    
    //devuelve el numero de filas afectadas en la consulta
    public function affectedRows(){
        return $this->affectedRows;
    }

    //devuelve el ultimo error en la conexion con la bbdd
    public function getError(){
        $e = array();
        $e['ref']  = $this->error[0];
        $e['code'] = $this->error[1];
        $e['desc'] = $this->error[2];
        
        return $e;
    }

    public function cargaMatriz(){
        $lista = array();
        while($fila = $this->stmt->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $fila;
        }
        return $lista;
    }
    
    public function cargaFila(){
        $fila = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return $fila;
    }
    
    public function cierraConexion(){
        $this->stmt = null;
        $this->conexion = null;
    }

}
?>
