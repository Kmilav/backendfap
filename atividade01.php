<?php
$l1 = readline("digite o primeiro lado: \t");
$l2 = readline("digite o segundo lado: \t");
$l3 = readline("digite o terceiro lado: \t");


if (($l1 < $l2 + $l3) && ($l2 < $l1 + $l3) && ($l3 < $l2 + $l1)){
    if ($l1 == $l2 && $l2 == $l3){
        echo "equilátero\n";
    }
    elseif (($l1 == $l2) || ($l2 == $l3) || ($l1 == $l3) ){
        echo "isóceles\n"; 
    }
    else{
    echo "escaleno\n";
    }
}else{
echo "esses valores não formam um triângulo";
}
?>