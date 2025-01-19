<?php

class Filme extends Titulo
{
    private array $notas;

    //Quando definimos o modificador de acesso private no __construct,
    // o atributo que é passado é promovido a propriedade, não sendo necessário realizar
    // o vínculo $this->atributo = $atributo
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    // readonly define como apenas leitura não podendo ser alterado
        // // esses valores após a construção do objeto, com o public deixando de  ser necessário o uso dos métodos get
    )
    {
        parent::__construct($nome, $anoLancamento, $genero);
        // Aqui estamos repassando os dados para a classe pai
    }

}