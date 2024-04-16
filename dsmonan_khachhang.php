<?php
	$sql = "SELECT * FROM `danhsach` WHERE 1";
	$danhsach = $connect->query($sql);
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>

<h3>Danh sách món ăn</h3>
<table class="DanhSach" cellspacing="0" width="590" align="center" valign="top">
    <?php
    $count = 0;
    while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {
        if ($count % 2 == 0) {
            echo "<tr style='text-align: center' bgcolor='#ffffff' >";
        }

        echo "<td onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
        echo "<img style='display:block; margin: 0 auto;' src='" . $dong["AnhMonAn"] . "' width='100' height='100'><br>";
        echo "<strong>" . $dong["TenMonAn"] . "</strong><br>";
        echo "Số lượng: " . $dong["SoLuong"] . "<br>";
        echo "Giá: " . $dong["Gia"] . "<br>";
        echo "<a title='mua hàng' href='index.php?do=khachhang_mua&id=" . $dong["MaMonAn"] . "&hoten=". $_SESSION['HoTen'] ."' onclick='return confirm(\"Bạn có muốn mua món ăn " . $dong['TenMonAn'] . " không?\")'><img src='images/active.png' /></a>";
        echo "<a title='thêm vào giỏ hàng' href='index.php?do=giohang&id=" . $dong["MaMonAn"] . "&ten=" . urlencode($dong["TenMonAn"]) . "&gia=" . $dong['Gia'] . "&sl=1&anh=". $dong['AnhMonAn']."' onclick='return confirm(\"Bạn có muốn thêm món ăn " . $dong['TenMonAn'] . " vào giỏ hàng không?\")'><img src='images/giohang.png' /></a>";
        echo "</td>";

        if ($count % 2 == 1) {
            echo "</tr>";
        }

        $count++;
    }

    // Nếu số lượng món là số lẻ, thêm một ô trống để hoàn thành hàng cuối cùng
    if ($count % 2 == 1) {
        echo "<td></td></tr>";
    }
	
    ?>
</table>

<!-- Neu quan li thi se hien thi nut them mon an, khach hang thi khong -->
<?php
	echo "<h3>FAST FOOD Thùy Linh - uy tín đi đôi chất lượng</h3>";
?>