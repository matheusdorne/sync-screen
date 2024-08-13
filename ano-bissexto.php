<?php

//Ano Bissexto
$ano = $argv[1];
$anoDoisUltimos = $ano % 100;

if ($anoDoisUltimos % 4 !== 0 || $anoDoisUltimos == 00 ) {
    echo "$ano não é bissexto \n";
} else {
    echo "$ano é bissexto \n";
}
