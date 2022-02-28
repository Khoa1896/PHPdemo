<?php
// Các hàm xử lý chuỗi
$str = 'Nguyen Dang Khoa "UI"';

//Xử lý chuỗi
// 1. Thêm ký tự escape vào phía trước  các ký tự mong muốn
$str= addcslashes($str,'a"');
echo $str;
