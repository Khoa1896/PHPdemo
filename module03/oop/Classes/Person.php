<?php
class Person{
    public static $fullName = 'Đăng Khoa';
    public static $age = 26;
    public static function getName(){
        return 'Tên của bạn là : ';
    }
}
echo Person::$fullName.'<br>';
echo Person::$age.'<br>';
