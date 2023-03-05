<?php 

require_once("autoload.php");

use Alura\Banco\Modelo\Endereco;

$endereco1 = new Endereco("curitiba", "xaxim", "rua", "32");
$endereco2 = new Endereco("cidade", "bairro", "uma rua", "90");


echo $endereco2;