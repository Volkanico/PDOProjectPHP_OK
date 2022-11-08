<?php
const servername = "localhost";
const username = "admin";
const password = "admin";
const dbname = "botiga";

class Conexion{
    
    private static $instance = NULL;
    private $conn = NULL;
    
    function __construct() {
        $this->conn = new mysqli(servername,username,password,dbname);
    }
    
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getConnection(){
    return $this->conn;
  }



  function conectar(){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=botiga',username,password);
        //echo "conexion correcta";
    } catch(PDOException $exception) {
        echo "conexion incorrecta".$exception->getMessage();
    }
}
}




//https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php
?>