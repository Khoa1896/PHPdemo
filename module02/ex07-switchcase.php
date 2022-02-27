<?php
/*
 * Kiểm tra thứ trong tuần
 * $number = 1 => chủ nhật
 * $number = 2 => thứ 2
 * $number = 3 => thứ 3
 */
$number = 4;
switch($number){
    case 1:
    echo 'Chủ nhật';
    break;
    case 2 :
    echo ' Thứ 2';
    break;
    case 3 :
        echo ' Thứ 3';
        break;
    default:
        echo 'Không hợp lệ';
        break;
}
echo '<br>';
// Ví dụ 2 :
/*
 * Kiểm tra số ngày trong tháng
 * Input: Nhập tháng ,năm
 * Output : Đưa ra số ngày trong tháng
 *
 * Tháng 31 ngày : 1,3,5,7,8,10,12
 * Tháng 30 ngày : 4,6,9,11
 * Tháng 28,29 ngày : 2 ( Năm nhuận = Năm chia hết cho 4)
 */

/*Input*/
$month = 2;
$year = 2021;
switch ($month){
    case 2:
        if ($year%4==0){
            echo 'Thang '.$month. ' Có 29 ngày';
        } else {
            echo 'Thang '.$month. ' Có 28 ngày';
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo 'Thang '.$month.' có 30 ngày';
        break;
    default:
        echo 'Thang '.$month.' có 31 ngày';
        break;
}
// Nên viét những trường hợp có ít trường hợp nhất,--> cái nào nhiều nên để default