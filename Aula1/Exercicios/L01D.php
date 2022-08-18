<?php
/*

Efetuar o cálculo da quantidade de litros de combustível gasta em uma viagem, utilizando um
automóvel que faz 12 Km por litro. Para obter o cálculo, o usuário deve fornecer o tempo gasto
(TEMPO) e a velocidade média (VELOCIDADE) durante a viagem. Desta forma, será possível obter a
distância percorrida com a fórmula DISTANCIA ← TEMPO * VELOCIDADE. Possuindo o valor da
distância, basta calcular a quantidade de litros de combustível utilizada na viagem com a fórmula
LITROS_USADOS ← DISTANCIA / 12. Ao final, o programa deve apresentar os valores da velocidade
média (VELOCIDADE), tempo gasto na viagem (TEMPO), a distancia percorrida (DISTANCIA) e a
quantidade de litros (LITROS_USADOS) utilizada na viagem.

*/

    if(!isset($_POST["tempo"])) $_POST["tempo"] = 0;
    if(!isset($_POST["velocidade"])) $_POST["velocidade"] = 0;
    if(!isset($_POST["oper"])) $_POST["oper"] = "";


    $tempo          =           $_POST["tempo"];
    $velocidade     =           $_POST["velocidade"];
    $distancia      =           $tempo * $velocidade;
    $litrosUsados   =           $distancia / 12;

    if($_POST['oper'] == "limpar") {
        $tempo = "";
        $velocidade = "";
        $distancia = "";
        $litrosUsados = "";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L01D</title>
</head>
<body>
    <form name="form2" action="L01D.php" method="post">
        <h1></h1>
        <input type="hidden" name="oper">
        <input type="number" placeholder="Digite o tempo gasto na viagem" name="tempo" value = <?php echo $tempo; ?> ><br>
        <input type="number" placeholder="Digite à velocidade" name="velocidade" value = <?php echo $velocidade; ?> ><br>
        <label for="vlmdia">Velocidade média: <?php echo "{$velocidade}"; ?></label><br>
        <label for="vlmdia">Tempo gasto na viagem: <?php echo "{$tempo}"; ?></label><br>
        <label for="vlmdia">Distância Percorrida: <?php echo "{$distancia}"; ?></label><br>
        <label for="vlmdia">Litros Gastos: <?php echo "{$litrosUsados}"; ?></label><br>
        <input type="submit" value="Calcular as médias" \>
        <input type="button" value="Novo Calculo" onclick = "form2.oper.value='limpar'; submit();" \>
    </form>
</body>
</html>