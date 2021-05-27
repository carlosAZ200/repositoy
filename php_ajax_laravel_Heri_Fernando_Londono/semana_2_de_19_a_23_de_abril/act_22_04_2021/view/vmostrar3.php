<div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre del candidato</th>
            <th scope="col">Porcentaje de preguntas acertadas</th>
            <th scope="col">Nivel en el cual ha quedado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $Test->GetNombreCandidato() ?></td>
            <td><?= $Test->CalcularPorcentajeCorrectas() ?></td>
            <td><?= $Test->CalcularNivel() ?></td>
        </tr>
    </tbody>
    </table>
</div>
