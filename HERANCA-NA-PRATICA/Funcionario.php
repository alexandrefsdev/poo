<?php

abstract class Funcionario
{
    private $nome;
    private $matricula;
    private $sexo;


    public function baterPonto()
    {
        return 'Bati o Ponto!';
    }
}
