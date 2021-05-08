<?php
$arr1 = [12,32,54,65,23];
$arr2 = [32,2,7,4,5,86];
$arr3 = [];
function arrayCat($arr1,$arr2,$arr3) {
    for ($i = 0; $i < count($arr1); $i++) {
        $arr3[$i] = $arr1[$i];
    }
    for ($i = 0; $i < count($arr2); $i++) {
        $arr3[count($arr3)] = $arr2[$i];
    }
    return $arr3;
}
var_dump(arrayCat($arr1, $arr2, $arr3));