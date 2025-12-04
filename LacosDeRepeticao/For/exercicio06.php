<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Digite um número:</label>
        <input type="number" name="num">
        <button type="submit">Verificar</button>
    </form>
</body>
</html>

<?php
//Peça um número e use for para verificar se ele é primo.
$num = $_POST["num"];
$qntDivisores = 0;

for ($i = $num; $i >= 1; $i--) { 
    if($num % $i == 0)
        $qntDivisores++;
}

if($qntDivisores == 2)
    echo "É primo";
else
    echo "Não é primo";
?>

