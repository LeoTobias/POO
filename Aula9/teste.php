<?php 

require_once("media.php"); 
require_once("mediaG.php"); 
require_once("mediaA.php");

$m = new MediaG; $m->setNotas(4,6); 
$m->mostrarMedia("Geométrica");

$A = new MediaA; $A->setNotas(8,6); 
$A->mostrarMedia("Aritmética");