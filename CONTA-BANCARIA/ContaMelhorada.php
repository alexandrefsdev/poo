<?php

class ContaMelhorada
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

    public function __toString(): string
    {
        return "

        ======= SALDO DA CONTA =======

        <p>Agência: {$this->agencia}</p>
        <p>N° Conta: {$this->numero}</p>
        <p>Tipo: {$this->tipo}</p>
        <p>Titular: {$this->titular}</p>
        <p> ======== SALDO(R$): {$this->saldo} ======== </p>
        ";
    }

    public function __get(string $atributo)
    {
        if (!property_exists($this, $atributo)) {
            die("Erro no GETTER: atributo '{$atributo}' não existe nesta classe.");
        }

        $getter = 'get' . $atributo;

        if (method_exists($this, $getter)) {
            return $this->$getter();
        }

        return $this->{$atributo};
    }

    public function __set(string $atributo, $value)
    {
        if (!property_exists($this, $atributo)) {
            die("Erro no SETTER: atributo '{$atributo}' não existe nesta classe.");
        }

        $setter = 'set' . $atributo;

        if (method_exists($this, $setter)) {
            return $this->$setter($value);
        }

        return $this->{$atributo} = $value;
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

    public function getTitular()
    {
        return 'Sr(a). ' . $this->titular;
    }

    public function imprimirSaldo(): void
    {
        echo "<hr /><h2>Saldo atual: R$ {$this->getSaldo()}</h2>
        <hr />
        ";
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
}
