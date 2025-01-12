<?php


require __DIR__ . "/src/Modelo/Filme.php";
require "src/funcoes.php";

echo "Bem-vindo(a) ao SyncScreen!\n ";

$nomeFilme = "Matrix";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;

$notas = [];

for ($i = 1; $i < $argc; $i++) {
    $notas[] = (float)$argv[$i];
}

$somaDeNotas = 0;

$notaFilme = array_sum($notas) / $quantidadeDeNotas;

echo $notaFilme;

exibeMensagemLancamento($anoLancamento);


$nomeFilme = "Filme 2";
$nomeFilme = "Filme 1";

$genero = match ($nomeFilme) {
    "Filme 1" => "Ruim\n",
    "Filme 2" => "Musica\n",
    default => "gênero desconhecido",

};

echo $genero;
var_dump($argv);

echo 'teste';

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;

$filme = criaFilme("Matrix",
    2022,
    8.5,
    "Ficção Científica");

var_dump($filme->nome);
$posicaoX = strpos($filme->nome,"x");
var_dump($posicaoX);

$substring = substr($filme->nome, 0, 3);
var_dump($substring);

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__.'/filme.json', $filmeComoStringJson);