<?php
	session_start();
	
	include_once "cauhinh.php";
	
	include_once "thuvien.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mỳ cay </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="scripts/ckeditor/ckeditor.js"></script>
		

		<style>
			#scrollToTopBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				right: 20px;
				z-index: 99;
			}
		</style>
	</head>
	<body>
		<div id="TrangWeb">
			<div id="PhanDau">	
				<div id = "logo">
					<img src = "image/MyCay_WB.jpg" >
				</div>
				<?php
					if (isset($_SESSION['QuyenHan']) && isset($_SESSION['HoTen'])) {
						if ($_SESSION['QuyenHan'] == 0) {
							echo "<br><br><br><br><br>Quản Lý ".$_SESSION['HoTen']." &nbsp;&nbsp;|| &nbsp;&nbsp;";
							echo '<a href="index.php?do=dangxuat">Đăng xuất</a>'."&nbsp;&nbsp;";
						} else {
							echo "<br><br><br><br><br>Xin chào khách hàng ".$_SESSION['HoTen']." &nbsp;&nbsp;|| &nbsp;&nbsp;";
							echo '<a href="index.php?do=dangxuat">Đăng xuất</a>'."&nbsp;&nbsp;";
						}
					}
				?>				
			</div>
			<div id="PhanGiua" style="">
				<div id="BenTrai">
					<?php
					//hiện menu quản lý
					if(!isset($_SESSION['QuyenHan']))
					{
						echo '<h3><a href="#" onclick="scrollToTop()">Trang chủ</h3>';
							echo '<ul>';
								echo '<li><a " href="index.php?do=dangnhap">Đăng nhập</a></li>';
								echo '<li><a href="index.php?do=dangky">Đăng ký</a></li>';
							echo '</ul>';
					}
					elseif ($_SESSION['QuyenHan'] == 0)
					{
						// menu quản lý
						echo '<h3>Quản lý</h3>';
						echo '<ul>';						
						echo '<li><a href="index.php?do=monan_them">Đăng Món Ăn Mới</a></li>';
						echo '<li><a href="index.php?do=dsmonan">Danh sách Món Hiện Tại</a></li>';
						echo '<li><a href="index.php?do=nguoidung">Danh sách người dùng</a></li>';
						echo '</ul>';
					} else {
						// menu khách hàng
						echo '<h3>Khách Hàng</h3>';
						echo '<ul>';						
						echo '<li><a href="index.php?do=dsmonan_khachhang&id='. $_SESSION['MaND'].'">Danh sách Món Ăn</a></li>';
						echo '<li><a href="index.php?do=giohang_xem&id='. $_SESSION['MaND'].'">Giỏ Hàng</a></li>';
						echo '</ul>';
					}
					//hiện menu hồ sơ cá nhân					
					if(isset($_SESSION['HoTen']))
					{
						echo '<h3>Hồ sơ cá nhân</h3>';
						echo '<ul>';						
							echo '<li><a href="index.php?do=hosocanhan">Hồ sơ cá nhân</a></li>';
							echo '<li><a href="index.php?do=doimatkhau">Đổi mật khẩu</a></li>';
						echo '</ul>';
					}								
					?>
				</div>
				<div id="BenPhai">
					<?php
						// Kiểm tra nếu trang là trang đăng nhập
						$do = isset($_GET['do']) ? $_GET['do'] : "home";
                    
						if ($do === 'dangnhap') {
							include 'dangnhap.php';
						} else {
							include $do . ".php";
						}
					?>
				</div>
			</div>
			<div id="PhanCuoi">
				
				<div class="lienhe">Liên hệ đặt giao: 0799512941 - Quản Lý Thùy Linh </div>
			</div>
			<script>
					// Hiển thị nút button khi cuộn xuống một khoảng cụ thể
					window.onscroll = function() {scrollFunction()};

					function scrollFunction() {
						if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
							document.getElementById("scrollToTopBtn").style.display = "block";
						} else {
							document.getElementById("scrollToTopBtn").style.display = "none";
						}
					}

					// Xử lý sự kiện khi nút button được nhấp vào để cuộn lên đầu trang
					document.getElementById("scrollToTopBtn").onclick = function() {
						scrollToTop();
					};

					function scrollToTop() {
						
						window.scrollTo({
							top:0,
							behavior: 'smooth'//cuộn lại vs hoạt ảnh mượt hơn

						});
					}

			</script>
				<button id="scrollToTopBtn" onclick="scrollToTop()"  >
					<img src="image/nut_cuon_len.jpg" alt="Icon" style="width: 50px; height: 50px;">
				</button>
		</div>
	</body>
</html>