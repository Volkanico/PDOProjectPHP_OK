<?php 
include ('config-db2.php');
       session_start();
       
       $pdo = new PDO('mysql:host=localhost;dbname=botiga', $nuevaconexion->get_username() ,$nuevaconexion->get_password());
       $nuevaconexion = new Conexion("Admin","Admin");
       $nuevaconexion->conectar();
       $stmt = $pdo->prepare("INSERT INTO camisetes WHERE (id,nom,descripcio,preu) VALUES (:id,:nom,:descripcio,:preu");
       $stmt->bindValue(':id', $_POST['id']);
       $stmt->bindValue(':nom', $_POST['nom']);
       $stmt->bindValue(':descripcio', $_POST['descripcio']);
       $stmt->bindValue(':preu', $_POST['preu']);


      $id = $_POST['id'];
      $nom = $_POST['nom'];
      $descripcio = $_POST['descripcio'];
      $preu = $_POST['preu'];

     
     /* $nuevaconexion = new Conexion("Admin","Admin");
      $nuevaconexion->conectar();
      $stmt = $pdo->prepare("INSERT INTO camisetes WHERE (id,nom,descripcio,preu) VALUES (:id,:nom,:descripcio,:preu");*/
      // Especificamos el fetch mode antes de llamar a fetch()
      
      // Ejecutamos
      $stmt->execute([$id,$nom,$descripcio,$preu]);


?>