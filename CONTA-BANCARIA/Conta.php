<?php

class Conta
{
    private $agencia;
    private $numero;
    private $tipo;
    private $titular;
    private $saldo = 0;
    private bool $ativa = false;

    public function __construct(int $agencia, int $numero)
    {
        $this->agencia = $agencia;
        $this->numero = $numero;
    }

    public function abrir(): void
    {
        $this->ativa = true;
        $this->processarCobrancas();
        echo "<h2>Parabéns!! Você abriu uma nova conta! =) </h2>";
    }

    public function encerrar(): void
    {
        if ($this->saldo > 0) {
            die("<h2>Erro: Você precisa ainda tem saldo (R$ {$this->getSaldo()})
            na conta! Realize o saque para que sua conta seja encerrada!</h2>");
        } else {
            $this->ativa = false;
            echo "<h2>Que pena, você encerrou a sua conta! =( </h2>";
        }
    }

    public function depositar(float $valor): void
    {
        if ($this->ativa === false) {
            die("<h2>Erro: A conta está inativa. Depósito não realizado.<h2>");
        }
        $this->saldo += $valor;
        echo "<h2>Comprovante de Depósito: R$ {$valor}</h2>";
        $this->imprimirSaldo();
    }


    public function sacar(float $valor): void
    {

        if ($this->ativa === false) {
            die("<h2>Erro: A conta está inativa. Saque não realizado.</h2>");
        }

        if ($valor > $this->saldo) {
            die("<h2>Erro: Saldo Insuficiente para saque!</h2>");
        }

        $this->saldo -= $valor;
        echo "<h2>Comprovante de Saque: R$ {$valor}</h2>";
        $this->imprimirSaldo();
    }

    public function processarCobrancas(): void
    {
        echo "<h2>Cobranças da Conta {$this->numero} foi processada.</h2>";
    }

    public function imprimirSaldo(): void
    {
        echo "<hr /><h2>Saldo atual: R$ {$this->getSaldo()}</h2>
        <hr />
        ";
    }

    /**
     * Get the value of agencia
     */
    public function getAgencia(): int
    {
        return $this->agencia;
    }

    /**
     * Set the value of agencia
     *
     * @return  self
     */
    public function setAgencia(int $agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero(int $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo(string $tipo)
    {
        if (!is_null($this->tipo)) {
            return;
        }

        switch ($tipo) {
            case 'cc':
                $this->saldo = 20;
                break;
            case 'cp':
                $this->saldo = 70;
                break;
            default:
                die('<h3>Tipo de Conta inválida! Insira somente cc ou cp!</h3>');
        }

        $this->tipo = $tipo;
    }



    /**
     * Get the value of titular
     */
    public function getTitular(): string
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */
    public function setTitular(string $titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of saldo
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * Get the value of ativa
     */
    public function isAtiva(): bool
    {
        return $this->ativa;
    }
}
