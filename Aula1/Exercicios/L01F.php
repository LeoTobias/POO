<?php

/* 

Ler dois valores (inteiros, reais ou caracteres) para as variáveis A e B, e efetuar a troca dos valores de
forma que a variável A passe a possuir o valor da variável B e a variável B passe a possuir o valor da
variável A. Apresentar os valores trocados

*/

    if(!isset($_POST["valorA"])) $_POST["valorA"] = 0;
    if(!isset($_POST["valorB"])) $_POST["valorB"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";


    $a =           $_POST["valorA"];
    $b =           $_POST["valorB"];
    $novoA = 0;
    $novoB = 0;

    if($a != $b) {
        $novoA = $b;
        $novoB = $a;
    }


    if($_POST['oper'] == "limpar") {
        $a      = "";
        $b       = "";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trocando valores</title>
</head>
<body>
<form name="form2" action="L01F.php" method="post">
        <h1>Alterando os valores de A e B</h1>
        <input type="hidden" name="oper">
        <label for="valorA">Valor do A:</label>
        <input type="text" placeholder="Digite o valor de A" name="valorA" value = <?php echo $a; ?> ><br>
        <label for="valorA">Valor do B:</label>
        <input type="text" placeholder="Digite o valor de B" name="valorB" value = <?php echo $b; ?> ><br>
        <label for="vlmdia">Alteração realizada, ficou assim: <?php echo " Valor de A:{$novoA} e o valor de B: {$novoB}"; ?></label><br>
        <input type="submit" value="Trocar" \>
        <input type="button" value="Limpar" onclick = "form2.oper.value='limpar'; submit();" \>
    </form>
</body>
</html>