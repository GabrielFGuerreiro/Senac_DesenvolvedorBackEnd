<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $combustivel = $_POST["combustivel"];
        $qntLitros = $_POST["qntLitros"];
        $vlGasolina = 4.63;
        $vlAlcool = 4.13;

        echo "<div class='classPHP'>";
        echo "Valor a ser Pago: ";
        if($combustivel == "g")
            if($qntLitros <= 20)
                echo ($qntLitros*$vlGasolina)*(($qntLitros*4)/100);
            else
                echo ($qntLitros*$vlGasolina)*(($qntLitros*6)/100);
        else
            if($qntLitros <= 20)
                echo ($qntLitros*$vlAlcool)*(($qntLitros*3)/100);
            else
                echo ($qntLitros*$vlAlcool)*(($qntLitros*5)/100);
        echo "</div>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite a Quantidade de Litros Vendidos e o Tipo do Combustível</h2>
        <form action="" method="post">
            <label>Valor da Gasolina (R$)</label>
            <input type="text" value="4.63" name="vlGasolina" disabled>

            <label>Valor do Álcool (R$)</label>
            <input type="text" value="4.13" name="vlAlcool" disabled>

            <label for="combustivel">Combustível</label>
            <select name="combustivel" id="combustivel" required>
                <option value="">Selecione</option>
                <option value="g">Gasolina</option>
                <option value="a">Álcool</option>
            </select>

            <label for="qntLitros">Quantidade de Litros Vendidos</label>
            <input type="number" id="qntLitros" valeu="" min="0" step="0.01" name="qntLitros" required>

            <button type="submit">Calcular Valor</button>
        </form>  
    </div>
</body>
</html>