<?php 

require_once("autoload.php");

use Alura\Banco\Modelo\Funcionarios\Desenvolvedor;
use Alura\Banco\Modelo\CPF;

$dev = new Desenvolvedor("Dimitri", new CPF("133.321.435-32"), 4222);

echo $dev->salario;
