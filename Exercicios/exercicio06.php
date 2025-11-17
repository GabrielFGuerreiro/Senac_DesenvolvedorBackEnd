<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <h1>Exercício 06</h1>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "<h3>Soma: " . $num1 + $num2 . "<br>";
        echo "<h3>Subtração: " . $num1 - $num2 . "<br>";
        echo "<h3>Multiplicação: " . $num1 * $num2 . "<br>";
        echo "<h3>Divisão: " . (($num2 == "0") ? "ERRO" : $num1 / $num2) . "<br>";
    }
    ?>

</body>
</html>

