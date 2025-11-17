<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <h1>Exercício 04</h1>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br><br>

        <input type="submit" value="Mostrar">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        echo "<h3>Menor Valor: ". min($num1, $num2, $num3) . "</h3>";
    }
    ?>

</body>
</html>

