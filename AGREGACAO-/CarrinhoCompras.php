<?php


class CarrinhoCompras
{
    /**
     * @var DateTime
     */
    private DateTime $dataCompra;
    /**
     * @var int
     */
    private int $totalProdutos;
    /**
     * Undocumented variable
     *
     * @var Produto[]
     */
    private $itens;
    /**
     * @var Vendedor
     */
    private Vendedor $vendedor;
    /**
     * @var Cliente
     */
    private Cliente $cliente;
    

    public function __construct(DateTime $dataCompra)
    {
        $this->dataCompra = $dataCompra;
    }

    public function adicionarProduto(Produto $produto): void
    {
        $this->itens[] = $produto;
    }

    public function setVendedor(Vendedor $vendedor): void
    {
        $this->vendedor = $vendedor;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function getTotalProdutos(): int
    {
        return $this->totalProdutos;
    }

    public function listaProdutos(): void
    {
        $returnString = '';

        foreach ($this->itens as $item) {
            $returnString .= '<p>' . $this->nome . '<p>';
        }

    }

    public function fazerVenda()
    {
        $returnString = "<h2>Cliente {$this->cliente->getNome()} fez a compra dos itens:</h2> ";

        foreach ($this->itens as $item) {
            $returnString .= '<p>' . $this->nome . '<p>';
        }

        $returnString .= "<p>Obrigado pela preferência</p>";

        return $returnString;
    }
}
