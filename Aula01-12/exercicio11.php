<?php
/*Crie um programa usando while em que o contador começa representando o código da letra A (65 na tabela ASCII).
A cada repetição, o código deve ser convertido para letra e exibido, até chegar à letra J.*/
$cont = 65;
while ($cont <= 74) {
    echo chr($cont) . "<br>";
    $cont++;
}
?>