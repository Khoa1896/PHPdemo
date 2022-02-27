# GIT FLOW

1. Khái niệm : Git flow là tiện ích của git,giúp thao tác trên repository dễ dàng
   hiệu quả hơn dưa trên mô hình phân nhánh.
## Branch
*Có 5 loại branch : Master,release,develop,feature,hot-fix*

<li>Master :
<ul>
<li>Nơi chưa toàn bộ source code
<li>Không có quyền thay đổi source code.
</ul>
<li>Develop : 
<ul>
<li> Nhánh phát triển sản phẩm (release)
</ul>
<li>Release : 
<ul>
<li>Nhánh tạo ra trước khi release
<li>Rất hạn chế chỉnh sửa ở nhánh này
</ul>
<li>Feature : 
<ul>
- Nhánh tạo ra dùng để giải quyết bug cũng như run những function
cá biệt
</ul>
<li>Hot fix : 
<ul>
- Nhánh dùng để fix bug gấp sau khi hoàn tất release
</ul>

#Server-Client & giao thức HTML
##Server - Client
Có thể hiểu :
<ul>
<li> Người tiêu dùng muốn biết một thông tin cụ thể,là người đưa ra yêu cầu
,hay còn gọi là Client
<li> Nhà cung cấp thông tin,là người tiếp nhận yêu cầu và xử lý nó,hay còn gọi
là Server
</li>
</ul>

# Giao thức HTML
Client và Server được kết nối qua giao thức HTML.Khi kết nối được thiết lập :
<ul>
 <li>Client gửi yêu cầu Server ( dưới dạng XML or Json) 
 <li> Sau khi hiểu được,Server trả về 1 reponse để trả về dữ liệu mà 
Client yêu cầu ( dưới dạng XML or Json)
</li> 
</ul>

# Ngôn Ngữ PHP

## PHP là gì ?
- PHP là một ngôn ngữ lập trình kịch bản phía Server (hay còn gọi là Back end)
  dùng để phát triển các ứng dụng web
- Hoạt động trên nhiều hệ điều hành
- Là ngôn ngữ lập trình bậc cao
- Tương thích với nhiều hệ quản trị CSDL MySQL,MôngDB,SQL Server
- Là mã nguồn mở đa nền tảng,hoàn toàn miễn phí
- File PHP lưu dưới dạng *.php, Cú pháp đặt trong dấu <?php?>
- PHP có rất nhiều Framework,CMS miễn phí,cộng đồng lớn.\
  Bản chất ngôn ngữ lập trình PHP : Là sự giao tiếp của browser(Front-end) và Server(back-end) bằng HTT\
  Sơ đồ :
  + Xử lý truy vấn dữ liệu
  + Front-end: HTML,CSS,JS   --> FRONT END --> WEBSITE -->CSDL/Backend
  + Thêm,sửa,xoá dữ liệu

## Lộ trình học PHP & MySQL
<li> Sơ đồ :
<ul>
  <li>PHP cơ bản 
<li>Lập trình hướng đối tượng với PHP(OOP)
<li>Thiết kế CSDL 
<li>Xây dựng ứng dụng kết hợp PHP & MySQL( như thêm sửa,xoá dữ liệu hoặc đăng nhập đăng xuất)
<li>Rewrite URL
<li>Xây dựng website hoàn chỉnh sử dụng PHP & MySQL
<li>Học về mô hình trong lập trình với CSDL : MVC,HMVC
<li>PHP Framework
<li>PHP CMS
<li>Công cụ quản lý phiên bản mẫ nguồn : GIT,SVN
<li>Công cụ quản lí công việc : Trello 
<li>Tên miền,hosting,server/VPS
<li>Bảo mật các hình thức tấn công và cách phòng tránh
</ul>
<<<<<<< HEAD

# BÀI HỌC
### 4. Kiểm tra thông tin trong PHP

