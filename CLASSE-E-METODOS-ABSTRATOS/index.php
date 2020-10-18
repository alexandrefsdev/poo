<?php

// abstract class A
// {
//     public $atributo = 'Valor do Atributo';

//     abstract public function meuMetodo();

// }

// class B extends A
// {
//     public function meuMetodo()
//     {
//         return 'Meu método na classe B!';

//     }
// }

// class C extends A
// {
//     public function meuMetodo()
//     {
//         return 'Meu método na classe C!';

//     }
// }

// $b = new B();
// $c = new C();

// echo $b->atributo;

/** CLASSE FINAL */

final class A
{
    public $atributo1 = '1';
    public $atributo2 = '2';

    public function meuMetodo()
    {
        return 'Meu Metodos'
    }
}

class B extends A
{

}