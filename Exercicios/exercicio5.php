<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <h1>Exercício 05</h1>
    <form action="" method="post">
        <label for="raio">Raio:</label>
        <input type="number" name="raio" required><br><br>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" required><br><br>

        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $raio = $_POST["raio"];
        $altura = $_POST["altura"];
        $volume = 3.14 * pow($raio, 2) * $altura;
        echo "<h3>Volume: $volume</h3>";
    }
    ?>

</body>
</html>

