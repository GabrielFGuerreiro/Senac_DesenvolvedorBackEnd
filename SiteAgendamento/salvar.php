<?php
$nome = $_POST["nomeInput"];
$tel = $_POST["telefoneInput"];
$servico = $_POST["servicoInput"];
$data = $_POST["dataInput"];
$hora = $_POST["horaInput"];

$linha = "$nome | $tel | $servico | $data | $hora".PHP_EOL;
file_put_contents("agendamentos.txt", $linha, FILE_APPEND);

echo' <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Agendamento</h2>

        <a class="botao-lista" href="index.php">Voltar ao Formulário</a>
        <a class="botao-lista" href="listar.php">Mostrar Agendamento</a>

    </div>
</body>
</html>';
?>