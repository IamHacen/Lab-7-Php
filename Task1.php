<?php
    for($i=1; $i<=50; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            echo "StartStruck<br>";
        }else if($i % 3 == 0){
            echo "Star<br>";
        }else if($i % 5 == 0){
            echo "Struck<br>";
        }
    }
?>