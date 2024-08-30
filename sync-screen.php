<?php

echo "Bem-vindo(a) ao SyncScreen!\n ";

$nomeFilme = "Matrix";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;

$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}




$notaFilme = $somaDeNotas / $quantidadeDeNotas;

echo $notaFilme;


if ($anoLancamento > 2022) {
 echo "\n Esse filme é um lancaçmento\n";
} else {
    echo "\n Esse filme não é um lançamento\n";
}


$nomeFilme = "Filme 2";
$nomeFilme = "Filme 1";

$genero = match ($nomeFilme) {
    "Filme 1" => "Ruim\n",
    "Filme 2" => "Musica\n",
    default => "gênero desconhecido",

};

echo $genero;
var_dump($argv);