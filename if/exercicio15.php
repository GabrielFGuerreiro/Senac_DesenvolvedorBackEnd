<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $salario = $_POST["numInput1"];

        if($salario != 0)
        {
            echo "<div class='classPHP'>Salário antes do ajuste: $salario";
            
            if($salario <=  280)        
                echo "<br>Percentual de aumento: 20%" . 
            "<br>Valor do aumento: " . $salario*0.2 .
            "<br>Novo salário: " . $salario*1.2;
            
            else if($salario <= 700)
                echo "<br>Percentual de aumento: 15%" . 
            "<br>Valor do aumento: " . $salario*0.15 .
            "<br>Novo salário: " . $salario*1.15;
            
            else if($salario < 1500)
                echo "<br>Percentual de aumento: 10%" . 
            "<br>Valor do aumento: " . $salario*0.1 .
            "<br>Novo salário: " . $salario*1.1;
            else
                echo "<br>Percentual de aumento: 5%" . 
            "<br>Valor do aumento: " . $salario*0.05 .
            "<br>Novo salário: " . $salario*1.05;
            
            echo "</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite o Salário</h2>
        <form action="" method="post">
            <label for="numInput1">Salário</label>
            <input type="number" id="numInput1" min="0" value="0" step="1" name="numInput1" required>

            <button type="submit">Calcular</button>
        </form>  
    </div>
</body>
</html>