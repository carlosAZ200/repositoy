<div class="dives">
    <fieldset>
        <div class="divs">
            <div class="divs" style="text-align: left;">
                <p>
                4. El índice de masa corporal (IMC) es una medida de asociación entre el peso y la talla de un individuo. Ideado por el estadístico belgaL. A. J. Quetelet, por lo que también se conoce como índice de Quetelet. Se calcula según la expresión matemática:
                Desarrollar un formulario que solicite el peso en kilogramos y la longitud en metros de una persona y calcule y muestre en un script el índice de masa corporal y la categoría en la cual se encuentra el individuo en base a la siguiente tabla.
                </p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Ejercicio 4
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body" style="text-align: left;">

                            <div class="divs">
                                <fieldset>                              
                                        <div class="form-group">
                                            <label for="Peso">Peso en kilogramos:</label>
                                            <input type="number" class="form-control" id="Peso" name="Peso">
                                        </div>
                                        <div class="form-group">
                                            <label for="Longitud">Longitud en metros:</label>
                                            <input type="number" class="form-control" id="Longitud" name="Longitud">
                                        </div>
                                        <div class="divs">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="peticionServidorD()">Calcular</button>
                                        </div>
                                        <div class="divs">
                                            <p id="resultadoD"></p>
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
    </fieldset>
</div>