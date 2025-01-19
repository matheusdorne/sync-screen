<?php

class Titulo
{
    private array $notas;
    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancmento,
        public readonly Genero $genero,

    ){
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
           return  array_sum($this->notas) / count($this->notas);
    }
}