<?php

$n1 = 3;
$n2 = 2;
$n3 = 1;

$resultado=$n1+$n2+$n3;

if ($n1 > 10) { 
    echo ('<font color="blue">'.$resultado);
}
else if ($n2 < $n3) {
    echo ('<font color="green">'.$resultado);
}
else if ($n3 < $n1 and $n3 < $n2) {
    echo ('<font color="red">'.$resultado);
}

?>