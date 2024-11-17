<?php
$caminhoDoArquivo = __DIR__.'/filme.json';
$conteudoArquivoFilme = file_get_contents($caminhoDoArquivo);
$filme = json_decode($conteudoArquivoFilme, true); //True valida que será criado um array associativo

var_dump($filme);
