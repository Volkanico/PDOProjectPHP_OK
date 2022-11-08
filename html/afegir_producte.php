<?php 
include ('config-db2.php');
       session_start();
       
       $nuevaconexion = new Conexion();
       $nuevaconexion->conectar();
       $pdo = new PDO('mysql:host=localhost;dbname=botiga',username ,password);
       $stmt = $pdo->prepare("INSERT INTO camisetes WHERE (id,nom,descripcio,preu) VALUES (:id,:nom,:descripcio,:preu");
       $stmt->bindValue(':id', $_POST['id']);
       $stmt->bindValue(':nom', $_POST['nom']);
       $stmt->bindValue(':descripcio', $_POST['descripcio']);
       $stmt->bindValue(':preu', $_POST['preu']);


      $id = $_POST['id'];
      $nom = $_POST['nom'];
      $descripcio = $_POST['descripcio'];
      $preu = $_POST['preu'];


      $stmt->execute();
      header("Location: ./index.php");
?>