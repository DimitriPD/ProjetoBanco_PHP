<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Funcionarios\{Desenvolvedor, Diretor, Funcionario, Gerente};
use Alura\Banco\Modelo\{Pessoa, CPF};
use Alura\Banco\Service\controladorBonificacao;

$desenvolvedor = new Desenvolvedor(
    $nome = "dimtri",
    $cpf = new CPF("123.435.325-32"),
    $salario = 2000
);

$gerente = new Gerente(
    $nome = "Augusto",
    $cpf = new CPF("132.435.643-32"),
    $salario = 5000
);

$controlador = new ControladorBonificacao();

$desenvolvedor->sobeDeNivel();


$controlador->addBonificacoes($desenvolvedor);
$controlador->addBonificacoes($gerente);


echo $controlador->recuperaBonificacao() . PHP_EOL;
echo $desenvolvedor->recuperaSalario();