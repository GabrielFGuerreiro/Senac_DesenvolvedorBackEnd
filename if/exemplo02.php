<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Média</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
 
<div class="container">
    <h2>Verifique sua Média</h2>
 
    <form method="POST">
        <label for="nota1">Digite a primeira nota:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required>
 
        <label for="nota2">Digite a segunda nota:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required>
 
        <button type="submit">Calcular Média</button>
    </form>
 
 
</div>
 
</body>
</html>
 

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $media = ($_POST["nota1"] + $_POST["nota2"]) / 2;
        echo ($media >= 7) ? "Aprovado" : "Reprovado";
        echo "<br>Média: $media";
    }

?>