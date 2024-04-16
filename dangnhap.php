<link rel="stylesheet" href="css/style_dangnhap.css">

<script>
    function hienThiMatKhau() {
        var matKhau = document.getElementsByName('MatKhau')[0];

        if (matKhau.type === 'password') {
            matKhau.type = 'text';
        } else {
            matKhau.type = 'password';
        }
    }
</script>

<form  style="margin-top: 170px; margin-left: 345px; margin-bottom: -100px;" class="form-container" action="index.php?do=dangnhap_xuly" method="post">
	<h3 style="text-align: center;">Đăng nhập</h3>
	<input type="text" id="TenDangNhap" name="TenDangNhap" placeholder="Tên Đăng Nhập" required>
	<br>
	<input type="password" id="MatKhau" name="MatKhau" placeholder="Mật khẩu" required>
	<input style="margin-top: 15px;" type="button" value="Hiển thị mật khẩu" onclick="hienThiMatKhau()" />
	<input type="submit" value="Đăng nhập"></input>
</form>