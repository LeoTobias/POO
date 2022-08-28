<?php
/*
Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de
conversão é F ← (9 * C + 160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius
*/

    if(!isset($_POST["celsius"])) $_POST["celsius"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";


    $c      =           $_POST["celsius"];
    $f      = ( 9 * $c + 160) / 5;

    if($_POST['oper'] == "limpar") {
        $c  = "";
        $f = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de °C para °F</title>
</head>
<body>
    <form name="form2" action="L01A.php" method="post">
        <h1>Convertendo Graus Celsius</h1>
        <input type="hidden" name="oper">
        <input type="number" placeholder="Digite a temperatura" name="celsius" value = <?php echo $c; ?> ><br>
        <label for="vlmdia">Conversão: <?php echo "{$f}° Fahrenheit"; ?></label><br>
        <input type="submit" value="Converter" \>
        <input type="button" value="Novo Calculo" onclick = "form2.oper.value='limpar'; submit();" \>
    </form>
</body>
</html>