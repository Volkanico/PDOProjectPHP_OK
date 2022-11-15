<?php
    class Camiseta {
        private $id;
        private $nom;
        private $descripcio;
        private $preu;

        function __construct($id,$nom,$descripcio,$preu) {
            $this->id = $id;
            $this->nom = $nom;
            $this->descripcio = $descripcio;
            $this->id = $descripcio;
        }

    }


?>