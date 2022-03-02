<?php
function maketotal($a,$b){
    $total =$a+$b;
    echo 'Total '.$a.'+'.$b.'='.$total.'<br>';
}
function getMess(){
    echo 'Đây là thông báo';
}
// Gọi hàm
maketotal(5,10);
$numbera = 10;
$numberb = 20;
maketotal($numbera,$numberb);
 getMess();

 // Kiểm tra xem hàm đã được đặt tên trước chưa
if (!function_exists('maketotal')){  // function_exists : kiểm tra xem hàng có tồn tại không. dấu ! để phủ định lại -> nếu nó không tồn tại thì mới chạy
    $total =$a+$b;
    echo 'Total '.$a.'+'.$b.'='.$total.'<br>';

}