<ul>
 <li>Thông tin này bao gồm :Phiên bản PHP,các phần mở rộng được cài,các biến
môi trường của PHP,thông tin và hệ điều hành.....
 <li>Sử dụng hàm :
    phpinfo(); --> xem trên localhost
</ul>


### 5.Hướng dẫn dùng Biến-Comment-Debug trong PHP :

1. Biến :
<ul>
  <li>Cú pháp : $ten_bien
  <li>Ví dụ : $custom_name
  <li>Lưu ý : 
<ul>
<li>Tên biến bắt đầu bằng chữ cái hoặc gạch dưới
<li>Tên biến chưa các chữ cái,chữ số,ký tự gạch dưới
<li>PHP phân biệt chữ hoa và thường
<li> PHP không cần khai báo kiểu dữ liệu(có or không cũng đc)
<li>Nên đặt theo quy tắc camelCase.
</ul>
<li>In dữ liệu : 
<ul>
<li>Cú pháp : echo < tên biến/tên hàm/chuỗi/số > ;
</ul>
</ul>
2. Comment : 
<ul>
   <li>1 dòng : // code ở đây
  <li>Nhiều dòng : /* code ở đây */
</ul>
3. Debug dữ liệu :
<ul>
  <li>var_dump($var): Trả về kiểu dữ liệu và giá trị
  <li>print_r($var): Thường dùng để in mảng và đối tượng
</ul>

### 6.Cách nối biến trong PHP
<li>Cú pháp : $bien1.$bien2 ;
<li>Ví dụ : 
<ul>
<li>bien1 = 'Khoa'
<li>bien = 'Nguyen';
<li>echo $bien1.' '.@bien2;
</ul>

### 7.Hằng trong PHP
<li>Cú Pháp : define('ten_hang','giá trị');
<li>Đặt tên Hằng : 
<ul>
<li>Chứa các chữ cái,chữ số,dấu gạch dưới
<li>Bắt đầu bằng chữ cái hoặc gạch dưới
<li>Phân biệt chữ hoa,chữ thường
<li>Nên đặt tên theo quy tắc underscore nhưng viết hoa ( Ví dụ : WEB_HOST_ROOT)
hoặc thêm gạch dưới ở phía trước.
</ul>
<li>Chú ý : Hằng số chỉ nhận 1 giá trị ban đầu,không thay đổi.

### 8. Các kiểu dữ liệu trong PHP
*Có 8 kiểu dữ liệu trong PHP*
 <ul>
<li>Kiểu INT
<li>Kiểu số thực
<li>Kiểu String
<li>Kiẻu Boolean
<li>Kiểu Mảng
<li>Kiểu Null
<li>Kiểu Resource
<li>Kiểu đối tượng
</ul>
 1. Kiểu số nguyên ( INT )
<ul>
   <li>Khai báo : $ten_bien = so_nguyen;
   <li>Ép kiểu INT : (int)$ten_bien;
   <li>Kiểm tra số nguyên : is_int($ten_bien) hoặc is_interger($ten_bien)
 </ul>
2. Kiểu Boolean ( true or false)
<ul>
   <li>Khai báo : $ten_bine = giá trị Boolean;(true or false)
   <li>Ép kiểu : (bool)$ten_bien hoặc (boolean)$ten_bien
   <li>Các kí tự : 0,trống,null đều quy về false,ngược lại là true
   <li>Kiểm tra biến kiểu boolean : is_bool($ten_bien);
</ul> 
3. Kiểu số thực (Float)
<ul>
   <li>Khai báo : $ten_bien = so_thuc;
   <li>Ép kiểu : (float)$ten_bien;
   <li>Kiểm tra kiểu số thực : is_float(ten_bien);
</ul>
 4. Kiểu chuỗi 
<ul>
   <li>Khai báo :$ten_bien = 'Chuỗi'; hoặc $ten_bien = "Chuỗi"
   <li>Ép kiểu : (string)$ten_bien;
  <li> Kiểm tra kiểu chuỗi : is_string($ten_bien);
