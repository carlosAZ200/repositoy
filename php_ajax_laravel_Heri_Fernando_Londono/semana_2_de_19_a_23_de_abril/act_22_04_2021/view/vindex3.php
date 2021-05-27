<div class="dives">
    <fieldset>
        <div class="divs">
            <div class="divs" style="text-align: left;">
                <p>
                3. Una persona interesada en un empleo, realiza un test de capacitación. En dicho test la empresa obtuvo la siguiente información. Cantidad total de preguntas que se le realizaron y la cantidad de preguntas que contestó correctamente. La empresa le ha solicitado desarrollar un formulario que ingrese el nombre del candidato, la cantidad de preguntas del test y la cantidad de preguntas respondidas correctamente.
                Heri Fernando LondoñoY realizar un script el cual deberá mostrar el nombre del candidato, el porcentaje de preguntas acertadas y el nivel en el cual ha quedado. El porcentaje de preguntas correctas se pude calcular de la siguiente forma. % preguntas correctas = (preguntas correctas / total preguntas) * 100 El nivel se calcula de acuerdo al siguiente rango. 
                Nivel máximo: Porcentaje>=90%.
                Nivel medio: Porcentaje>=75% y < 90%. 
                Nivel regular: Porcentaje>=50% y < 75%. 
                Fuera de nivel: Porcentaje< 50%.
                </p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Ejercicio 3
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body" style="text-align: left;">

                            <div class="divs">
                                <fieldset>                              
                                        <div class="form-group">
                                            <label for="NombreCandidato">Nombre del Candidato:</label>
                                            <input type="text" class="form-control" id="NombreCandidato" name="NombreCandidato">
                                        </div>
                                        <div class="form-group">
                                            <label for="CantidadPreguntasTest">Cantidad preguntas del test:</label>
                                            <input type="number" class="form-control" id="CantidadPreguntasTest" name="CantidadPreguntasTest">
                                        </div>
                                        <div class="form-group">
                                            <label for="CantidadRespondidasCorrectas">Cantidad respondida correctamente:</label>
                                            <input type="number" class="form-control" id="CantidadRespondidasCorrectas" name="CantidadRespondidasCorrectas">
                                        </div>
                                        <div class="divs">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="peticionServidorC()">Calcular</button>
                                        </div>
                                        <div class="divs">
                                            <p id="resultadoC"></p>
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
    </fieldset>
</div>