<?php

/*

Efetuar o cálculo e a apresentação do valor de uma prestação em atraso, utilizando a fórmula
PRESTACAO ← VALOR + (VALOR * TAXA/100) * TEMPO).

*/

if(!isset($_POST["valor"])) $_POST["valor"] = 0;
if(!isset($_POST["taxa"])) $_POST["taxa"] = 0;
if(!isset($_POST["tempo"])) $_POST["tempo"] = 0;
if(!isset($_POST["prestacao"])) $_POST["prestacao"] = 0;
if(!isset($_POST["oper"])) $_POST["oper"] = "";


$valor      =           $_POST["valor"];
$taxa       =           $_POST["taxa"];
$tempo      =           $_POST["tempo"];
$prestacao  =           $valor + ($valor * $taxa / 100) * $tempo;

if($_POST['oper'] == "limpar") {
    $valor      = "";
    $taxa       = "";
    $tempo      = "";
    $prestacao  = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Prestação em Atraso</title>
</head>
<body>
    <form name="form2" action="L01E.php" method="post">
        <h1>Prestação em Atraso</h1>
        <input type="hidden" name="oper">
        <input type="number" placeholder="Digite o valor da prestação" name="valor" value = <?php echo $valor; ?> ><br>
        <input type="number" placeholder="Digite o valor da taxa" name="taxa" value = <?php echo $taxa; ?> ><br>
        <input type="number" placeholder="Digite o tempo" name="tempo" value = <?php echo $tempo; ?> ><br>
        <label for="vlmdia">Prestação: <?php echo "{$prestacao} R$"; ?></label><br>
        <input type="submit" value="Calcular" \>
        <input type="button" value="Novo Calculo" onclick = "form2.oper.value='limpar'; submit();" \>
    </form>
</body>
</html>