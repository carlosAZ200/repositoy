<?php
    class Salario{

        private $nombreVendedor;
        private $numeroCelularesVendidos;
        private $valorTotalVentas;

        public function __construct($NombreVendedor, $NumeroCelularesVendidos, $ValorTotalVentas)
        {
            $this->nombreVendedor = $NombreVendedor;
            $this->numeroCelularesVendidos = $NumeroCelularesVendidos;
            $this->valorTotalVentas = $ValorTotalVentas;
        }


        public function GetNombreVendedor()
        {
            return $this->nombreVendedor;
        }

        public function GetNumeroCelularesVendidos()
        {
            return $this->numeroCelularesVendidos;
        }

        public function GetValorTotalVentas()
        {
            return $this->valorTotalVentas;
        }


        public function SetNombreVendedor($NombreVendedor)
        {
            $this->nombreVendedor = $NombreVendedor;
        }

        public function SetNumeroCelularesVendidos($NumeroCelularesVendidos)
        {
            $this->numeroCelularesVendidos = $NumeroCelularesVendidos;
        }

        public function SetValorTotalVentas($ValorTotalVentas)
        {
            $this->valorTotalVentas = $ValorTotalVentas;
        }


        public function CalcularSalarioTotal()
        {
            $total = $this->numeroCelularesVendidos * 10000 + 300000 + $this->valorTotalVentas * 0.05;

            return $total;
        }

    }