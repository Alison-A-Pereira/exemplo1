<?php
//$nome = $_GET ['nome];
$nome = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST ['nome'];
    $periodo = $_POST['periodo'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Aplicação</title>
</head>
<body>
    <h1>
    <?php if($periodo == 'm'):?>
    Bom dia <i> <?= $nome ?> </i>
    <?php elseif($periodo == 't'): ?>
    Boa Tarde <i> <?= $nome ?> </i>
    <?php elseif($periodo == 'n'): ?>
    Boa Noite <i> <?= $nome ?> </i>
    <?php endif ?>
    </h1>


    <form action="/index.php" method="POST">
        <label for="periodo">Selecione o Período</label>
        <select name="periodo">
            <option value="m">Manhã</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select> 
        <br>
    <label for="nome">Digite seu nome</label>
    <input type="text" name="nome" />
    <button type="submit">Enviar</button>
    </form>
</body>
</html>