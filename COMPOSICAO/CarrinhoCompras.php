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
    /**
     * @var FormaPagamento
     */
    private FormaPagamento $formaPagamento;


    public function __construct(DateTime $dataCompra, FormaPagamento $formaPagamento)
    {
        $this->dataCompra = $dataCompra;
        $this->formaPagamento = $formaPagamento;

        // rotina bem pesada, complexa das formas de pagamento
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
        $returnString = "<h2>Cliente {$this->cliente->getNome()} fez a compra dos itens:</h2>
            <h3>Forma de Pagamento: {$this->formaPagamento->getNome()}</h3>
        ";

        foreach ($this->itens as $item) {
            $returnString .= '<p>' . $this->nome . '<p>';
        }

        $returnString .= "<p>Obrigado pela preferência</p>";

        return $returnString;
    }
}
