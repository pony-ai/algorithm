<?php
/**
 * 一球从100米高度自由落下，每次落地后反跳回原高度的一半；再落下，求它在第n次落地时，共经过多少米？第n次反弹多高？（n<=10）
 */
class calculate
{
    public $d=0;
    public $h=100;
    public function cal($n){
        for($i=0;$i<$n;$i++){
            $this->d += $this->h;
            $this->h = $this->h/2;
        }
        return [$this->d,$this->h];
    }
}

$test = new calculate();
$test->cal(3);