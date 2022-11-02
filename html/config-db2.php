<?php

class Conexion{
    private $username = "Admin";
    private $password = "Admin";
    function get_username() {
        return $this->username;
        
    }
    function get_password(){
        return $this->password;
    }
    
    function conectar(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=botiga', $this->username,$this->password);
            //echo "conexion correcta";
        } catch(PDOException $exception) {
            echo "conexion incorrecta".$exception->getMessage();
        }
    }
}

?>