<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $idade = $_POST["idadeInput"];
        echo $idade >= 18 ? "Maior de Idade" : "Menor de Idade";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Verifique sua Idade</h2>
        <form action="" method="post">
            <label for="idadeInput">Idade</label>
            <input type="number" id="idadeInput" name="idadeInput" min="0" required>
            <button type="submit">Verificar</button>
        </form>  
    </div>
</body>
</html>