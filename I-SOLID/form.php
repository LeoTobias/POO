<?php

require './classes/mediaGeo.class.php';
require './classes/mediaArit.class.php';

if( isset($_POST['mediaGeo']) ){
    $nome  = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $notas = array ($nota1, $nota2);

    $mediaGeo = new MediaGeometrica;
    $mediaGeo->setDados($notas, $nome);
    $mediaGeo->mostrarMedia($mediaGeo);

}

if(isset($_POST['mediaAri'])){
    $nome  = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $notas = array ($nota1, $nota2);

    $mediaArit = new mediaAri;
    $mediaArit->setDados($notas, $nome);
    $mediaArit->mostrarMedia($mediaArit);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 13</title>
</head>
<body>
    <div class="container">
        <center>
            <div class="row">
                <h3>Verifique suas médias</h3>
            </div>
        
            <form method="post">
                <label for="nome">Digite seu Nome:</label>
                <input name="nome" type="text" autocomplete="off">
                <br><br>
                <label for="nota1">Digite nota 1:</label>
                <input name="nota1" type="text" autocomplete="off">
                <br><br>
                <label for="nota2">Digite nota 2:</label>
                <input name="nota2" type="text" autocomplete="off">
                <br><br>
                <input type="submit" name="mediaGeo" value="Média Geométrica">
                <input type="submit" name="mediaAri" value="Média Aritmética">
            </form>

            <div class="resultado">
                <p>A média Geométrica é: <?= $mediaGeo ? number_format($mediaGeo, 2) : '' ?></p>
                <p>A média Aritmética é: <?= $mediaArit ? number_format($mediaArit, 2) : '' ?></p>
            </div>
        </center>

    </div>
</body>
</html>