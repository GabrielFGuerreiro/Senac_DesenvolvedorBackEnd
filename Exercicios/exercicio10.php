<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <h1>Exercício 10</h1>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" step="any" required><br><br>

        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["num1"];

        echo "<h3>Terça Parte:" . $num1 / 3  . "<br>";
    }
    ?>

</body>
</html>

