<?php
    if(!isset($_POST["nome"])) $_POST["nome"] = "";
    if(!isset($_POST["nota1"])) $_POST["nota1"] = 0;
    if(!isset($_POST["nota2"])) $_POST["nota2"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";

    $nome   =           $_POST["nome"];
    $nota1  = (double)  $_POST["nota1"];
    $nota2  = (double)  $_POST["nota2"];
    $media   = ($nota1 + $nota2) / 2;

    if($_POST['oper'] == "limpar") {
        $nome  = "";
        $nota1 = "";
        $nota2 = "";
        $media = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média - POST</title>
</head>
<body>
    <form name="form2" action="script2.php" method="post">
        <h1>Cálculo da Média Aritmética</h1>
        <input type="hidden" name="oper">
        <input type="text" placeholder="Nome do aluno" name="nome" value = <?php echo $nome; ?> ><br>
        <input type="text"  name="nota1" placeholder="Nota 1" value = <?php echo $nota1; ?> ><br>
        <input type="text"  name="nota2" placeholder="Nota 2" value = <?php echo $nota2; ?> ><br>
        <label for="vlmdia">Valor da Média: <?php echo "{$media}"; ?></label><br>
        <input type="submit" value="Calcular" \>
        <input type="button" value="Nova Média" onclick = "form2.oper.value='limpar'; submit();" \>
    </form>
</body>
</html>