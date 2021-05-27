<?php 
    require_once "../model/script2.php";

    $Salario = new Salario($_GET["NombreVendedor"], $_GET["NumeroCelularesVendidos"], $_GET["ValorTotalVentas"]);

    include "../view/vmostrar2.php";
?>