
<?php
	// Lấy thông tin từ FORM
	$QuyenHan = 1;
	$HoVaTen = $_POST['HoVaTen'];
	$TenDangNhap = $_POST['TenDangNhap'];
	$MatKhau = $_POST['MatKhau'];
	$XacNhanMatKhau = $_POST['XacNhanMatKhau'];
	$DiaChi = $_POST['DiaChi'];
	
	// Kiểm tra
	if(trim($HoVaTen) == "")
		ThongBaoLoi("Họ và tên không được bỏ trống!");
	elseif(trim($TenDangNhap) == "")
		ThongBaoLoi("Tên đăng nhập không được bỏ trống!");
	elseif(trim($MatKhau) == "")
		ThongBaoLoi("Mật khẩu không được bỏ trống!");
	elseif($MatKhau != $XacNhanMatKhau)
		ThongBaoLoi("Xác nhận mật khẩu không đúng!");
	elseif(trim($DiaChi) == "")
		ThongBaoLoi("Địa chỉ không được để trống!");
	else
	{
		// Kiểm tra người dùng đã tồn tại chưa
		$sql_kiemtra = "SELECT * FROM nguoidung WHERE TenDangNhap = '$TenDangNhap'";
		
		$danhsach = $connect->query($sql_kiemtra);
		
		if($danhsach)
		{
			if ($danhsach->num_rows > 0) {
				ThongBaoLoi("Người dùng với tên đăng nhập đã được sử dụng!");
			} else {
				// Thêm người dùng
				$sql_them_nd = "INSERT INTO `nguoidung`(`QuyenHan`,`TenNguoiDung`, `TenDangNhap`, `MatKhau`, `DiaChi`)
						VALUES ('$QuyenHan', '$HoVaTen', '$TenDangNhap', '$MatKhau', '$DiaChi')";
				$themnd = $connect->query($sql_them_nd);
				
				if($themnd) {
					ThongBao("Đăng ký thành công!");
				} else {
					ThongBaoLoi('Đã xảy ra lỗi khi thêm dữ liệu vào CSDL!');
				}
			}
		}
		else
		{
			ThongBaoLoi("Đã xảy ra lỗi khi kiểm tra người dùng!");
		}
	}
?>
