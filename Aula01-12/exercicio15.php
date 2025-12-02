<?php
/*Crie um programa que calcule o resultado de 3 elevado à 4 usando um laço while.
O programa deve multiplicar o número 3 por ele mesmo repetidas vezes até completar as 4 multiplicações, simulando o cálculo da potência.*/
$cont = 1;
$result = 1;
while ($cont <= 4) {
    $result *= 3;
    $cont++;
}
echo $result;

?>