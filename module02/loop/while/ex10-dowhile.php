<?php
/*
 * TÍnh tổng S = 1/2 + 1/4 + 1/6+...+ 1/n
 * Điều kiện : 1/n >0.0001
 */
$total = 0;
$i=2;
do{
    $total+=1/$i;
    $i+=2;
}while(1/$i>=0.0001);
echo 'Tổng = '.$total;