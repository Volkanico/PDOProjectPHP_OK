<?php
class Conexion {
    private $servername = "localhost";
    private $username = "admin";
    private $password = "admin";
    private $dbname = "botiga";
    private static $instance = NULL;
    private $conn = NULL;

    function __construct() {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=botiga', $this->username, $this->password);
            echo "conexion correcta";
        } catch (PDOException $exception) {
            echo "conexion incorrecta" . $exception->getMessage();
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Conexion();
        }
        return self::$instance;
    }

    public function getConnection() {
        
        try {
            //creating connection to mysql
            echo "TODO OK";
            return $this->conn;
            
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            exit;
            }
    }
    public static function close() {
        self::$instance = null;
    }

    function conectar() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=botiga', $this->username, $this->password);
            //echo "conexion correcta";
        } catch (PDOException $exception) {
            echo "conexion incorrecta" . $exception->getMessage();
        }
    }
}



/* ESTEIA AL ALTRE FITXER DE CONFIGURACIO
class Connection {
    private $hostname = "localhost";
    private $dbname = "botiga";
    private $port = "3306";
    private $username = "Admin";
    private $password = "Admin";
    public $pdo = null;

    private $opcions = [PDO::ATTR_CASE => PDO::CASE_LOWER, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
    function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->dbname}; host={$this->hostname};port={$this->port}",$this->username,$this->password, $this->opciones);
    }
}
*/

//https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php
