<?php

class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function deposita(int $valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldoEmCentavos += $valorDeposito;
        }
    }

    public function saca(int $valorSaque): void
    {
        if ($valorSaque > 0 && $valorSaque <= $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorSaque;
        }
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
