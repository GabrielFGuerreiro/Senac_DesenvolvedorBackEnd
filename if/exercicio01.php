<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num = $_POST["numInput"];
        echo $num > 0 ? "Número Positivo" : "Número Negativo";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite um Número Qualquer</h2>
        <form action="" method="post">
            <label for="numInput">Número</label>
            <input type="number" id="numInput" name="numInput" required>
            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>