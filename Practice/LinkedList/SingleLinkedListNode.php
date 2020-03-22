<?php


class SingleLinkedListNode
{
    public $data;
    public $next;

    function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }

}