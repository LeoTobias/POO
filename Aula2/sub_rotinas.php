<?php
$x = 9;
$y = 7.4;

$media = getMedia($x, $y); // Para executar uma função com retorno usa-se uma variável

exibirMedia($x, $y, $media); // Para executar uma função sem retorno não se usa variáveis

function getMedia($a, $b){
    $minhaMedia = ($a + $b) / 2;
    return $minhaMedia;
}

function exibirMedia($a, $b, $media) { // Parâmetros são variáveis de entrada da função

    echo "\nValor de a......" .$a;
    echo "\nValor de b......" .$b;
    echo "\nValor da Média: " .$media. "\n";

}