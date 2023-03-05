<?php

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    protected float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }
    public function recuperaSalario() :float
    {
        return $this->salario;
    }

    public function recebeAumento($valorAumento)
    {   
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao() :float;
}