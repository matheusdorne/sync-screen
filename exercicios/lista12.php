<?php
// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [10,5.3,23,34,2.5,12.5,4,8.9,14];

$maioresNotas = rsort($notas);

for ($i = 0; $i < 3; $i++) {
    echo $notas[$i]."\n";
}

// Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador”
// em um array em que cada item está separado por vírgulas.

$string = "Vinicius Dias,1997,Programador";
$array = explode(",", $string);

echo $array[0]."\n";
echo $array[1]."\n";
echo $array[2]."\n";

// Escreva uma função em PHP
//  que receba um array de strings por parâmetro
// e o retorne ordenado em ordem alfabética.

function ordemAlfabetica($strings)
{
    sort($strings);
    return $strings;
}

$strings = ["Vinicius", "Dias", "Programador"];
$stringsOrdenadas = ordemAlfabetica($strings);
var_dump($stringsOrdenadas);



