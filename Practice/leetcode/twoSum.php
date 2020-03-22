<?php
function twoSum($nums, $target) {
    $nums_c = $nums;
    sort($nums);
    $length = count($nums);
    $l = 0;
    $r = $length-1;
    $result = [];
    while($r>$l){
        if($nums[$l]+$nums[$r]==$target){
            break;
        }
        if($nums[$l]+$nums[$r]>$target){
            --$r;
        }else{
            ++$l;
        }
    }
    for($i=0;$i<$length;$i++){
        if($nums_c[$i]==$nums[$l]||$nums_c[$i]==$nums[$r]) {
            $result[] = $i;
        }
    }
    return $result;
}
$arr = [3,2,4];
twoSum($arr,6);