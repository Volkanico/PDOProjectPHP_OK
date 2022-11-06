<?php

use FTP\Connection as FTPConnection;

include ('config-db.php');

class Conexion
{
    // Contenedor Instancia de la clase
    private static $instance = NULL;
    private $con = NULL;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() {
        $this->con = new mysqli(servername,username,password,dbname);
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Conexion();
        }

        return self::$instance;
    }
    
}

?>