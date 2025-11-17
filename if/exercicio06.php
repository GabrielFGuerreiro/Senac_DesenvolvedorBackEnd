<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];
        $num2 = $_POST["numInput2"];
        $num3= $_POST["numInput3"];
        echo "Maior número: " .  max($num1, $num2, $num3);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite 3 Números Quaisquer</h2>
        <form action="" method="post">
            <label for="numInput1">Número 1</label>
            <input type="number" id="numInput1" name="numInput1" required>

            <label for="numInput2">Número 2</label>
            <input type="number" id="numInput2" name="numInput2" required>

            <label for="numInput3">Número 3</label>
            <input type="number" id="numInput3" name="numInput3" required>
            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>