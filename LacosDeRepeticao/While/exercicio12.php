<?php
//Desenvolva um programa que utilize while para somar apenas os números pares no intervalo de 1 a 20. No final, o programa deve mostrar o valor total da soma.
$cont = 0;
$soma = 0;

while ($cont <= 20) {
    if($cont % 2 == 0)
        $soma += $cont;
    $cont++;
}
echo $soma;

?>