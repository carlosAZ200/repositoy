<?php 
    require_once "../model/script3.php";

    $Test = new Test($_GET["NombreCandidato"], $_GET["CantidadPreguntasTest"], $_GET["CantidadRespondidasCorrectas"]);

    include "../view/vmostrar3.php";
?>