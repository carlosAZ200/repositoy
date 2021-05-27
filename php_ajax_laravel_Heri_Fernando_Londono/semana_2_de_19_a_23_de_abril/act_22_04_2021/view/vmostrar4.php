<div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Indice de masa corporal</th>
            <th scope="col">Categoría en la que se encuentra</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $IMC->CalcularIndice() ?></td>
            <td><?= $IMC->CalcularCategoria() ?></td>
        </tr>
    </tbody>
    </table>
</div>
