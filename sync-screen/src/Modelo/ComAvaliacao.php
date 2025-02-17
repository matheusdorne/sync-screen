<?php

namespace SyncScreen\Modelo;

trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        return array_sum($this->notas) / count($this->notas);
    }
}