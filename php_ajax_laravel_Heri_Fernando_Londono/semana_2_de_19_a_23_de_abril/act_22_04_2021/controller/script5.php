<?php 
    require_once "../model/script5.php";

    $Reserva = new Reserva($_GET["CiudadOrigen"], $_GET["CiudadDestino"], $_GET["Clase"], $_GET["Alimentacion"], $_GET["Internet"], $_GET["Maletero"], $_GET["Nombre"], $_GET["Edad"]);

    include "../view/vmostrar5.php";
?>