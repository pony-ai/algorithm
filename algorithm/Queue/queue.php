<?php


class queue
{
    private $queue;
    private $size;
    public function __construct()
    {
        $this->queue = array();
        $this->size = 0;
    }

    public function enQueue($data){
        var_dump($this->size++);
    }

}
$queue = new queue();
$queue->enQueue(1);
$queue->enQueue(1);