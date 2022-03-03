<?php
//if (!empty($customerArr)&& is_array($customerArr)){
//    foreach ($customerArr as $key=>$value){
//        echo $value.'</br>';
//    }
//}
// Mảng đa chiều
$item1 = [
    'name' => ' Đăng Khoa',
    'email'=>'nguyendangkhoa1896@gmail.com',
    'phone'=>'0582387287'
];
$item2 = [
    'name' => ' Đăng Khoa',
    'email'=>'nguyendangkhoa1896@gmail.com',
    'phone'=>'0582387287'
];
$customerArr = [
    $item1,
    $item2,
    'status'=>'success',30
];
echo '<pre>';
print_r($customerArr);
echo '</pre>';

// Khai báo dữ liệu mảng đa chiều không có dữ liệu ban đầu
$customerArr1=[];
// Nhập dữ liệu vào mảng
$customerArr1[]=[
    'name' => ' Đăng Khoa',
    'email'=>'nguyendangkhoa1896@gmail.com',
    'phone'=>'0582387287'
];
    $customerArr1[]=[
        'name' => ' HA',
        'email'=>'nguyendangkhoa1896@gmail.com',
        'phone'=>'0582387287'
    ];

    $customerArr1['status']= 'success';
    $customerArr1[] = 30;
    echo '<pre>';
    print_r($customerArr1);
    echo '</pre>';