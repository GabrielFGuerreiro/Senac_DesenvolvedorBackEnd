<?php
//Crie um programa que utilize while para exibir todos os números ímpares no intervalo de 1 a 15. O programa deve verificar se o número atual é ímpar antes de mostrá-lo.
$numImpar = 1;
while ($numImpar <= 15) {
    if($numImpar % 2 != 0)
        echo "$numImpar<br>";
    $numImpar++;
}
?>