<?php

class Filme{
    private string $nome;
    private int $anoDeLancamento;
    private string $genero;
    private array $notas = [];

    function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    function media(): float
    {
      $somaNotas = array_sum($this->notas);
      $quantidadeDeNotas = count($this->notas);

      return  $somaNotas / $quantidadeDeNotas;
    }

    public function  getAnoLancamento(): int
    {
        return $this->anoDeLancamento;
    }

    public function  setAnoLancamento(int $anoLancamento): void
    {
        $this->anoDeLancamento = $anoLancamento;
    }

}