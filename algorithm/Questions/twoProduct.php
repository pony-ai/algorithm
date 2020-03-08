<?php
/*输入一个递增排序的数组nums和一个数字target (数组nums中的数字和target的数值均为正整数)，
在数组中查找两个数，使得它们的乘积正好是target。如果有多对数字的乘积等于target，输出全部组合。
要求: 要考虑时间复杂度和空间复杂度
如果数组中不存在目标值，返回 [-1, -1]。
示例 1:
输入: nums = [1,2,4,5,7,8,11,12,15], target = 60
输出: [4,15]， [5,12]
示例 2:
输入: nums = [5,7,9,10,13], target = 64
输出: [-1,-1]

说明：递增排序的数组（其中后一个元素数值要比前一个数组大，数组中不存在值相等的元素）*/
/**两数之积
 * @param array $nums
 * @param $target
 * @return array
 * @Author ponyxiao
 * @Date 2020/2/12 14:56
 */
function twoProduct(array $nums,$target){
    if( !count($nums) ) return [-1,-1];
    sort($nums);
    // var_dump($nums);die;
    $arr = [];
    $right = count($nums)-1;
    for($left = 0;$left < count($nums)-2;$left++){
        if($nums[$left] * $nums[$right] == $target){
            array_push($arr,[$nums[$left],$nums[$right]]);
            while( $left < $right && $nums[$left] == $nums[$left+1]) $left++;
            while( $left < $right && $nums[$right] == $nums[$right-1]) $right--;
            $left++;
            $right--;
        }else if($nums[$left] * $nums[$right] > $target){
            $right--;
        }else{
            $left++;
        }
    }
    if(empty($arr)) return [-1,-1];
    return $arr;
}

//ini_set('memory_limit', '4096M');
//function twoProduct(array $nums,$target){
//    if( !count($nums) ) return [-1,-1];
//    sort($nums);
//    // var_dump($nums);die;
//    $arr = [];
//    $left = 0;
//    $right = count($nums)-1;
//    while($left < $right){
////        var_dump($nums[$left] * $nums[$right]);die();
//        if($nums[$left] * $nums[$right] == $target){
//            $arr[] = [$nums[$left],$nums[$right]];
//            while( $left < $right && $nums[$left] == $nums[$left+1]) $left++;
//            while( $left < $right && $nums[$right] == $nums[$right-1]) $right--;
//            $left++;
//            $right--;
////            var_dump($arr);die();
//        }else if($nums[$left] * $nums[$right] > $target){
//            $right--;
//        }else{
//            $left++;
//        }
////        var_dump($left);die;
//    }
//    if(empty($arr)) return [-1,-1];
//    return $arr;
//}
$arr = [3,6,5,7,9,1,2,4];
$target = 12;
print_r(twoProduct($arr,$target));