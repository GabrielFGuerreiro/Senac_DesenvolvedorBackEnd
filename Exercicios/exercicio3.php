<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <form action="" method="post">
        <label for="valProd">Valor do Produto:</label>
        <input type="number" name="valProd" required><br><br>

        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $valorProd = $_POST["valProd"];
        echo "<h3>Valor do Produto:$valorProd <br>Valor do Produto acredido de 20%: " . $valorProd*1.2 . "</h3>";
    }
    ?>

</body>
</html>

