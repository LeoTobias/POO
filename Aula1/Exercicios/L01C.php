<?php
/*
Calcular e apresentar o valor do volume de uma lata de óleo, utilizando a fórmula:
Volume Raio ** Altura
*/

    if(!isset($_POST["raio"])) $_POST["raio"] = 0;
    if(!isset($_POST["altura"])) $_POST["altura"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";


    $raio   =           $_POST["raio"];
    $altura =           $_POST["altura"];
    $volume =           pow($raio, $altura);

    if($_POST['oper'] == "limpar") {
        $raio = "";
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
    <title>L01C</title>
</head>
<body>
<form name="form2" action="L01C.php" method="post">
    <h1>Volume de uma Lata de Óleo</h1>
    <input type="hidden" name="oper">
    <input type="number" placeholder="Digite o raio" name="raio" require value = <?php echo $raio; ?> ><br>
    <input type="number" placeholder="Digite à altura" name="altura" require value = <?php echo $altura; ?> ><br>
    <label for="vlmdia">O volume da lata é: <?php echo "{$volume}"; ?></label><br>
    <input type="submit" value="Calcular o volume" \>
    <input type="button" value="Novo Calculo" onclick = "form2.oper.value='limpar'; submit();" \>
</form>
</body>
</html>