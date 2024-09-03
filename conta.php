<?php

$conta = [
    'titular' => 'Matheus Dornelles',
    'saldo' => 1000.00
];


while(true) {
    echo "\n1. Consultar saldo atual \n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor \n";
    echo "4. Sair \n";
    echo "Digite um número: \n";
    $numero = fgets(STDIN);
    echo "O número é: $numero \n";

    if ($numero == 1) {
        echo "********************\n";
        echo "Titular: $conta[titular]\n";
        echo "Saldo atual: R$ $conta[saldo]\n";
        echo "********************\n";
    } elseif ( $numero == 2) {
        echo "Qual valor deseja sacar?\n";
        $valor = fgets(STDIN);

        if ($valor <= $conta['saldo']) {
            $conta['saldo'] -= (float) $valor;
            echo "\nNovo saldo: R$ $conta[saldo]\n";
        } else {
            echo "\nSaldo insuficiente!\n";
        }
    } elseif ($numero == 3) {
        echo "Qual valor para deposito?\n";
        $valor = fgets(STDIN);
        $conta['saldo'] += (float) $valor;
        echo "Novo saldo: R$ $conta[saldo]";

    } elseif ($numero == 4){
        break;
    }
}