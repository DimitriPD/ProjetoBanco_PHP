<?php 

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionarios\{Diretor, Gerente};
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\Autenticador;

$diretor = new Diretor(
    "Dimitri",
    new CPF("132.543.213-32"),
    3200
);

$titular = new Titular(
    "Dimitri",
    new CPF("132.435.321-65"),
    new Endereco("cidade", "bairro", "rua", "32")
);


$autenticador = new Autenticador();
$autenticador->tentaLogin($titular, "senha");

