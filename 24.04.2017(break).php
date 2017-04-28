<?php
for ($i = 200; $i <= 400; $i++) {
    echo  "Check for {$i} ... ";
    if ($i % 1 == 0) {
        echo $i;
        break;
    }

}


