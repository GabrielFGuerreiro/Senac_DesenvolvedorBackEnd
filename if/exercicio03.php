<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num = $_POST["numInput"];
        echo ($num > 100) ? "Você ganhou um desconto!" : "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite o Valor da Compra</h2>
        <form action="" method="post">
            <label for="numInput">Valor</label>
            <input type="number" id="numInput" min="0" name="numInput" required>
            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>