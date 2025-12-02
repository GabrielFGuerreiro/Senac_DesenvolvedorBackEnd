<?php
//Faça um programa que use while para mostrar somente os números pares no intervalo de 1 a 20. O programa deve verificar, dentro do laço, se o número atual é par antes de exibi-lo.

$numPar = 2;

while ($numPar <= 20) {
    if($numPar % 2 == 0)
        echo $numPar . "<br>";
    $numPar++;
}


?>