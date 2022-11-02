<?php
include ('config-db2.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<style>
   * {font-size: 16px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;}button {margin:auto;}
</style>

<body class="p-3 mb-2 bg-primary text-black">
    <div class="container-sm" style="padding: 80px; background-color: lightgray; border-radius: 20px; margin-top:10px; border:1px solid black;">
        <div style="width:50%; height:60%;">
        <h3>Producte</h3>

        <?php
            
            $id=$_GET["id"];

            $username = "Admin";
            $password = "Admin";
            $pdo = new PDO('mysql:host=localhost;dbname=botiga', $username,$password);
            $nuevaconexion = new Conexion();
            $nuevaconexion->conectar();
            $stmt = $pdo->prepare("SELECT * FROM camisetes WHERE id = $id");
            // Especificamos el fetch mode antes de llamar a fetch()
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // Ejecutamos
            $stmt->execute();
            
                // output data of each row
                while($row = $stmt->fetch()) {
                    if($row['id'] == $id) {
                        echo "<img width='200px' height='200px' src='../img/" . $row["id"]. ".jpg'><br><br><br> - Id: " . $row["id"]. "<br> - Nom: ". $row["nom"]. "<br> - Descripcio: ". $row["descripcio"]. "<br> - Preu: ". $row["preu"]. "<br>";
                    }
                }
           
            ?>

        </div>

        <div class="d-grid gap-2 col-6 mx-auto" style="text-align: center; margin-bottom: 10px; padding:10px;">
            <a><button type="button" class="btn btn-light">Afegir al carreto</button></a><br>
            <a href="index.php"><button type="button" class="btn btn-light">Tornar enrere</button></a>
        </div>
    
    </div>
</body>
</html>

