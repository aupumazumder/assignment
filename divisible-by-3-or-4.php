<?php
    //Writen By: Apuorba //
    for($k = 1; $k < 500; $k++){
        if ($k == 12) continue;
        if ($k == 24) continue;
        if ($k == 36) continue;
        if ($k == 48) continue;
        if($k % 3 == 0 && $k % 4 == 0) break;
        echo $k. "<hr>";  
    }
?>