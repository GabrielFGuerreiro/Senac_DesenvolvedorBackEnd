<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];
        $tipo = $_POST["tipoViagem"];

        echo "Valor da Viagem: " . (($tipo == "c") ? ($num1 * 0.5) : ($num1 * 0.35));
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite A Distância e o Tipo da Viagem</h2>
        <form action="" method="post">
            <label for="numInput1">Distância</label>
            <input type="number" id="numInput1" min="0" name="numInput1" required>

            <label for="tipoViagem">Tipo da Viagem</label>
            <select name="tipoViagem" id="tipoViagem">
                <option value="c">Curta</option>
                <option value="l">Longa</option>
            </select>

            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>