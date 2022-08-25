<?php
require_once("classes/carro.class.php");

$MeuCarro = new Carro(); //Instanciando o objeto $MeuCarro

$MeuCarro->setCarro("GM", "Camaro", "DXY-1355", "2018");
$MeuCarro->ligar();
echo "\n\nMarca: ".$MeuCarro->getMarca()."\n";
$MeuCarro->desligar();
$MeuCarro = Null; //Destruindo o objeto $MeuCarro
