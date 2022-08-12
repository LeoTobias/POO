<?php 
if( !isset( $_GET['Nome']) ) {$_GET['Nome'] = ""; }
if( !isset( $_GET['cpf']) ) {$_GET['cpf'] = ""; }
$nome = $_GET['Nome'];
$cpf = $_GET['cpf'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro Script PHP</title>
</head>
<body>
    <form action="script1.php" method="get">
        <label for="nome">Nome:</label><br>
        <input type="text" name="Nome" value="<?php echo "{$nome}"; ?>" ><br><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" placeholder="123456789-99" value="<?php echo "{$cpf}"; ?>"><br>
        <input type="submit" value="Enviar">
        <br><br><br>
        <?php echo "Nome: {$nome} &nbsp; &nbsp; CPF: {$cpf}";?>
    </form>
</body>
</html>