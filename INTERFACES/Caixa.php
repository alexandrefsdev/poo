<?php



class Caixa
{
    private $nome;
    private $saldo;

    public function __construct(string $nome, float $saldo = 0)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    public function getCodigo()
    {
        return '104';
    }
    public function getCor()
    {
        return 'blue';
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function sacar(float $valor)
    {
        // Executar rotina complexa 1 do banco
        // Executar rotina complexa 2 do banco
        // Executar rotina complexa 3 do banco
        $this->saldo -= $valor;
    }

    public function depositar(float $valor)
    {
        // Executar rotina complexa 1 do banco
        // Executar rotina complexa 2 do banco
        // Executar rotina complexa 3 do banco
        $this->saldo += $valor;
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }
}
