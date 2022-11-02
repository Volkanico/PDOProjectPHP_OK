<?php
include ('config-db2.php');
session_start();

class camiseta {
  private $id;
  private $nom;
  private $descripcio;
  private $preu;

  function __construct($id,$nom,$descripcio,$preu) {
    $this->id = $id;
    $this->nom = $nom;
    $this->descripcio = $descripcio;
    $this->preu = $preu;
  }

  function get_id() {
    return $this->id;
  }
  function get_nom() {
    return $this->nom;
  }
  function get_descripcio() {
    return $this->descripcio;
  }
  function get_preu() {
    return $this->preu;
  }
}

            $carreto= array (
            new camiseta("1","Camiseta llarga","Es per el fred","30"),
            new camiseta("2","Camiseta cool","Per pijos","40"),
            new camiseta("3","Camiseta chic","La moda d'avui","90"),
            new camiseta("4","Camiseta hippie","Per hippies dels anys 60","10"),
            new camiseta("5","Camiseta de moda","La seva moda dura 3 dies","90"),
            new camiseta("6","Camiseta de esport","Per fer-la sudar","90")
            )
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
  </head>
    
<body class="p-3 mb-2 bg-primary text-white">
    <div class="container-md" style="background-color: lightgray; height: 700px; border-radius: 30px;">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOM</th>
            <th scope="col">DESCRIPCIÓ</th>
            <th scope="col">PREU</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($carreto as $camiseta) {?>
            <tr>

            <?php foreach($camiseta as $columna) {?>

            <td> <?php echo "$columna" ?> </td>

            <?php } ?>
            </tr>
            <?php } ?>
          </tbody>
      </table>
      <div style="bottom:0; padding:40px; text-align: center;">
        <a href=""></a><button href="" type="button" class="btn btn-dark btn-lg">Comprar</button></a>
        <a href="index.php"><button type="button" class="btn btn-dark btn-lg">Tornar enrere</button></a>
    </div>
    </div>
</body>
</html>
