<?php
//Hàm không giới hạn tham số
function getMessage($str,...$params){
    echo 'str = '.$str;
    print_r($params);
//    echo func_get_arg(0);
}
getMessage('Khoa',2,3);


