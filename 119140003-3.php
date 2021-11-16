<?php

    echo "Bilangan prima dari 1-50 : <br><br>";
    $start=1;
    $end=50;

    function prima($start,$end){
        for($i=$start;$i<=$end;$i++){
            $count=0;
            for($j=$start; $j<=$i; $j++){
                if($i % $j == 0){
                    $count++;
                }
            }
            if($count == 2){
                echo $i."<br>";
            }
        }
    }

    prima($start,$end);
?>