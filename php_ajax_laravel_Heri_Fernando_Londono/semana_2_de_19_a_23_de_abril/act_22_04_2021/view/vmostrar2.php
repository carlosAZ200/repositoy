<div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre del empleado</th>
            <th scope="col">Salario total del empleado en el mes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $Salario->GetNombreVendedor() ?></td>
            <td><?= $Salario->CalcularSalarioTotal() ?></td>
        </tr>
    </tbody>
    </table>
</div>