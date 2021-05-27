<?php
    class Test{

        private $nombreCandidato;
        private $cantidadPreguntasTest;
        private $cantidadRespondidasCorrectas;

        private $Porcentaje;

        public function __construct($NombreCandidato, $CantidadPreguntasTest, $CantidadRespondidasCorrectas)
        {
            $this->nombreCandidato = $NombreCandidato;
            $this->cantidadPreguntasTest = $CantidadPreguntasTest;
            $this->cantidadRespondidasCorrectas = $CantidadRespondidasCorrectas;
        }


        public function GetNombreCandidato()
        {
            return $this->nombreCandidato;
        }

        public function GetCantidadPreguntasTest()
        {
            return $this->cantidadPreguntasTest;
        }

        public function GetCantidadRespondidasCorrectas()
        {
            return $this->cantidadRespondidasCorrectas;
        }


        public function SetNombreCandidato($NombreCandidato)
        {
            $this->nombreCandidato = $NombreCandidato;
        }

        public function SetCantidadPreguntasTest($CantidadPreguntasTest)
        {
            $this->cantidadPreguntasTest = $CantidadPreguntasTest;
        }

        public function SetCantidadRespondidasCorrectas($CantidadRespondidasCorrectas)
        {
            $this->cantidadRespondidasCorrectas = $CantidadRespondidasCorrectas;
        }


        public function CalcularPorcentajeCorrectas()
        {
            $this->Porcentaje =  $this->cantidadRespondidasCorrectas * 100 / $this->cantidadPreguntasTest;

            return $this->Porcentaje;
        }

        public function CalcularNivel()
        {
            
            switch ($this->Porcentaje) {
                case ($this->Porcentaje >= 90):
                    $total = "Nivel máximo";
                    break;
                case ($this->Porcentaje >= 75 && $this->Porcentaje < 90):
                    $total = "Nivel máximo";
                    break;
                case ($this->Porcentaje >= 50 && $this->Porcentaje < 75):
                    $total = "Nivel máximo";
                    break;
                case ($this->Porcentaje < 50):
                    $total = "Nivel máximo";
                    break;
                
            }

            return $total;
        }

    }