<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $idade = $_POST["numInput1"];
        $val = $_POST["numInput2"];

        echo $idade < 12 ? $val/2 : (($idade <= 59) ? $val : $val*0.7);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite a Idade e o Valor do Ingresso</h2>
        <form action="" method="post">
            <label for="numInput1">Idade</label>
            <input type="number" id="numInput1" min="1" step="1" name="numInput1" required>

            <label for="numInput2">Valor</label>
            <input type="number" id="numInput2" min="1" step="1" name="numInput2" required>

            <button type="submit">Calcular</button>
        </form>  
    </div>
</body>
</html>