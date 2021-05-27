<?php 
    require_once "../model/script1.php";

    $SalarioMensual = new SalarioMensual($_GET["SalarioMensual"]);

    include "../view/vmostrar1.php";
?>