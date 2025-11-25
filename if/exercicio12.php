<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["numInput1"];
        $num2 = $_POST["numInput2"];
        $num3 = $_POST["numInput3"];
        $num4 = $_POST["numInput4"];
        $num5 = $_POST["numInput5"];
        $qntLados = $_POST["qntLados"];
        $area = 0;

        if(!empty($qntLados))
        {
            echo "<div class='classPHP'>";
            if($qntLados == 3)
            {
                $area = $num1 + $num2 + $num3;
                $area = sqrt(($area-$num1) * ($area-$num2) * ($area-$num3));
                echo "Área do Triângulo: " .number_format($area, 2) . "";
            }
            else if($qntLados == 4)
            {
                if(max($num1, $num2, $num3, $num4) != min($num1, $num2, $num3, $num4))                
                    echo "Os lados do quadrado precisam ser iguais!";                
                else
                    echo "Área do Quadrado: " . $num1 * $num2;
            }
            else if($qntLados == 5)            
                echo "PENTÁGONO";            
            else if($qntLados < 3)            
                echo "Não é um polígono";
            else
                echo "Polígono não identificado";
            echo "</div>";
        }            
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Digite os Lados</h2>
        <form action="" method="post">
            <label for="qntLados">Quantidade de Lados</label>
            <input type="number" id="qntLados" step="1" name="qntLados" oninput="MostraInputsLados()" required>

            <div style="display:none" id="divNum1">
                <label for="numInput1">Lado 1</label>
                <input type="number" id="numInput1" valeu="" min="0" step="0.01" name="numInput1">
            </div>  

            <div style="display:none" id="divNum2">
                <label for="numInput2">Lado 2</label>
                <input type="number" id="numInput2" valeu="" min="0" step="0.01" name="numInput2">
            </div>  

            <div style="display:none" id="divNum3">
                <label for="numInput3">Lado 3</label>
                <input type="number" id="numInput3" valeu="" min="0" step="0.01" name="numInput3">
            </div>  

            <div style="display:none" id="divNum4">
                <label for="numInput4">Lado 4</label>
                <input type="number" id="numInput4" valeu="" min="0" step="0.01" name="numInput4">
            </div>  

            <div style="display:none" id="divNum5">
                <label for="numInput5">Lado 5</label>
                <input type="number" id="numInput5" valeu="" min="0" step="0.01" name="numInput5">
            </div>  

            <button type="submit">Calcular Área</button>
        </form>  
    </div>
</body>
</html>


<script>

    function MostraInputsLados() {        
        var qnt = document.getElementById('qntLados').value;    
        for (let i = 1; i <= qnt; i++) {
            var divInput = document.getElementById(`divNum${i}`);
            if(divInput != null)
                divInput.style.display = "block";
        }
    
        for (let i = 5; i > qnt; i--) {                
            var divInput = document.getElementById(`divNum${i}`);
            if(divInput != null)                
                divInput.style.display = "none";            
        }        
    }
</script>