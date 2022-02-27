<?php
$a = 1;
$b = 5;
$total = $a + $b +10 ;// $total =$a+$b+10 ==> Biểu thức
//$a,$b,10 : Toán hạng
//+,=; Toán tử
//$total : cũng là toán hạng

/* Toán tử Gán */
 $age = 26;
 const _WEB_HOST_ROOT = 'Dang Khoa';
 echo $age;
 echo '<br>';
 echo _WEB_HOST_ROOT;
 echo '<br>';
 $outputStr = 'Học lập trình ';
 $outputStr.='PHP tại Unicode';
 echo $outputStr;

 // Toán tử chia lấy dư
echo '<br>';
$a = 10;
$b =15;
$result = $a % $b;
echo $result;
 // Toán tử luỹ thừa
$a = 2;
$b = 5; // Cơ số luỹ thừa
$result = $a ** $b;
echo $result;
 // Toán tử ++,--
 $count = 0;
 $result1 = $count++; // Gán $result1 = $count =0 trước,sau đó mới cộng lên 1
 $result2 = ++$count; // cộng trước,sau đó mới gán cho biết $result2

// Toán tử +=
echo '<br>';
 $a = 10;
 $a +=10;
 echo $a;
// Toán tử quan hệ
echo '<br>';
$a = 10;
$b= 15;
$check = $a>=10 && $b>=16;
var_dump($check);
