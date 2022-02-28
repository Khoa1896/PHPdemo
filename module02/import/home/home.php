<?php
/*
 * Thứ tự import :
 * - Header
 * - Content
 * - Footer
 */
echo ' Đây là nội dung thêm';
//$path_dir = __DIR__.'/includes';// Đường dẫn tuyệt đối -> chạy tới file includes không hiển thị nội dung bên trong
$path_dir =__DIR__.'/../includes';
echo $path_dir;
//$path_dir = 'includes';// Đường dẫn tương đối ( Dkien file đang  chạy và folder ngang hàng với nhau)

// import header.php
//include $path_dir.'/header.php';
require $path_dir.'/header.php';
//include_once $path_dir.'/header.php'; // 1 cái chỉ import 1 lần ( trùng file)

//import content.php
include $path_dir.'/Content.php';

//import footer.php
include $path_dir.'/footer.php';

echo $path_dir.'<br>';