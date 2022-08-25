<?php

$a = -10; 
$b = 11; 
$c = 4;

$valDelta = getDelta($a, $b, $c);
$analise = analiseDelta($valDelta);
echo "\nA:" .$a, "\nB:" .$b, "\nC:" .$c, "\nDelta:" .$valDelta, "\nAnálise:". $analise . "<br>";

if($valDelta >= 0){
    $x1 = getX1($a, $b, $valDelta);
    $x2 = getX2($a, $b, $valDelta);
    echo "\nValor de X1: {$x1}","\nValor de X2: {$x2}"."<br>";
}

function getDelta($a, $b, $c) {
    $del = pow ($b, 2) -4 * $a * $c;
    return $del;
}

function getX1 ($a, $b, $valorDelta){
    $x1 = (-$b + sqrt($valorDelta) ) / (2 * $a);
    return $x1;
}

function getX2 ($a, $b, $valorDelta){
    $x2 = (-$b - sqrt($valorDelta) ) / (2 * $a);
    return $x2;
}

function analiseDelta($delta){
    if($delta == 0) return "Duas raizes reais iguais!";
    if($delta > 0) return "Duas raizes reais diferentes!";
    else return "Sem Solução!";
}