<?php

class Node{
    public $data = '';
    public $next = null;
    function __construct($data)
    {
        $this->data = $data;
    }
}


// 链表有几个元素
function countNode($head){
    $cur = $head;
    $i = 0;
    while(!is_null($cur->next)){
        ++$i;
        $cur = $cur->next;
    }
    return $i;
}

// 增加节点
function addNode($head, $data){
    $cur = $head;
    while(!is_null($cur->next)){
        $cur = $cur->next;
    }
    $new = new Node($data);
    $cur->next = $new;

}

// 紧接着插在$no后
function insertNode($head, $data, $no){
    if ($no > countNode($head)){
        return false;
    }
    $cur = $head;
    $new = new Node($data);
    for($i=0; $i<$no;$i++){
        $cur = $cur->next;
    }
    $new->next = $cur->next;
    $cur->next = $new;

}

// 删除第$no个节点
function delNode($head, $no){
    if ($no > countNode($head)){
        return false;
    }
    $cur = $head;
    for($i=0; $i<$no-1; $i++){
        $cur = $cur->next;
    }
    $cur->next = $cur->next->next;

}

// 遍历链表
function showNode($head){
    $cur = $head;
    while(!is_null($cur->next)){
        $cur = $cur->next;
        echo $cur->data, '<br/>';
    }
}

$head = new Node(null);// 定义头节点


addNode($head, 'a');
addNode($head, 'b');
addNode($head, 'c');

insertNode($head, 'd', 0);

showNode($head);

echo '<hr/>';

delNode($head, 2);

showNode($head);
