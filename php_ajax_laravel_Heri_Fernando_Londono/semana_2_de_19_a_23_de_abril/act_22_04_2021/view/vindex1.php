<div class="dives">
    <fieldset>
        <div class="divs">
            <div class="divs" style="text-align: left;">
                <p>
                    1. Un contratista firma un contrato de prestación de 
                    servicios para una empresa, el cual tiene un 
                    salario mensual. Al contratista se le descuenta el 
                    10% del valor del salario mensual por concepto de 
                    retención en la fuente. Adicional a eso, el 
                    contratista debe realizar sus aportes a salud y 
                    pensión, sobre una base de cotización. 
                    La base de cotización corresponde al 40% del 
                    salario mensual. Los aportes a salud 
                    corresponden al 12.5% sobre la base de cotización 
                    y los aportes a pensiones corresponden a un 16% 
                    sobre la base de cotización. Realizar 
                    formulario que solicite el salario mensual un 
                    script que muestre el valor descontado por 
                    retención en la fuente, la base de cotización, 
                    el valor pagado a salud y el valor pagado a pensiones.
                </p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Ejercicio 1
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="text-align: left;">

                            <div class="divs">
                                <fieldset>                              
                                        <div class="form-group">
                                            <label for="SalarioMensual">Salario Mensual:</label>
                                            <input type="number" class="form-control" id="SalarioMensual" name="SalarioMensual">
                                        </div>
                                        <div class="divs">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="peticionServidorA()">Calcular</button>
                                        </div>
                                        <div class="divs">
                                            <p id="resultadoA"></p>
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
    </fieldset>
</div>