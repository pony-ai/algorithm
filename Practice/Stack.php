<?php
/*如何实现栈*/
//方法一 数组实现
$arr = array();
/*function push(&$arr,$val){
    $size = count($arr);
    $arr[$size] = $val;
}
function pop(&$arr){
    $size = count($arr);
    unset($arr[$size-1]);
}

push($arr,'a1');
push($arr,'a2');
push($arr,'a3');
echo "入栈后排序：";
print_r($arr);
pop($arr);
echo "<br>出栈后排序：";
print_r($arr);*/

//方法二 链表实现
class LNode{
    public $mElem;
    public $mNext;
    public function __construct($data = null)
    {
        $this->mElem = $data;
        $this->mNext = NULL;
    }
}
class StackLinked{
    /*头指针head*/
    public $head;
//    public $mElem;
    public static $mLength;
    //初始化栈

    public function __construct()
    {
        $this->head = new LNode();
//        $this->mElem = NULL;
        self::$mLength = 0;
    }

    /**
     * 判断栈是否为空
     * @return bool 为空返回false，否则返回true
     */
    public function getIsEmpty(){
        if($this->head ==NULL){
            return false;
        }else{
            return true;
        }
    }

    /**
     * 将所有元素出栈
     * @return array 返回栈内所有元素
     */
    public function getAllPopStack(){
        $e = array();
        if ($this->getIsEmpty()){
            while($this->head==NULL){
                $e[] = $this->head->mElem;
                $this->head = $this->head->mNext;  //?
            }
        }
        self::$mLength = 0;
        return $e;
    }

    /**返回栈内元素个数
     * @return int
     */
    public static function getLength(){
        return self::$mLength;
    }
    /**
     * 元素入栈
     * @param $e
     * @return bool
     */
    public function push($e){
        $newLn = new LNode($e);

//        $this->mElem = $e;
//        var_dump($newLn);
        $newLn->mNext = $this->head->mNext;
        $this->head->mNext = $newLn; //?
        self::$mLength++;
        return true;
    }
    /**
     * 元素出栈
     * @return bool
     */
    public function pop(){
        if ($this->head==NULL){
            return false;
        }
        $p=$this->head;
        $p->mNext = $p->mNext->mNext;
        self::$mLength--;
        return true;
    }
    /**
     * 返回栈内所有元素
     * @return array
     */
    public function getAllElem(){
        $sldata = array();
        if ($this->getIsEmpty()){
            $p = $this->head;
            while ($p!=NULL){
                $sldata[] = $p->mElem;
                $p = $p->mElem;
            }
            return $sldata;
        }
    }
    /**
     * 返回栈顶元素
     * @return bool|mixed
     */
    public function top(){
        if ($this->getIsEmpty()){
            return false;
        }
        $list = $this->getAllElem();
        $element = $list[0];
        return $element;
    }
}
$stack = new StackLinked();
$stack->push('I');
$stack->push('L');
$stack->push('o');
$stack->push('v');
$stack->push('e');
$stack->push('U');
$list = $stack->getAllElem();
var_dump($list);
echo $stack->top()."<br>";
$stack->pop();
echo $stack->top()."<br>";