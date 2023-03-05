<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionarios\Diretor;
use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel , string $senha): void 
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "OK";
        } else {
            echo "Senha incorreta";
        }
    }
}

