<?php


class ContaBancaria
{
    protected float $saldo;

    public function depositar(int $valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
        }
    }

    public function sacar(float $valorSaque): void
    {
        if ($valorSaque > 0 && $this->saldo <= $valorSaque) {
            $this->saldo -= $valorSaque;
        }
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }

}