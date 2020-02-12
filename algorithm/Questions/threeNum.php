<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        if( !count($nums) ) return [];
        sort($nums);
        // var_dump($nums);die;
        $ret = [];
        for($i = 0;$i < count($nums)-2;$i++){
            if($i>0 && $nums[$i] == $nums[$i-1]) continue;
            $left = $i+1;
            $right = count($nums)-1;
            // print($left."\n".$right);die;
            //因为$nums[$left] + $nums[$right] + $nums[$i] = 0
            $need = 0 - $nums[$i]; 
            while( $left < $right){
                if($nums[$left] + $nums[$right] == $need){
                    array_push($ret,[$nums[$i],$nums[$left],$nums[$right]]);
                    while( $left < $right && $nums[$left] == $nums[$left+1]) $left++;                    
                    while( $left < $right && $nums[$right] == $nums[$right-1]) $right--;
                    $left++;
                    $right--;
                }else if($nums[$left] + $nums[$right] > $need){
                    $right--;
                }else{
                    $left++;
                }
            }
        }
        return $ret;
    }
}
$arr = [3,6,5,7,9,-4,1,5,-1];
$test = new Solution();
print_r($test->threeSum($arr));