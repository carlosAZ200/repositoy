<?php
    class IMC{

        private $peso;
        private $longitud;

        private $imc;

        public function __construct($Peso, $Longitud)
        {
            $this->peso = $Peso;
            $this->longitud = $Longitud;
        }


        public function GetPeso()
        {
            return $this->peso;
        }

        public function GetLongitud()
        {
            return $this->longitud;
        }


        public function SetPeso($Peso)
        {
            $this->peso = $Peso;
        }

        public function SetLongitud($Longitud)
        {
            $this->longitud = $Longitud;
        }


        public function CalcularIndice()
        {
            $imc = $this->peso / pow($this->longitud, 2);

            return $imc;
        }

        public function CalcularCategoria()
        {
            switch ($this->imc) {
                case ($this->imc < 18.5):
                    $total = "Por debajo del peso";
                    break;
                case ($this->imc >= 18.5 && $this->imc < 25):
                    $total = "Saludable";
                    break;
                case ($this->imc >= 25 && $this->imc < 30):
                    $total = "Con sobrepeso";
                    break;
                case ($this->imc >= 30 && $this->imc < 40):
                    $total = "Obeso";
                    break;
                case ($this->imc > 40):
                    $total = "Obesidad mórbida";
                    break;
            }

            return $total;
        }

    }