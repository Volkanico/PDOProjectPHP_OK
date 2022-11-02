<?php
include ('config-db2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
        form{
            margin:20px;
            width:50%;
        }
        form > *{
            margin:10px;
        }
    </style>
</head>
<body class="p-3 mb-2 bg-primary text-white"">

    <form action="afegir_producte.php" method="post">
        <input class="form-control form-control-lg" type="text" placeholder="id" name="id">
        <input class="form-control form-control-lg" type="text" placeholder="nom" name="nom">
        <input class="form-control form-control-lg" type="text" placeholder="descripció" name="descripcio">
        <input class="form-control form-control-lg" type="text" placeholder="preu" name="preu">
        <button type="submit" class="btn btn-dark">Afegir</button>
        <a href="index.php"><button type="button" class="btn btn-light">Tornar enrere</button></a>
    </form> 
</body>
</html>