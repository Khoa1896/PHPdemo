<?php
//Muốn khi nào đến 5 vòng lặp thoát ra
for ($i=0;$i<=10;$i++){
    echo $i.'<br>';
    if ($i==5){
        break;// THoát khỏi vòng lặp khi thoã mãn đkien
    }
}