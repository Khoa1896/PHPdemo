<?php

$data = 1;
$msg = 1;
function makeTotal($a,$b){
    $total =$a + $b;
    return $total;
    echo 'a';
}
function getMessage($msg=null){
    if ($msg==null){
        return;
    }
    return $msg;
}
function setMsg($data){
    global $msg;
    $msg = data;
}
function handleCount(){
    static $number = 0;
    $number++;// = 1
    return $number;
}
function setMessage($$msg){
    $msg.=1;
    return $msg;
}
