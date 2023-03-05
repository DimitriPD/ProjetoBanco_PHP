<?php 

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessaAtributo;

    private string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome() :string
    {
        return $this->nome;
    }

    public function recuperaCPF() :string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome($nome) 
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter 5 letras no minimo!";
            exit();
        }
    }
}