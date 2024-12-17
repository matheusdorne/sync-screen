<?php


$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['genero'],
    ];

file_put_contents('filme.json', json_encode($filme));


