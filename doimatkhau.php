<link rel="stylesheet" href="css/style_dangnhap.css">

<script>
    function hienThiMatKhau() {
        var matKhauCu = document.getElementsByName('MatKhauCu')[0];
        var matKhauMoi = document.getElementsByName('MatKhauMoi')[0];
        var xacNhanMatKhauMoi = document.getElementsByName('XacNhanMatKhauMoi')[0];

        if (matKhauCu.type === 'password') {
            matKhauCu.type = 'text';
            matKhauMoi.type = 'text';
            xacNhanMatKhauMoi.type = 'text';
        } else {
            matKhauCu.type = 'password';
            matKhauMoi.type = 'password';
            xacNhanMatKhauMoi.type = 'password';
        }
    }
</script>

<form  style="margin-top: 180px; margin-left: 345px; margin-bottom: -100px;" class="form-container" action="index.php?do=doimatkhau_xuly" method="post">
	<h3 style="text-align: center;">Đổi Mật Khẩu</h3>
	<input type="hidden" value="<?php echo $_SESSION['MaND']; ?>" name="MaNguoiDung" />
	<input type="password" name="MatKhauCu" placeholder="Mật Khẩu Cũ" />
	<br>
	<input type="password" name="MatKhauMoi" placeholder="Mật Khẩu Mới"/>
	<br>
	<input type="password" name="XacNhanMatKhauMoi" placeholder="Xác Nhận Mật Khẩu"/>

	<div style="display: inline-block;">
		<input style="float: right;" type="submit" value="Cập nhật mật khẩu" />
		<input style="float: right; margin: 15px 10px 0 0;" type="button" value="Hiển thị mật khẩu" onclick="hienThiMatKhau()" />
	</div>
</form>