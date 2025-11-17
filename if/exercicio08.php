<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];

        echo ($num1 % 10 == 0) ? "O Último Dígito é 0" : "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite um Número Qualquer</h2>
        <form action="" method="post">
            <label for="numInput1">Número</label>
            <input type="number" id="numInput1" min="0" name="numInput1" required>

            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>