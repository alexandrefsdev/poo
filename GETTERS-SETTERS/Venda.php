<?php

class Venda
{
    private $vendedor;
    private $cargo; // (E)Estagiario, (V)Vendedor e (G)Gerente
    private $valor;
    private $taxaComissao;
    private $comissao;

    /**
     * Get the value of vendedor
     */
    public function getVendedor()
    {
        return $this->vendedor;
    }

    /**
     * Set the value of vendedor
     *
     * @return  self
     */
    public function setVendedor(string $vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    /**
     * Get the value of cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     *
     * @return  self
     */
    public function setCargo(string $cargo)
    {
        if (strlen($cargo) > 1) {
            die("Só pode ser inserido 1 caractere no cargo");
        }

        switch ($cargo) {
            case 'E':
                $this->taxaComissao = 0.05;
                break;
            case 'V':
                $this->taxaComissao = 0.10;
                break;
            case 'G':
                $this->taxaComissao = 0.20;
                break;
            default:
                die('Cargo Inválido! Você só pode inserir: E, V ou G');
        }

        $this->cargo = $cargo;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor(float $valor)
    {
        $this->comissao = $valor * $this->taxaComissao;
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of taxaComissao
     */
    public function getTaxaComissao()
    {
        return $this->taxaComissao;
    }

    /**
     * Get the value of comissao
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function realizarVenda()
    {
        echo "
        <h1>Venda Realizada com sucesso!</h1>
        <h3>Vendedor: {$this->vendedor} ({$this->cargo})</h3>
        <h3>Valor da Venda: R$ {$this->valor}</h3>
        <h3>Comissão: R$ {$this->comissao} <small> ({$this->taxaComissao}%)<small></h3>
        <hr />
        <p>Parabéns {$this->vendedor}! Você ganhou R$ {$this->comissao} de comissão.
        ";
    }
}

$venda = new Venda();
$venda->setVendedor("Alexandre Silveira");
$venda->setCargo("G");
$venda->setValor(100);



$venda->realizarVenda();
