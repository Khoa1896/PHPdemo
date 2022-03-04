<?php
/*
 * Tạo Class có tên Calculator để tính 4 phép tính sau:
 * add : phép cộng
 * minus : phép trừ
 * multiply : phép nhân
 * divide : phép chia
 */
class Calculator{
    //Khai báo thuộc tính
    var $numberA = 1,$numberB = 2;// Sử dụng var khai báo => PHP sẽ ngầm hiểu là public
    // Khai báo hằng số
    const MSG_CONTENT ='Kết quả là :{value}';
   // Khai báo phương thức
    function makeAdd($valueA,$valueB){
        $result = $valueA + $valueB;
        return $result;
    }
    function makeAMinus($valueA,$valueB){
        $result = $valueA - $valueB;
        return $result;
    }
    function makeAMutiply($valueA,$valueB){
        $result = $valueA * $valueB;
        return $result;
    }
    function makeDivide($valueA,$valueB){
        if ($valueB> 0){
            $result = $valueA / $valueB;
            return $result;
        }
        return 'Không chia cho số 0';
    }
    function showResult($msg,$value){
        return str_replace('{value}',$value,$msg); // Thay đổi chữ {value} thành biến $value trong $msg

    }
    // Lấy msg bên trong classs
    function showShort($value){
        $msg = $this::MSG_CONTENT;
        echo $this->showResult($msg,$value);
    }
}

// Khởi tạo đối tượng
$calc = new Calculator();
var_dump($calc);
echo $calc->numberA;// Lấy thuộc tính A
echo '<br>';
echo $calc->numberB;
echo '<br>';
// Gán giá trị thuộc tính
echo $calc->numberA=20;
echo $calc->makeAdd($calc->numberA,$calc->numberB);
echo '<br>';
echo Calculator::MSG_CONTENT;
echo '<hr>';
echo 'Thông báo kết quả <br>';
echo $calc->showResult($calc::MSG_CONTENT,$calc->makeAdd($calc->numberA,$calc->numberB));
echo '<br';
 $calc->showShort($calc->makeAdd($calc->numberA,$calc->numberB));