<?php
    require_once("../classes/imc.class.php");

    error_reporting(1);

    if(isset($_POST['calcular'])){
    $peso   = $_POST['peso'];
    $altura = $_POST['altura'];

    $calcIMC = new IMC();
    $imc     = $calcIMC->calculoIMC($peso, $altura);
    $status  = $calcIMC->statusIMC($imc);
    }


    if($_POST['oper'] == "limpar") {
        $peso  = "";
        $altura = "";
        $imc = "";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" name="form3">
        <input type='hidden' name="oper">
            <table id="estilo">
                <thead>
                    <tr>
                        <th id="peso">Peso</th>
                        <th id="altura">Altura</th>
                        <th id="imcc">IMC</th>
                        <th id="btn"><input type="submit" name="calcular" value="Calcular"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="peso"><input type="number" name="peso"  value="<?= $peso ?? ''?>" require></td>
                        <td class="altura"><input type="number" name="altura"  value="<?= $altura ?? ''?>" require></td>
                        <td rowspan="2" class="imcc"><?= $imc ?? '--'?></td>
                        <td class="btn"><input type="button" value="Novo Calculo" onclick="form3.oper.value='limpar'; submit();"></td>
                    </tr>
                    <tr>
                        <td class="peso"> <img src="<?= $status[1] ?>" width="80"></td>
                        <td class="altura">Status da Situação: <?=  $status[0] ?? '--'?></td>
                        <td colspan="2" class="btn"> <img src="<?= $status[2] ?>" width="80"></td>
                    </tr> 
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>