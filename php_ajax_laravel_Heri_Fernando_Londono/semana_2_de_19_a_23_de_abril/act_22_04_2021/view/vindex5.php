<div class="dives">
    <fieldset>
        <div class="divs">
            <div class="divs" style="text-align: left;">
                <p>
                8. AEROLINEAS MANIZALES
                La empresa de transporte aéreo “Aerolíneas Manizales” ha establecido la siguiente tabla de tarifas para los destinos.
                • Manizales – Neiva y viceversa $ 347.000 • Manizales – Pereira y viceversa $ 360.000 • Manizales – Pasto y viceversa $ 382.000 • Neiva – Pereira y viceversa $ 375.000 • Neiva – Pasto y viceversa $ 392.000 • Pereira – Pasto y viceversa $ 408.000
                Nota. Estas tarifas aplican para clase turista. En primera clase, se le debe incrementar el 20% a la tarifa. En clase ejecutiva, se le debe incrementar el 50% a la tarifa. Como están de aniversario, han establecido una promoción para los clientes, la cual consiste en lo siguiente. Si la edad del pasajero es mayor a 30 años tendrá un 10% de descuento. En caso contrario tendrá un 15% de descuento. Adicional a esto, la aerolínea ofrece los siguientes servicios a módicos precios. Alimentación. $25000. Internet. $ 5000
                . $ 4000 Se debe crear la siguiente interfaz, y en las listas de las ciudades se mostraran las siguientes tanto en origen como destino.
                </p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Ejercicio 5
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body" style="text-align: left;">

                            <div class="divs">
                                <fieldset>                   
                                    <div class="form-group">
                                        <label for="CiudadOrigen">Ciudad de origen: </label>
                                        <select class="form-control" id="CiudadOrigen" name="CiudadOrigen">
                                            <option value="manizales">Manizales</option>
                                            <option value="neiva">Neiva</option>
                                            <option value="pereira">Pereira</option>
                                            <option value="pasto">Pasto</option>
                                        </select>
                                    </div>           
                                    <div class="form-group">
                                        <label for="CiudadDestino">Ciudad de destino: </label>
                                        <select class="form-control" id="CiudadDestino" name="CiudadDestino">
                                            <option value="manizales">Manizales</option>
                                            <option value="neiva">Neiva</option>
                                            <option value="pereira">Pereira</option>
                                            <option value="pasto">Pasto</option>
                                        </select>
                                    </div>    

                                    <fieldset class="form-group row" style="border: none;">
                                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Clase</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Clase" id="Clase1" value="turista" checked>
                                                <label class="form-check-label" for="Turista">
                                                Turista
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Clase" id="Clase2" value="primeraClase">
                                                <label class="form-check-label" for="PrimeraClase">
                                                Primera clase
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Clase" id="Clase3" value="ejecutiva">
                                                <label class="form-check-label" for="Ejecutiva">
                                                Ejecutiva
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group row" style="border: none;">
                                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Servicios</legend>
                                        <div class="col-sm-10 offset-sm-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="Alimentacion" name="Alimentacion" value="0">
                                                <label class="form-check-label" for="Alimentacion">
                                                Alimentación
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="Internet" name="Internet" value="0">
                                                <label class="form-check-label" for="Internet">
                                                Internet
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="Maletero" name="Maletero" value="0">
                                                <label class="form-check-label" for="Maletero">
                                                Maletero
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group">
                                        <label for="Nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="Nombre" name="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="Edad">Edad:</label>
                                        <input type="number" class="form-control" id="Edad" name="Edad">
                                    </div>

                                        <div class="divs">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="peticionServidorE()">Calcular</button>
                                        </div>
                                        <div class="divs">
                                            <p id="resultadoE"></p>
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
    </fieldset>
</div>