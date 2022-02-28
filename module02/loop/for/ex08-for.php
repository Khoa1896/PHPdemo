<?php
// Ví dụ 1 :  Tính tổng S = 1+2+3+$4+5+...+n
$n = 99;
$s = 0;// Giả định = 0
for ($i=1;$i<=$n;$i++){
    $s+=$i;// $s= $s+$i;
}
echo 'Tổng S = '.$s;

