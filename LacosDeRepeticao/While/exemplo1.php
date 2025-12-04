<?php
//--[WHILE]--\\
/*
Estrutura:
    Condição: executa quando for verdadeiro;
    Contador: incrementa ou decrementa;
    while(condição)
    {
        execução/processamento quando for verdadeiro
        contador ++ ou --;
    }

*/
$cont = 0;
while($cont <= 10)
{
    echo "O valor é: $cont<br>";
    $cont++;
}
?>