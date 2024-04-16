<link rel="stylesheet" href="css/style_dangnhap.css">
<?php
	$hoten = $_SESSION['HoTen'];
	$sql = "SELECT * FROM `nguoidung` WHERE TenNguoiDung = '$hoten'";
	
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	
	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>

<form  style="margin-top: 200px; margin-left: 345px; margin-bottom: -140px;" class="form-container" action="index.php?do=hosocanhan_xuly" method="post">
	<h3 style="text-align: center;">Hồ sơ cá nhân</h3>
	<input type="hidden" value="<?php echo $dong['MaNguoiDung']; ?>" name="MaNguoiDung" />
	<br>
	<input type="text" value="<?php echo $dong['TenNguoiDung']; ?>" name="HoVaTen" placeholder="Họ Và Tên"/>
	<br>
	<input type="text" value="<?php echo $dong['TenDangNhap']; ?>" name="TenDangNhap" placeholder="Tên Đăng Nhập"/>
	<br>
	<input type="text" value="<?php echo $dong['MatKhau']; ?>" name="MatKhau" placeholder="Mật Khẩu"/>
	<br>
	<input type="text" value="<?php echo $dong['DiaChi']; ?>" name="DiaChi" placeholder="Địa chỉ"/>

	<input type="submit" value="Cập nhật hồ sơ" />
</form>