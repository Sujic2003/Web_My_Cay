
<link rel="stylesheet" href="css/style_dangnhap.css">
<form  style="margin-top: 250px; margin-left: 345px; margin-bottom: -180px;" class="form-container" action="index.php?do=dangky_xuly" method="post">
	<h3 style="text-align: center;">Đăng Ký Tài Khoản</h3>
	<input type="hidden" id="QuyenHan" name="QuyenHan" />
	<br>
	<input type="text" id="HoVaTen" name="HoVaTen" placeholder="Họ và Tên" required>
	<br>
	<input type="text" id="TenDangNhap" name="TenDangNhap" placeholder="Tên Đăng Nhập" required>
	<br>
	<input type="text" id="MatKhau" name="MatKhau" placeholder="Mật Khẩu" required>
	<br>
	<input type="text" id="XacNhanMatKhau" name="XacNhanMatKhau" placeholder="Xác Nhận Mật Khẩu" required>
	<br>
	<input type="text" id="DiaChi" name="DiaChi" placeholder="Địa Chỉ Giao Hàng" required>
	<input type="submit" value="Đăng Ký"></input>
</form>