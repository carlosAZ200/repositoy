<?php
    class Reserva{

        private $ciudadOrigen;
        private $ciudadDestino;
        private $clase;
        private $alimentacion;
        private $internet;
        private $maletero;
        private $nombre;
        private $edad;
        

        public function __construct($CiudadOrigen, $CiudadDestino, $Clase, $Alimentacion, $Internet, $Maletero, $Nombre, $Edad)
        {
            $this->ciudadOrigen = $CiudadOrigen;
            $this->ciudadDestino = $CiudadDestino;
            $this->clase = $Clase;
            $this->alimentacion = $Alimentacion;
            $this->internet = $Internet;
            $this->maletero = $Maletero;
            $this->nombre = $Nombre;
            $this->edad = $Edad;
        }


        public function GetCiudadOrigen()
        {
            return $this->ciudadOrigen;
        }

        public function GetCiudadDestino()
        {
            return $this->ciudadDestino;
        }

        public function GetClase()
        {
            return $this->clase;
        }

        public function GetAlimentacion()
        {
            return $this->alimentacion;
        }

        public function GetInternet()
        {
            return $this->internet;
        }

        public function GetMaletero()
        {
            return $this->maletero;
        }

        public function GetNombre()
        {
            return $this->nombre;
        }

        public function GetEdad()
        {
            return $this->edad;
        }


        public function SetCiudadOrigen($CiudadOrigen)
        {
            $this->ciudadOrigen = $CiudadOrigen;
        }

        public function SetCiudadDestino($CiudadDestino)
        {
            $this->ciudadDestino = $CiudadDestino;
        }

        public function SetClase($Clase)
        {
            $this->clase = $Clase;
        }

        public function SetAlimentacion($Alimentacion)
        {
            $this->alimentacion = $Alimentacion;
        }

        public function SetInternet($Internet)
        {
            $this->internet = $Internet;
        }

        public function SetMaletero($Maletero)
        {
            $this->maletero = $Maletero;
        }

        public function SetNombre($Nombre)
        {
            $this->nombre = $Nombre;
        }

        public function SetEdad($Edad)
        {
            $this->edad = $Edad;
        }



        var $tarifa;
        var $incremento;
        var $valorServicios;
        var $descuento;


        public function CalcularTarifa(){
            switch ($this->ciudadOrigen && $this->ciudadDestino) {
                case ($this->ciudadOrigen == "manizales" && $this->ciudadDestino == "neiva" || $this->ciudadOrigen == "neiva" && $this->ciudadDestino == "manizales"):
                    /* $this->tarifa = 347000; */
                    $this->tarifa = 347000;
                    break;
                case ($this->ciudadOrigen == "manizales" && $this->ciudadDestino == "pereira" || $this->ciudadOrigen == "pereira" && $this->ciudadDestino == "manizales"):
                    $this->tarifa = 360000;
                    break;
                case ($this->ciudadOrigen == "manizales" && $this->ciudadDestino == "pasto" || $this->ciudadOrigen == "pasto" && $this->ciudadDestino == "manizales"):
                    $this->tarifa = 382000;
                    break;
                case ($this->ciudadOrigen == "neiva" && $this->ciudadDestino == "pereira" || $this->ciudadOrigen == "pereira" && $this->ciudadDestino == "neiva"):
                    $this->tarifa = 382000;
                    break;
                case ($this->ciudadOrigen == "neiva" && $this->ciudadDestino == "pasto" || $this->ciudadOrigen == "pasto" && $this->ciudadDestino == "neiva"):
                    $this->tarifa = 382000;
                    break;
                case ($this->ciudadOrigen == "pereira" && $this->ciudadDestino == "pasto" || $this->ciudadOrigen == "pasto" && $this->ciudadDestino == "pereira"):
                    $this->tarifa = 382000;
                    break;
            }

            return $this->tarifa;
        }        

        public function CalcularIncremento(){

            if ($this->clase == "turista") {
                $this->incremento = $this->tarifa * 0;
            }elseif ($this->clase == "primeraClase") {
                $this->incremento = $this->tarifa * 0.20;
            }elseif ($this->clase == "ejecutiva") {
                $this->incremento = $this->tarifa * 0.50;
            }

            return $this->incremento;
        }        

        public function CalcularValorServicios(){

            $this->valorServicios = $this->alimentacion + $this->internet + $this->maletero;

            return $this->valorServicios;
        }        

        public function CalcularDescuento(){
            $total = $this->tarifa + $this->incremento + $this->valorServicios;
            
            if ($this->edad > 30) {
                $this->descuento = $total * 0.10;
            }else {
                $this->descuento = $total * 0.15;
            }
            
            return $this->descuento;
        }        

        public function CalcularTotal(){
            $total = $this->tarifa + $this->incremento + $this->valorServicios - $this->descuento;
        
            return $total;
        }        




        /* public function CalcularIndice()
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
        } */

    }