<html>
<head>
  <title>Hello...</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Tenda de camisetes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="formulari.php">Formulari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="carreto.php">Carretó</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
    include('config-db2.php');

    $connection = Conexion::getInstance();
    $query = "SELECT * FROM camisetes";

    $stmt = $connection->getConnection()->prepare($query);

    
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();
    // Mostramos los resultados
    while ($row = $stmt->fetch()) {

    ?>
      <div class="container-md">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">Producte</th>
              <th scope="col">Descripció</th>
              <th scope="col" style="float:left">Veure</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              echo
              "<td class='col-4'>" .
                "<a href='fitxaProducte.php?id=" . $row["id"] . "'><img src='../img/" . $row["id"] . ".jpg' style='height:140px; width:120px;' /></a>" .
                "</td>" .
                "<td class='col-4'>" .
                "<br> - Id Product: " . $row["id"] .
                "<br> - Nom: " . $row["nom"] .
                "<br> - Descripcio: " . $row["descripcio"] .
                "<br> - Preu: " . $row["preu"] .
                "</td>" .
                "<td class='col-4'><a href='fitxaProducte.php?id=" . $row["id"] . "'>" ?><button type="button" class="btn btn-primary col-10" style="float:left;margin-top:60px;">Veure producte</button><?php echo "</a></td>";
                                                                                                                                                                                                      ?>
            </tr>
          </tbody>
        </table>
      </div>
    <?php
    }
    ?>
  </div>
</body>

</html>