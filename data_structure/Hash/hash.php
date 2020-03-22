<?php


function topKFrequent($nums, $k) {
    //散列表实现，设计hash函数
    //定义散列表数组大小 装载因子
    $hash = [];
    $top = [];
    foreach($nums as $values){
        // echo $values;die;
        $index = sethash($values);
        $hash[$index][] = $values;
    }

    foreach ($hash as $val) {
        $top[$val][] = count($val);
    }
    return $hash;
}
//散列函数
function sethash($values){
    return $values*$values>>1;
}
$nums = [1,1,1,2,2,3];
$k = 2;
var_dump(topKFrequent($nums,$k));