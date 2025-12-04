<?php
//Crie um programa que use while para mostrar todos os números que são múltiplos de 3 no intervalo de 1 a 30. Apenas os números divisíveis por 3 devem ser exibidos.
$num = 0;
while ($num <= 30) {
    if($num % 3 == 0)
        echo $num . "<br>";
    $num++;
}

?>