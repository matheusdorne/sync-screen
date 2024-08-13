<?php
$anoLancamento = $argv[1] ?? 2022;

echo $anoLancamento."\n";


if ($anoLancamento > 2022) {
 echo "Esse filme é um lancaçmento\n";
} else {
    echo "Esse filme não é um lançamento";
}