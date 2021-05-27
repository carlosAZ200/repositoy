<?php
    class SalarioMensual{
        /* $salarioMensual = $_GET["SalarioMensual"]; 
        $retencionFuente = $salarioMensual * 0.1;
        $aportesSalud = $salarioMensual * 0.4 * 0.125;
        $aportesPension = $salarioMensual * 0.4 * 0.16;
        $baseCotizacion = $salarioMensual * 0.4; */

        private $salarioMensual;
        private $retencionFuente;
        private $aportesSalud;
        private $aportesPension;

        public function __construct($SalarioMensual)
        {
            $this->salarioMensual = $SalarioMensual;
        }


        public function GetSalarioMensual()
        {
            return $this->salarioMensual;
        }


        public function SetSalarioMensual($SalarioMensual)
        {
            $this->salarioMensual = $SalarioMensual;
        }

        
        public function CalcularRetencionFuente()
        {
            $total = $this->salarioMensual * 0.1;
            
            $this->retencionFuente = $total;

            return $total;
        }


        public function CalcularAportesSalud()
        {
            $total = $this->salarioMensual * 0.4 * 0.125;

            $this->aportesSalud = $total;

            return $total;
        }

        public function CalcularAportesPension()
        {
            $total = $this->salarioMensual * 0.4 * 0.16;

            $this->aportesPension = $total;

            return $total;
        }

        public function CalcularBaseCotizacion()
        {
            $total = $this->salarioMensual * 0.4;
            
            return $total;
        }

        public function CalcularTotal()
        {
            $total = $this->salarioMensual - $this->retencionFuente - $this->aportesPension - $this->aportesSalud;
            
            return $total;
        }
    }