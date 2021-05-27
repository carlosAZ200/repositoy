<div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Salario bruto</th>
            <th scope="col">Retención de la fuente</th>
            <th scope="col">Base de cotización</th>
            <th scope="col">Valor pagado a salud</th>
            <th scope="col">Valor pagado a pensión</th>
            <th scope="col">Salario neto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $SalarioMensual->GetSalarioMensual() ?></td>
            <td><?= $SalarioMensual->CalcularRetencionFuente() ?></td>
            <td><?= $SalarioMensual->CalcularBaseCotizacion() ?></td>
            <td><?= $SalarioMensual->CalcularAportesSalud() ?></td>
            <td><?= $SalarioMensual->CalcularAportesPension() ?></td>
            <td><?= $SalarioMensual->CalcularTotal() ?></td>
        </tr>
    </tbody>
    </table>
</div>