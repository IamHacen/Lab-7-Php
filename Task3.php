<?php
    $number=9997;
    print "Number=".$number."<br>";
    $sum=0;
    while($number>0.9){
        $sum+=$number%10;
        $number/=10;
    }
    if($sum==34){
        print "Sum=".$sum."<br>"."it`s your lucky Day";
    }
?>