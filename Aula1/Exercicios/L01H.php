<?php

/*

Elaborar um programa que calcule e apresente o volume de uma caixa retangular, por meio da fórmula
VOLUME ← COMPRIMENTO * LARGURA * ALTURA.

*/

    if(!isset($_POST["comprimento"])) $_POST["comprimento"] = 0;
    if(!isset($_POST["largura"])) $_POST["largura"] = 0;
    if(!isset($_POST["altura"])) $_POST["altura"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";


    $comprimento =           $_POST["comprimento"];
    $largura     =           $_POST["largura"];
    $altura      =           $_POST["altura"];
    $volume      =           $comprimento * $largura * $altura;

    if($_POST['oper'] == "limpar") {
        $comprimento = "";
        $largura = "";
        $altura = "";
        $volume = "";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L01H</title>
</head>
<body>
<form name="form2" action="L01H.php" method="post">
    <h1>Volume de uma Caixa Retangular</h1>
    <input type="hidden" name="oper">
    <input type="number" placeholder="Digite o comprimento" name="comprimento" value = <?php echo $comprimento; ?> ><br>
    <input type="number" placeholder="Digite à largura" name="largura" value = <?php echo $largura; ?> ><br>
    <input type="number" placeholder="Digite à altura" name="altura" value = <?php echo $altura; ?> ><br>
    <label for="vlmdia">O volume da caixa é: <?php echo "{$volume}"; ?></label><br>
    <input type="submit" value="Calcular o volume" \>
    <input type="button" value="Novo Calculo" onclick = "form2.oper.value='limpar'; submit();" \>
</form>
</body>
</html>