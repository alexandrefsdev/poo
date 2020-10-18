<?php


class Frontend extends Programador
{
    private $criaLayout;

    public function usarReact()
    {
        return 'Usando React';
    }

    public function usarVueJS()
    {
        return 'Usando VueJS';
    }

    public function usarES6()
    {
        return 'Usando especificação ES6';
    }

    public function programar()
    {
        return parent::programar() . ' - Programando como um Frontend';
    }
}
