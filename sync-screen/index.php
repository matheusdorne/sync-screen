<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao SyncScreen!\n ";

$filme = new Filme();
$filme->nome = "Thor Ragnarok";
$filme->anoDeLancamento = 2021;
$filme->genero = 'super-heroi';
$filme->nota = 8.5;

$filme->avalia(10);
$filme->avalia(9.7);
$filme->avalia(7.8);
$filme->avalia(5.5);
$filme->avalia(8);

var_dump($filme);

echo $filme->media();