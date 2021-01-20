<?php
    // Writen By: Apuorba //
    $mark = 50;
    $name = "Apu";
    $rel = ""; //to find out the gender//

    if ($name == "Rafia" || $name == "Aditi" || $name == "Tarannam" || $name == "Ruma"|| $name == "Faria" ) {
        $rel = "apu";
    }else{
        $rel = "vaiya";
    }

    if ($mark >= 33) {
        echo "$name $rel You have passed in the exam";
    }else{
        echo "$name $rel You have not passed in the exam";
    }
?>