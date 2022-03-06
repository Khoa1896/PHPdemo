### NGUYÊN TẮC CHUNG NHẤT KHI CODE PHP
1. Nguyên tắc PSR-1
 <ul>
<li>Các file code phải sử dụng thẻ <?php hoặc <?=
<li>File code PHP phải sử dụng encode : UTF-8 without BOOM
<li>Các file NÊN chứa các khai báo (lớp, hàm, hằng ...) hoặc các tác dụng phụ (thiết lập, xuất dữ liệu chung ...) nhưng KHÔNG NÊN chứa cả hai
<li>Các Namespace và lớp (class) PHẢI theo chuẩn "autoloading" PSR: [PSR-0 và PSR-4]
<li>Tên lớp PHẢI có dạng NameClass 
<li>Hằng số trong class tất cả PHẢI viết HOA và chia ra bởi dấu _ (ví dụ ES_TEST_HOST).
<li>Tên phương thức của lớp PHẢI ở dạng camelCase (từ đầu viết thường, ví dụ: helloWorld)
</ul>


## PHƯƠNG PHÁP LẬP TRÌNH HƯỚNG ĐỐI TƯỢNG

Lập trình hướng đối tượng (OOP) : 
<li>1.Class ( Lớp ):
<ul>
<li>Class để định nghĩa  chung cho 1 thực thể(Hiểu đơn giản là 1 bản thiết kế)
<li>Trong một class bao gồm : thuộc tính(biến) và phương thức (hàm),hằng số khai báo là const
</ul>
<li>2. Object(Đối tượng): 
<ul>
<li>Object dùng để thể hiện cụ thể từ bản thiết kế(Class)
=>1 class có thể có 1 hoặc nhiều object
</ul>

### Class 
<li>Hiểu thực tế : class chính là việc đóng gói : biến,hàm,hằng để sử dụng nó
chặt chẽ hơn
<li>Cú pháp định nghĩa Class : 

    class TenClass{
    visibility $property1;
    visibility $property2;
    const constant1 = value1;
    const constant2 = value2;
    visibility function methodName1(){
      //Method body 1
    }
    visibility function methodName2(){
      //Method body 2
    }
    }

<li>Trong đó : 
<ul>
<li>TenClass : Đặt theo quy tắc Pascal Case(Các ký tự đầu của mỗi chữ sẽ viết hoa)
<li>visibility : Phạm vi truy cập(public,private,protected)
<li>Tên thuộc tính đặt theo quy tắc camelCase
<li>Tên hằng số sẽ viết HOA và nối với nhau bằng gạch dưới
</ul> 

### Object 
 <li>Object là sự thể hiện của class
 <li>Hiểu đơn giản thì muốn sử dùng các phương thức,thuộc tính,hằng số
của class thì cần phải khởi tạo object
<li>Cú pháp khởi tạo object : 
<ul>
$tenObject = new TenClass();
</ul>
<li>Với các class không có giá trị khởi tạo có thể sử dụng các cú pháp sau : 
<ul>
$tenObject = new TenClass();
</ul>
<li>Cú pháp gọi thuộc tính,phương thức,hằng số :
<ul>
<li>$tenObject->tenThuocTinh;//Gọi thuộc tính
<li>$tenObject->tenPhuongThuc;//Gọi phương thức (Nếu phương thức có tham số,cần bổ sung)
<li>$tenObject::TEN_HANG_SO;// Gọi hằng số
<li>// Có thể gọi hằng số theo cách sau : 
TenClass::TEN_HANG_SO;
</ul>
<li>Namespace : Giúp tạo ra một không gian cho hàm và lớp nói chung. Trong OOP thì namespace
có tác dụng tạo ra định danh cho lớp cách cụ thể hoá hơn

### Interface Template 
<li> Interface trong OOP là 1 Template(khuôn mẫu) được sử dụng để tạo ra 
bộ khung cho các lớp
<li>Interface giống như 1 bản hợp đồng ràng buộc và bắt buộc lớp đó
phải có đầy đủ các phương thức trong hợp đồng đó ( Nếu không có sẽ bị lỗi)
<li>Đặc điểm của Interface : 
<ul>
 <li>Interface không phải class,object.Nó là Template
<li>Trong Interface chỉ được phép khai báo phương thức,không được phép triển
khai nội dung phương thức
<li>Trong Interface không được phép khai báo thuộc tính (biến) nhưng được phép
khai báo hằng số
<li>Không thể khởi tạo đối tượng từ Interface
<li>Để sử dụng Interface,cần định nghĩa class và implement từ Interface đó
<li>Các Class implement từ Interface phải định nghĩa tất cả cá phương thức
trong Interface đó
<li>Một Class có thể implement nhiều Interface
<li>Các Interface có thể kế thừa lẫn nhau bằng từ khoá extends
<li>Phạm vi trong Interface chỉ tồn tại dạng public,không có private,proteted
</ul>
Cú pháp Interface:

```php interface AuthInterface{
  const _MSG_TEMPLATE = [];
  public function login();
public function register();
public function forgotPassword();
public function resetPassword();
public function activeAccount();
}
```
Cú pháp implement Interface: 
```
class Auth implement AuthInterface{
  public function login(){
        //login body  
  }
  public function register(){
        //register body  
  }
  public function forgotPassword(){
        //forgot password body  
  }
  public function resetPassword(){
        //resetPassword body  
  }
  public function actuveAcciybt(){
        //active account body  
  }
}
```
Cú pháp implement nhiều Interface: 
```
class AdminAuth implement AuthInterface,RoleInterface {
  //class body
}
```
Cú pháp các Interface kế thừa :

```
interface IFô extends IBar,ArrayAccess, IteratorAggregate, Serializable{
    //Interface body
}
```


