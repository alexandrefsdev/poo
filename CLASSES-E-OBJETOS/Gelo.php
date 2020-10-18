<?php

class Gelo {
    var $material; // suco de maracuja, agua e iogurte
    var $forma; // quadrado
    var $cor; // transparente, amarelo, rosado
    var $estado = 'Sólido'; /// liquido, solido
    var $temperatura = -2;

    function esfriarLiquido()
    {
        echo "<p>Esfriando algum liquido</p>";
    }

    function derreter()
    {
        $this->temperatura = $this->temperatura + 1;
        echo "<p>Estou derretendo...</p>";
    }

    function getEstado()
    {
        if ($this->temperatura < 0) {
            echo "<h2>Sólido</h2>";
        } else {
            echo "<h2>Líquido</h2>";
        }
    }

}