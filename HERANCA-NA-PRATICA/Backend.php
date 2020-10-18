<?php


class Backend extends Programador
{
    private $sabeSql;

    public function consultarBD()
    {
        return 'Fiz uma consulta no banco';
    }

    public function tratarRequisicao()
    {
        return 'Requisição foi tratado';
    }

    public function configurarRotas()
    {
        return 'Rotas configuradas';
    }

    public function programar()
    {
        return 'Programando como um Backend [BACK]';
    }

}
