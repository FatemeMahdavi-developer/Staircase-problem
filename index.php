<?php

function fibonacci($number){
    if($number==1) return 1;
    if($number==2) return 2;

    $a=1;
    $b=2;
    for($i=3;$i<=$number;$i++){
        $tem=bcadd($a,$b);
        $a=$b;  // 2 // 3
        $b=$tem;// 3 // 5
    }
    return $b;
}

echo fibonacci(1000);