<?php


class DiretorTI extends Funcionario
{
    public function autorizarCompra()
    {
        return 'Autorizei a compra';
    }

    public function contratar()
    {
        return 'Contratei um Dev';
    }

    public function fazerFaturamento()
    {
        return 'Fiz os faturamento';
    }
}
