<?php 
include ('config-db2.php');
       session_start();
       $id = $_POST['id'];
       $nom = $_POST['nom'];
       $descripcio = $_POST['descripcio'];
       $preu = $_POST['preu'];
       $connection = Conexion::getInstance();
       $query = "INSERT INTO camisetes WHERE (id,nom,descripcio,preu) VALUES (:id,:nom,:descripcio,:preu)";
       $stmt = $connection->getConnection()->prepare($query);
       
       
       $stmt->bindValue(':id', $_POST['id']);
       $stmt->bindValue(':nom', $_POST['nom']);
       $stmt->bindValue(':descripcio', $_POST['descripcio']);
       $stmt->bindValue(':preu', $_POST['preu']);

      $stmt->execute();

      var_dump($query);
      var_dump($_POST);

     //header("Location: ./index.php");
?>