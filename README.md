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
 
# BÀI HỌC
### 4. Kiểm tra thông tin trong PHP 
<ul>
 <li>Thông tin này bao gồm :Phiên bản PHP,các phần mở rộng được cài,các biến
môi trường của PHP,thông tin và hệ điều hành.....
 <li>Sử dụng hàm :
    phpinfo(); --> xem trên localhost
</ul>

### 5.Hướng dẫn dùng Biến-Comment-Debug trong PHP : 

<li>Biến :
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
<li>Comment : 
<ul>
   <li>1 dòng : // code ở đây
  <li>Nhiều dòng : /* code ở đây */
</ul>
<li>Debug dữ liệu :
<ul>
  <li>var_dump($var): Trả về kiểu dữ liệu và giá trị
  <li>print_r($var): Thường dùng để in mảng và đối tượng
</ul>

