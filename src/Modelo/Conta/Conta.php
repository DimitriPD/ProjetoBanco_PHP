<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    private Titular $titular;
    protected float $saldo;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function deposita($valorDeposito) :void
    {
        if ($valorDeposito < 0) {
            echo "valor inválido!";
            exit();
        }

        $this->saldo += $valorDeposito;
    }

    public function saque($valorASaque) :void
    {
        $tarifaSaque = $valorASaque * $this->percentualTarifa();
        $valorSaque = $valorASaque + $tarifaSaque;

        if ($this->saldo < $valorASaque) {
            echo "saldo insuficiente";
            exit();
        }

        $this->saldo -= $valorSaque;
    }

    public function recuperaSaldo() :float
    {
        return $this->saldo;
    }

    abstract protected function percentualTarifa() :float;
    
    public function recuperaNomeTitular() :string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular() :string
    {
        return $this->titular->recuperaCPF();
    }

}