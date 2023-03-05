<?php 

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Pessoa;

class EditorVideo extends Funcionario
{
	public function calculaBonificacao(): float {
        return 600;
    }
}