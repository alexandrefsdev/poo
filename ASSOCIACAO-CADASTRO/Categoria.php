<?php



class Categoria
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }



    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }
}

