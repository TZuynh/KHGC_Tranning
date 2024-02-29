Bước 1: Tạo bảng dữ liệu Members bằng xamapp sau đó gán tên bảng dữ liệu vào .env.
Bước 2: Tạo model Members (php artisan make:Model Members) và kết nối bảng dữ liệu bước 1 đã tạo.
Bước 3: Tạo controller Members (php artisan make:Controller MembersController) và kết nối với model, sau đó tạo 1 hàm xuất danh sách thành viên lấy dữ liệu từ model.
Bước 4: Tạo view một file giao diện chính (em sử dụng bootstap để xuất ra giao diện dễ nhìn hơn) và một file tạo bảng và kết nối dữ liệu từ controller.
Bước 5: Bên phần web.php kết nối với model (use App\Http\Controllers\MembersController;) và sài route::get để kết nối giữa view và controller.
Bước 6: Em sử dụng lệnh (php artisan serve) để tiến hành xuất kết quả lên website (localhost:8000/list).