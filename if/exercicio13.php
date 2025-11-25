<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];
        $num2 = $_POST["numInput2"];
        $num3 = $_POST["numInput3"];

        if($num1 != $num2 && $num1 != $num3 && $num2 != $num3)         
            echo "Escaleno";        
        else if($num1 == $num2 && $num1 == $num3 && $num2 == $num3)
            echo "Equilátero";
        else
            echo "isóceles";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite os Lados</h2>
        <form action="" method="post">
            <label for="numInput1">Lado 1</label>
            <input type="number" id="numInput1" min="0" step="0.01" name="numInput1" required>

            <label for="numInput2">Lado 2</label>
            <input type="number" id="numInput2" min="0" step="0.01" name="numInput2" required>

            <label for="numInput3">Lado 3</label>
            <input type="number" id="numInput3" min="0" step="0.01" name="numInput3" required>

            <button type="submit">Classificar</button>
        </form>  
    </div>
</body>
</html>