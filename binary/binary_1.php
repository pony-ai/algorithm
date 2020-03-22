<?php
/**二分查找
 * @param array $numbers
 * @param $find
 * @return mixed
 * @Author ponyxiao
 * @Date 2020/2/12 12:23
 */
$start = microtime(true);
function binarySearch(array $numbers,$find){
    $low = 0;
    $high = count($numbers)-1;
    return search($numbers,$low,$high,$find);
}

function search(array $numbers,$low,$high,$find){
    if($low > $high){
        return -1;
    }
    //$mid等于数组起始地址加上末尾地址-起始地址向右移1位的值
    $mid = $low + (($high-$low) >> 1);
    if($numbers[$mid] > $find){
        return search($numbers,$low,$mid-1,$find);
    }elseif($numbers[$mid] < $find){
        return search($numbers,$mid+1,$high,$find);
    }else{
        return $mid;
    }
}
function squareRoot($number)
{
    if ($number < 0) {
        return  -1;
    } elseif ($number < 1) {
        $min = $number;
        $max = 1;
    } else {
        $min = 1;
        $max = $number;
    }
    $mid = $min + ($max - $min) / 2;
    while (getDecimalPlaces($mid) < 6) {
        $square = $mid * $mid;
        if ($square > $number) {
            $max = $mid;
        } elseif ($square == $number) {
            return $mid;
        } else {
            $min = $mid;
        }
        $mid = $min + ($max - $min) / 2;
    }
    return $mid;
}

/**
 * @param $number
 * @return int
 * @Author ponyxiao
 * @Date 2020/2/12 13:48
 */
function getDecimalPlaces($number)
{
    $temp = explode('.', $number);
    if (isset($temp[1])) {
        return strlen($temp[1]);
    }
    return 0;
}

//测试结果
$numbers = [1,2,3,3,4,5,6,7];
$find = 2;
$result = binarySearch($numbers,$find);
$squareRoot = squareRoot(4);
$end = microtime(true);
var_dump($squareRoot);
print_r(['result'=>$result,'exec_time'=>(($end-$start)*1000).'ms']);
