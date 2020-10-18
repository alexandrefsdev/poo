<?php


class Produto
{
    private string $nome;
    private float $preco;
    private Categoria $categoria;

    public function __construct(string $nome, float $preco, Categoria $categoria = null)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
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

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
