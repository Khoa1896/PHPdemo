<?php
// 1. Kiểu số Nguyên
//Khai báo
$age=26.5;

// Ép kiểu
$age = (int)$age;

//Kiểm tra kiểu số nguyên :
$check= is_int($age);
//var_dump($check);

// 2. Kiểu Boolean
$check = 0;
   // Ép kiểu
$check = (bool)$check;
$checkBool = is_bool($check);
//var_dump($check);

//3. Kiểu số thực (float)
  //Ép kiểu
$fee = 10;
$fee = (float)$fee;
//var_dump($fee);
echo '<br>';
//var_dump(is_float($fee));

//4. Kiểu dữ liệu chuỗi ( string )
$messsage = ' Đây là thông báo';
 $messsage1 = 1;
 //Ép chuỗi
  $messsage1 = (string)$messsage1;
var_dump($messsage);
  // Check chuỗi
 var_dump(is_string($messsage1));
 //5. Kiểu mảng (Array)
echo '<br>';
 $carArr =[];
 // Ép kiểu
 $carArr = (array)$carArr;
 // check chuỗi
 var_dump(is_array($carArr));

 //6. Kiểu rỗng (Null)
  $total = null;
    // Ép kiểu
    $total = (int)$total;
    var_dump($total);
    var_dump(is_null($total));
//7. Kiểu Resource
  $curl = curl_init();
  $checkCurl = get_resource_type($curl);
//  var_dump($curl);
  var_dump($checkCurl);
//8. Kiểu đối tượng (Object)
echo '<br>';
$dataCustomer = ['Dang Khoa'];
$dataCustomer = (object)$dataCustomer;// Ép Kiểu
var_dump($dataCustomer);
var_dump(is_object($dataCustomer));
   // Ví dụ 2 về Object
$customerObject = new StdClass();
$customerObject->age = 26;// Trỏ đến age
var_dump($customerObject);
// Phân biệt empty và null
$mess = null: //Rỗng
$mess1 = '';// Trống
