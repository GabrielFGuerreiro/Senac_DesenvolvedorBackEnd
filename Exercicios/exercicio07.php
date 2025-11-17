<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <h1>Exercício 07</h1>
    <form action="" method="post">
        <label for="salario">Salário:</label>
        <input type="number" name="salario" required><br><br>

        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $valSalario = $_POST["salario"];

        echo "<h3>Salário Atualizado (+30%): R$" . $valSalario * 1.3 . "<br>";

    }
    ?>

</body>
</html>

