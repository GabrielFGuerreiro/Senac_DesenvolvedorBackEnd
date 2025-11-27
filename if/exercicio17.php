<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $result1 = $_POST["selectPerg1"];
        $result2 = $_POST["selectPerg2"];
        $result3 = $_POST["selectPerg3"];
        $result4 = $_POST["selectPerg4"];
        $result5 = $_POST["selectPerg5"];

        $dsClassificacao = 0;

        if($result1 == "s")
            $dsClassificacao++;
        if($result2 == "s")
            $dsClassificacao++;
        if($result3 == "s")
            $dsClassificacao++;
        if($result4 == "s")
            $dsClassificacao++;
        if($result5 == "s")
            $dsClassificacao++;

        echo "<div class='classPHP'>";
        if($dsClassificacao < 2)
            echo "Inocente";
        else if($dsClassificacao == 2)
            echo "Suspeita";
        else if($dsClassificacao == 3 || $dsClassificacao == 4)
            echo "Cúmplice";
        else
            echo "Assassino";
        echo "</div>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">    
        <h2>Responda as Perguntas sobre um Crime</h2>
        <form action="" method="post">
            <label for="selectPerg1">Telefonou para a vítima?</label>
            <select name="selectPerg1" id="selectPerg1" required>
                <option value="">Selecione</option>
                <option value="s">Sim</option>
                <option value="n">Não</option>
            </select>

            <label for="selectPerg2">Esteve no local do crime?</label>
            <select name="selectPerg2" id="selectPerg2" required>
                <option value="">Selecione</option>
                <option value="s">Sim</option>
                <option value="n">Não</option>
            </select>

            <label for="selectPerg3">Mora perto da vítima?</label>
            <select name="selectPerg3" id="selectPerg3" required>
                <option value="">Selecione</option>
                <option value="s">Sim</option>
                <option value="n">Não</option>
            </select>

            <label for="selectPerg4">Devia para a vítima?</label>
            <select name="selectPerg4" id="selectPerg4" required>
                <option value="">Selecione</option>
                <option value="s">Sim</option>
                <option value="n">Não</option>
            </select>

            <label for="selectPerg5">Já trabalhou com a vítima?</label>
            <select name="selectPerg5" id="selectPerg5" required>
                <option value="">Selecione</option>
                <option value="s">Sim</option>
                <option value="n">Não</option>
            </select>

            <button type="submit">Classificar Participação</button>
        </form>  
    </div>
</body>
</html>