</ul>
 5. Kiểu dữ liệu mảng 
<ul>
   <li>Khai báo : $ten_bien = array();
   <li>Ép kiểu mảng : (array)$ten_bien; -> Thường dùng khi ép từ bên Objiec sang
   <li>Kiểm tra kiểu mảng : is_array($ten_bien);
</ul>
 6. Kiểu dữ liệu NULL
<ul>
   <li>Khai báo : $ten_bien = null
   <li>Ép kiểu sáng int => 0;
   <li>Ép kiểu sang String => Rỗng;
   <li>Ép kiểu sang String => False;
   <li>Kiểm tra kiểu Nukk : is_null($ten_bien);
</ul>
  <li>Phân biệt empty và null : 
<ul>
   <li>biến Null : hệ thống không cung cấp vùng nhớ/
   <li>biến ''(empty) : biến này vẫn tồn tại 1 vùng nhớ 
-> Để tối ưu bài toán,ta muốn giữ chỗ cho 1 biến,hay khai báo giá trị ban đầu
thì nên khai báo kiểu NUll
</ul> 
7. Kiểu dữ liệu Resource 
<ul>
   <li> Kiểu dữ liệu đặc biệc,nó lưu trữ thamm chiếu đến các hàm - tài nguyên
bên ngoài PHP : file,curl,database
   <li>Kiểm tra kiểu resource : is_resource($ten_bien)
</ul>
 8 . Kiểu đối tượng (Object)
<ul>
   <li>Kiểu dữ liệu này lưu trữ dữ liệu và cách xử lý dữ liệu đó 
  <li> KIểm tra kiểu đối tượng : is_object($ten_bien)
   <li>Ép kiểu đối tượng từ mảng : (object)$bien_mang
</ul>

### 9. Toán tử và biểu thức trong PHP

<ul>
 <li>Biểu thức : Tập hợp các toán tử và toán hạng
  <li>Toán hạng: Các biến hay các giá trị thực hiện
  <li>Toán tử : Các phép toán: Cộng,trừ,nhân,chia,so sánh,lấy dư.... 
<ul>
<li>Toán tử gán : =,+=.-=,/=,%=,*=,.=(nối chuỗi)...
<li>Toán tử số học : =,-,*,/,**,++,--
<li>Toán tử so sánh : >,<,<=,==,===,!=
<li>Toán tử lý luận : &&,||,!,( Độ ưu tiên NOT => And => OR)
  </ul>

### 10. Câu lệnh rẽ nhánh if else trong PHP
- Cú pháp : 
  if (condition){\
  // Các câu lệnh\
}\
Ví dụ : $number=1;\
if($number>0){\
echo 'Số nguyên dương' ;\ 
}\
 - Kết hợp nhiều if else :\
  if(condition1){\
  // Câu lệnh\
}elseif (condition2){\
  // Câu lệnh } \
- Câu lệnh if else lồng nhau :\
 if(condition1){\
 if(condition2){\
// Câu lệnh} else{\
// Câu lệnh\
 }\
}

### 10. Câu lệnh rẽ nhành Switch Case
 <li>Giá trị case chỉ chấp nhận : Số nguyên,string,boolean,null,số thực
  <li>Quan hệ so sánh trong câu lệnh switch case luôn là so sánh bằng (==)
 <li> Switch case được dùng khhi câu điều kiện có nhiều nhánh.Tuy nhiên 
 kém linh hoạt hơn if else
  <li>Switch case có thể kết hợp vs if else để tăng sự linh hoạt
 Switch case có thể lồng vs Switch case con
 <li> Cú pháp : 
 
  switch($ten_bien){\
 case 'gia_tri_1':\
case 'gia_tri_2':\
// Danh sách câu lệnh\
break;\
case 'giá tri_4':\
break;\
dèault:\
// Danh sách câu lệnh\
break;\
}\