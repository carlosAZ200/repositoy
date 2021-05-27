<div class="dives">
    <fieldset>
        <div class="divs">
            <div class="divs" style="text-align: left;">
                <p>
                2. Una compañía de venta de celulares paga a su personal de ventas un salario básico de $300000 mensuales más una comisión de $10000 por cada celular vendido, más el 5% del valor de la venta.
                Cada mes el contador de la empresa ingresa el nombre del vendedor, el número de celulares vendidos y el valor total de las ventas de celulares en el mes.
                Realice un formulario que dados los datos ingresados por el contador calcule y muestre en un script el nombre del empleado y el salario total del empleado en el mes.
                </p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Ejercicio 2
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body" style="text-align: left;">

                            <div class="divs">
                                <fieldset>                              
                                        <div class="form-group">
                                            <label for="NombreVendedor">Nombre del vendedor:</label>
                                            <input type="text" class="form-control" id="NombreVendedor" name="NombreVendedor">
                                        </div>
                                        <div class="form-group">
                                            <label for="NumeroCelularesVendidos">Número de celulares vendidos:</label>
                                            <input type="number" class="form-control" id="NumeroCelularesVendidos" name="NumeroCelularesVendidos">
                                        </div>
                                        <div class="form-group">
                                            <label for="ValorTotalVentas">Valor total de las ventas:</label>
                                            <input type="number" class="form-control" id="ValorTotalVentas" name="ValorTotalVentas">
                                        </div>
                                        <div class="divs">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="peticionServidorB()">Calcular</button>
                                        </div>
                                        <div class="divs">
                                            <p id="resultadoB"></p>
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
    </fieldset>
</div>