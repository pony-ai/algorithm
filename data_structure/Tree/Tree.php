<?php


class Tree
{
    public $head = null;

    public function __construct($headData = null){
        if($headData != null){
            $this->head = new TreeNode($headData);
        }
    }

    /**
     * 插入数据
     * @param $data
     * @return mixed`
     * @Author ponyxiao
     * @Date 2020/3/23 8:22
     */
    public function insert($data){
        if ($this->head == null){
            $this->head = new TreeNode($data);
            return true;
        }
        $node = $this->head;
        while($node!=null){
            if ($data > $node->data){
                if ($node->right == null){
                    $node->right = new TreeNode($data);
                    return true;
                }
                $node = $node->right;
            }else{
                if($node->left == null){
                    $node->left = new TreeNode($data);
                    return true;
                }
                $node = $node->left;
            }
        }
    }
    public function inOrder($node){
        if($node == null){
            return null;
        }
        $this->inOrder($node->left);
        echo $node->data.'';
        $this->inOrder($node->right);
    }
}
$tree = new Tree();
$tree->insert(3);
$tree->insert(6);
$tree->insert(2);
$tree->inOrder($tree->head);