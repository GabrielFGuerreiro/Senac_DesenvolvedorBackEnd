<?php
//Mostre os 10 primeiros números dessa sequência (dobrando o valor a cada passo). Exemplo: 2, 4, 8, 16...
$num = 2;
for ($i=1; $i <= 10; $i++) { 
    echo $num . "<br>";
    $num *= 2;
}
?>