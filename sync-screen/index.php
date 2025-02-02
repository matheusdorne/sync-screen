<?php

require __DIR__ . "/src/Modelo/Avaliavel.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calculos/ConversorNotaEstrela.php.php";

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

$calculadora = new CalculadoraDeMaratona();

$calculadora->incluiTitulo($filme);
$calculadora->incluiTitulo($serie);

$totalTempo = $calculadora->duracao();
echo "Para maratornar tudo, você vai precisar de $totalTempo minutos. \n";

$filme = new Episodio($serie, 'Piloto', 1);

$conversor = new ConversorNotaEstrela();

echo $conversor->converte($serie) . " Estrelas";


