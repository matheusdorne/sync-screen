

<h1>Sucesso! Filme <?php echo $_GET['filme']; ?>  inserido.</h1>

<?php
$conteudoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoJson,true);
var_dump($filme);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Filme Inserido</title>
</head>
<body>
    <h1><?php $filme['nome']; ?></h1>
    <ul>
        <li>Nome: <?php echo $filme['nome']; ?></li>
        <li>Ano de lançamento: <?php echo $filme['anoLancamento']; ?></li>
        <li>Nota: <?php echo $filme['nota']; ?></li>
        <li>Gênero: <?php echo $filme['genero']; ?></li>
    </ul>
</body>
</html>