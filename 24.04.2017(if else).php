<?php

$a = max(10, 9, 8, 7);
$b = min(5,6,7,8,9);

if ($a > $b){

    echo $a;
}       else {

    echo $b ;
}
echo "<br>";

$c = ($a < $b) ? $a : $b;
echo $c;

echo "<br>";

switch ($a){
    case 1: echo "No"; break;
    case 2: echo "No"; break;
    case 3: echo "No"; break;
    case 4: echo "No"; break;
    case 5: echo "No"; break;
    case 6: echo "No"; break;
    case 7: echo "No"; break;
    case 8: echo "No"; break;
    case 9: echo "No"; break;
    case 10: echo "Yes"; break;
    case 11: echo "No"; break;
    case 12: echo "No"; break;
}
