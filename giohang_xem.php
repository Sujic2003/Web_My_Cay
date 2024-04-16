<h3>Giỏ hàng</h3>
<?php
    $mand = $_GET['id'];
    $sql = "SELECT * FROM giohang WHERE MaNguoiDung = '$mand'";
    $danhsach = $connect->query($sql);
    $num = mysqli_num_rows($danhsach);
    // Nếu có ít nhất một mục trong giỏ hàng
    if ($num > 0) {
?>
    <table class="DanhSach">
        <tr>
            <th>Tên Món Ăn</th>
            <th>Số Lượng</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th colspan="2">Hành động</th>
        </tr>
        <?php
            while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {	
                echo "<tr style='text-align: center'>";
                    echo "<td>" . urldecode($dong['TenMon']) . "</td>";
                    echo "<td>" . $dong['SoLuong'] . "</td>";
                    echo "<td>" . $dong['Gia'] . "</td>";
                    echo "<td><img style='display:block; margin: 0 auto;' src='" . $dong["Anh"] . "'width='100' height='100'></td>";
                    echo "<td align='center'><a href='index.php?do=khachhang_mua&id=" . $dong['MaMonAn'] . "'><img src='images/active.png' /></a></td>";
                    echo "<td align='center'><a href='index.php?do=giohang_xoa&id=" . $dong['MaMonAn'] . "&mand=". $mand ."' onclick='return confirm(\"Bạn có muốn xóa món ăn " . $dong['TenMon'] . " khỏi giỏ hàng không?\")'><img src='images/delete.png' /></a></td>";
                echo "</tr>";
            }
        ?>
    </table>
<?php
    } else {
        echo "<h2>Bạn chưa thêm gì vào giỏ hàng</h2>";
    }
?>
