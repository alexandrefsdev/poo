<?php


class Banco24Horas
{
    private $banco;

    public function __construct($banco)
    {
        $this->banco = $banco;
    }

    public function sacar(float $valor)
    {
        $this->banco->sacar($valor);
    }
    public function depositar(float $valor)
    {
        $this->banco->depositar($valor);
    }
    public function consultarSaldo()
    {
        $this->banco->consultarSaldo();
    }
    public function getBanco()
    {
        return $this->banco;
    }
}
