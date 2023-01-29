<?php
$bill=cal_elc(20);
$bill=cal_elc(2);
function cal_elc($unit){
    $total=4.96;
    if($unit<15){
        $total+=($unit-5)*0.7124;
    }
    else {
        $total+=10*0.7124;
    }
    if($unit>=25){
        $total+=($unit-15)*0.8993;
    }
    else {
        $total+=10*0.8993;
    }
    echo"total={$total}<br>";
    return $total;
}
?>