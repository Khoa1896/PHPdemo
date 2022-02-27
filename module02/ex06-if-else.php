<?php
$number =3;
// Cấu trúc if else kết hợp :
/*
 * Nếu $number < 0 => số âm
 *             = 0 => Số không
 * Nếu >0 && <=5 => Số nhỏ
 * Nếu >5 && <=10 => Số trung bình
 */
if($number<0){
    echo $number.'là Số âm <br>';
} elseif($number=0){
    echo $number.'là số không <br>';
} elseif ($number>0 && $number<=5){
    echo $number,'là Số nhỏ <br>';
}

// Cấu trúc if else lồng nhau
  $number=-10;
if ($numbe>0){// Điều kiện cha
    if ($number>=5){ // Điều kiện con
        echo 'Thoả mãn điều kiện';
    }else{
        echo 'Không thoả mãn điều kiện';
    }
}else{
    echo 'Không thoả mãn điều kiện';
}
