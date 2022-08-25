<?php

//Criando variáveis numéricas no PHP

$numInteiro     = 1234;                 echo "\n" . gettype($numInteiro); //gettype uma função interna para verificar o tipo da variável.
$numNegativo    = -333;                 echo "\n <br>" . gettype($numNegativo);
$numReal        = 123.44;               echo "\n <br>" . gettype($numReal);
$numOctal       = 0123;                 echo "\n <br>" . gettype($numOctal);
$numHexa        = 0x1A;                 echo "\n <br>" . gettype($numHexa);
$notCien        = 4e23;                 echo "\n <br>" . gettype($notCien);
$nome           = "Leonardo Tobias";    echo "\n <br>" . gettype($nome);

//Criando Constantes no PHP

define("pi", 3.14); // Através da função define é possivel criarmos constantes no PHP
$raio = 10;
$area = pow($raio, 2) * pi;
echo "<br>".$area;