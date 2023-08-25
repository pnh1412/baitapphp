<?php
    echo("\n-------CHUONG TRINH IN BANG CUU CHUONG-------\n");
    for ($i = 1; $i <= 10; $i++){
        echo "</br>";
        echo("\n--------BANG NHAN $i--------\n");
        echo "</br>";
        for ($j= 1; $j <= 10; $j++){
            echo "$i * $j = ";
            echo $i * $j;
            echo "</br>";
        }
    }
?>
