<?php


class TreeNode
{
    public $data;
    public $left;
    public $right;
    /**
     * TreeNode constructor.
     * @param null $data
     */
    public function __construct($data = null)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}