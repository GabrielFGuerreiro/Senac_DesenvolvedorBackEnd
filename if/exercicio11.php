<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];
        $sexo = $_POST["sexoInput"];

        echo "Peso Ideal: " . (($sexo == "m") ? $num1 * 72.7 - 58 : $num1 * 62.1 - 44.7);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite a Altura e o Sexo</h2>
        <form action="" method="post">
            <label for="numInput1">Altura</label>
            <input type="number" id="numInput1" min="0" step="0.01" name="numInput1" required>

            <label for="sexoInput">Sexo</label>
            <select name="sexoInput" id="sexoInput" required>
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
            </select>

            <button type="submit">Calcular Peso Ideal</button>
        </form>  
    </div>
</body>
</html>