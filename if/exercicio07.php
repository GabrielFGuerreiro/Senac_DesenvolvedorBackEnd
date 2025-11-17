<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];

        echo "Valor do Imposto: " . (($num1 <= 2000) ? "Isento" : $num1 * 0.275);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite o Salário</h2>
        <form action="" method="post">
            <label for="numInput1">Salário</label>
            <input type="number" id="numInput1" min="0" name="numInput1" required>

            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>