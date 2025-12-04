<?php
//Crie um programa que utilize while para somar todos os números de 1 até 100. Durante o laço, o programa deve acumular o valor total em uma variável e ao final exibir o resultado.
$num = 1;
$soma = 0;

while ($num <= 100) {
    $soma += $num;
    $num++;
}
echo "Soma: $soma";

?>