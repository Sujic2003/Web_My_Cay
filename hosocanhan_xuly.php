<?php
// Kiểm tra xem biểu mẫu đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
	$maNguoiDung = $_POST['MaNguoiDung'];
    $newTenNguoiDung = $_POST['HoVaTen'];
	$newTenDangNhap = $_POST['TenDangNhap'];
    $newMatKhau = $_POST['MatKhau'];
    $newDiaChi = $_POST['DiaChi'];

    // Cập nhật dữ liệu trong cơ sở dữ liệu
    $updateSql = "UPDATE `nguoidung` SET TenNguoiDung = '$newTenNguoiDung', TenDangNhap = '$newTenDangNhap' , MatKhau = '$newMatKhau', DiaChi = '$newDiaChi' WHERE MaNguoiDung = '$maNguoiDung'";

    if ($connect->query($updateSql) === TRUE) {
        echo "Cập nhật hồ sơ thành công.";
    } else {
        echo "Lỗi khi cập nhật hồ sơ: " . $connect->error;
    }
}
?>
