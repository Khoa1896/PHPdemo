<?php
// tính tổng S = 1+2+3 +..+n
$n=10;
$i = 1;
$total = 0;
while ($i<=$n){
    $total +=$i;
    $i++;
}
echo 'Tổng ='.$total.'<br>';