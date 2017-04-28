<?php

for ($i = 1; $i <= 100; $i++) :
    ;
    if ($i/1):
        echo "{$i} <br>";
     endif;

endfor;

echo "<br>";

$i = 1;
while ($i <= 100) :

    if ($i/1){
        echo "{$i} <br>";
    } else "No number";

    $i++;
endwhile;

echo "<br>";

$a = max(10, 9, 8, 7);
$b = min(5,6,7,8,9);

if ($a > $b):

    echo $a;
endif ;

