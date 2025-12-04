<?php
//Calcule a soma apenas dos números pares usando for.
$soma = 0;
for ($i = 1; $i <= 20; $i++) { 
    if($i % 2 == 0)
        $soma += $i;
}
echo "Soma: $soma";
?>