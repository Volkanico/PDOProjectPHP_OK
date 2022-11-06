<?php
const servername = "localhost";
const username = "admin";
const password = "admin";
const dbname = "botiga";

class Conexion{
   
    // Contenedor Instancia de la clase
    private static $instance = NULL;
    private $con = NULL;
    // Constructor privado, previene la creación de objetos vía new
    function __construct() {
        $this->con = new mysqli(servername,username,password,dbname);
    }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
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

?>