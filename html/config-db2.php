<?php
include ('config-db.php');

class Conexion{
    
    
    function conectar(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=botiga', USERNAME,password);
            //echo "conexion correcta";
        } catch(PDOException $exception) {
            echo "conexion incorrecta".$exception->getMessage();
        }
    }
}


?>