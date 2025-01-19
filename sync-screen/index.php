<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao SyncScreen!\n ";

$filme = new Filme(
    'Pulp Fiction',
    1994,
    Genero::Drama,
    194
);

$filme->avalia(10);
$filme->avalia(9.7);
$filme->avalia(7.8);
$filme->avalia(5.5);
$filme->avalia(8);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancmento . "\n";


$serie = new Serie('Breaking Bad', 2008, Genero::Drama, 5, 5, 45);

