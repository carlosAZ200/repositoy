<div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Tarifa</th>
            <th scope="col">Incremento</th>
            <th scope="col">Valor servicios</th>
            <th scope="col">Descuento</th>
            <th scope="col">Total a pagar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $Reserva->CalcularTarifa() ?></td>
            <td><?= $Reserva->CalcularIncremento() ?></td>
            <td><?= $Reserva->CalcularValorServicios() ?></td>
            <td><?= $Reserva->CalcularDescuento() ?></td>
            <td><?= $Reserva->CalcularTotal() ?></td>
        </tr>
    </tbody>
    </table>
</div>
