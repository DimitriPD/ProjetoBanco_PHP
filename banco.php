<?php

require_once "autoload.php";

use Alura\Banco\Modelo\{CPF, Endereco, Pessoa};
use Alura\Banco\Modelo\Funcionarios; 
use Alura\Banco\Modelo\Conta\{Conta, Titular, ContaCorrente, ContaPoupanca};



$cpfTitular1 = new CPF("123.132.123-32");
$enderecoTitular1 = new Endereco("cidade", "bairro", "rua", "numero");
$titular1 = new Titular("Dimitri", $cpfTitular1, $enderecoTitular1);
$conta1 = new ContaCorrente($titular1);

$cpfTitular2 = new CPF("543.132.652-32");
$enderecoTitular2 = new Endereco("cidade", "bairro", "rua", "numero");
$titular2 = new Titular("Julia", $cpfTitular2, $enderecoTitular2);
$conta2 = new ContaCorrente($titular2);

$conta1->deposita(500);
// $conta1->saque(100);
$conta1->transfere(32, $conta2);


echo $conta1->recuperaSaldo() . PHP_EOL;
echo $conta2->recuperaSaldo() . PHP_EOL;

