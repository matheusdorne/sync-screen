<?php
$anoLancamento = $argv[1] ?? 2022;

echo $anoLancamento."\n";


if ($anoLancamento > 2022) {
 echo "Esse filme é um lancaçmento\n";
} else {
    echo "Esse filme não é um lançamento\n";
}


$nomeFilme = "Filme 2";
$nomeFilme = "Filme 1";

$genero = match ($nomeFilme) {
    "Filme 1" => "Ruim\n",
    "Filme 2" => "Musica\n",
    default => "gênero desconhecido",

};

echo $genero;