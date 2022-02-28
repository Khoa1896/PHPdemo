<?php
/*
 * 1. Toán tử 3 ngôi
 * 2. Cú pháp thay thế if
 * 3. Cú pháp thay thế for
 * 4. Cú pháp thay thế foreach
 */
$number=10;
if($number==10){
    echo 'Bạn đủ tuổi <br>';
} else{
    echo 'Bạn không đủ tuổi <br>';
}

// Toán tử 3 ngôi
echo $number=10?'Bạn đủ tuổi':'Bạn không đủ tuổi';
// Hoặc gắn biến
$printStr = $number=10?'Bạn đủ tuổi':'Bạn không đủ tuổi';
echo $printStr;
// Không muốn hiển thị
$printStr = $number=10?'Bạn đủ tuổi':false;
