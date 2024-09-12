<?php

function exibeMensagemLancamento($ano)
{
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo \n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

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