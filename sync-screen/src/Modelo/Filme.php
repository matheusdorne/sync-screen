<?php

class Filme{
    public string $nome;
    public int $anoDeLancamento;
    public string $genero;
    public array $notas = [];

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

}