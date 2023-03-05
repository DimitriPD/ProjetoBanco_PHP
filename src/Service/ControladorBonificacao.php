<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionarios\Funcionario;

class ControladorBonificacao
{
    private float $totalBonificacoes = 0;

    public function addBonificacoes(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaBonificacao() :float 
    {
        return $this->totalBonificacoes;
    }
}