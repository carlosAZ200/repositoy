<?php 
    $salarioMensual = $_GET["SalarioMensual"]; 
    $retencionFuente = $salarioMensual * 0.1;
    $aportesSalud = $salarioMensual * 0.4 * 0.125;
    $aportesPension = $salarioMensual * 0.4 * 0.16;
    $baseCotizacion = $salarioMensual * 0.4;
?>
<table border="1">
    <tr>
        <td>Salario bruto</td>
        <td>Retención de la fuente</td>
        <td>Base de cotización</td>
        <td>Valor pagado a salud</td>
        <td>Valor pagado a pensión</td>
        <td>Salario neto</td>
    </tr>
    <tr>
        <td><?= $salarioMensual ?></td>
        <td><?= $retencionFuente ?></td>
        <td><?php echo $salarioMensual * 0.4 ?></td>
        <td><?= $aportesSalud ?></td>
        <td><?= $aportesPension ?></td>
        <td><?php echo $salarioMensual - $aportesSalud - $aportesPension - $retencionFuente?></td>
    </tr>
</table>