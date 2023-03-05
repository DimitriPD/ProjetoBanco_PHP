<?php 

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Pessoa;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao() :float
    {
        return 500;
    }

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->salario * 0.75);
    }
}