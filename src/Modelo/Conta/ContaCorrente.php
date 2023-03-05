<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa() :float
    {
        return 0.05;
    }

    public function transfere($valorTransferencia, $contaDestino) :void
    {
        if ($this->saldo < $valorTransferencia) {
            echo "Erro";
            exit();
        }

        $this->saque($valorTransferencia);
        $contaDestino->deposita($valorTransferencia);

    }
}