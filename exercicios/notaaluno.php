<?php

$notas = [0,1,2,3,4,5,6,7,8,9,10];

foreach ($notas as $nota) {
    if ($nota >= 6) {
        echo "Aprovado\n";
    } else {
        echo "Reprovado\n";
    }
}