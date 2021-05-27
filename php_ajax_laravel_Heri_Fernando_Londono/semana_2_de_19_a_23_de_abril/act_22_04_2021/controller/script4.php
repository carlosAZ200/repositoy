<?php 
    require_once "../model/script4.php";

    $IMC = new IMC($_GET["peso"], $_GET["longitud"]);

    include "../view/vmostrar4.php";
?>