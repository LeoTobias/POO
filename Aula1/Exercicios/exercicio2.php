<?php
    if(!isset($_POST["fahrenheit"])) $_POST["fahrenheit"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";


    $f      =           $_POST["fahrenheit"];
    $c   =  ($f - 32) * (5 / 9) ;

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
    <title>Conversão de °F para °C</title>
</head>
<body>
    <form name="form2" action="exercicio1.php" method="post">
        <h1>Convertendo Graus fahrenheit</h1>
        <input type="hidden" name="oper">
        <input type="number" placeholder="Digite a temperatura" name="fahrenheit" value = <?php echo $f; ?> ><br>
        <label for="vlmdia">Conversão: <?php echo "{$c}"; ?></label><br>
        <input type="submit" value="Converter" \>
        <input type="button" value="Novo Calculo" onclick = "form2.oper.value='limpar'; submit();" \>
    </form>
</body>
</html>