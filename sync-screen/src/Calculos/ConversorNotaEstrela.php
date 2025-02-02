<?php

class ConversorNotaEstrela{

    public function converte(Avaliavel $avaliavel)
    {
        $nota = $avaliavel->media();

        return round($nota) / 2;
    }
}