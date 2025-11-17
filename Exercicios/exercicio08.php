<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <h1>Exercício 08</h1>
    <form action="" method="post">
        <label for="num1">Número:</label>
        <input type="number" name="num1" required><br><br>

        <input type="submit" value="Mostrar">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["num1"];

        echo "<h3>Sucessor:" . $num1 + 1  . "<br>";
        echo "<h3>Antecessor:" . $num1 - 1  . "<br>";

    }
    ?>

</body>
</html>

