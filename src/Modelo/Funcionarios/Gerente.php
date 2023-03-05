<?php 

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao() :float
    {
        return $this->salario;
    }

    public function podeAutenticar(string $senha) :bool
    {
        return $senha === "4321";
    }
}