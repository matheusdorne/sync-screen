<?php

class ContaBancaria
{
    private float $saldo;

    public function __construct(
        public readonly string    $nomeTitular,
        public readonly TipoConta $tipoConta)
    {
        $this->saldo = 0.0;
    }

    public function deposita(float $valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
        }
    }

    public function saca(float $valorSaque): void
    {
        if ($valorSaque > 0 && $valorSaque <= $this->saldo) {
            $this->saldo -= $valorSaque;
        }
    }
}