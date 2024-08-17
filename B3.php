<!DOCTYPE html>
<html>
<head>
    <title>PHP Math Operations</title>
</head>
<body>
    <h2>PHP Math Operations</h2>
    <form method="POST">
        Số thứ nhất: <input type="number" name="num1" required><br><br>
        Số thứ hai: <input type="number" name="num2" required><br><br>
        <input type="submit" name="submit" value="Tính toán">
    </form>

    <?php
    // Hàm tính tổng 2 số
    function tinhTong($a, $b) {
        return $a + $b;
    }

    // Hàm tính hiệu 2 số
    function tinhHieu($a, $b) {
        return $a - $b;
    }

    // Hàm tính tích 2 số
    function tinhTich($a, $b) {
        return $a * $b;
    }

    // Hàm tính thương 2 số
    function tinhThuong($a, $b) {
        if ($b == 0) {
            return "Không thể chia cho 0";
        }
        return $a / $b;
    }

    // Hàm kiểm tra số nguyên tố
    function kiemTraSoNguyenTo($n) {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Hàm kiểm tra số chẵn
    function kiemTraSoChan($n) {
        return $n % 2 == 0;
    }

    // Xử lý khi người dùng nhập số
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h3>Kết quả:</h3>";
        echo "Tổng của $num1 và $num2 là: " . tinhTong($num1, $num2) . "<br>";
        echo "Hiệu của $num1 và $num2 là: " . tinhHieu($num1, $num2) . "<br>";
        echo "Tích của $num1 và $num2 là: " . tinhTich($num1, $num2) . "<br>";
        echo "Thương của $num1 và $num2 là: " . tinhThuong($num1, $num2) . "<br><br>";

        echo "Số $num1 có phải là số nguyên tố? " . (kiemTraSoNguyenTo($num1) ? "Có" : "Không") . "<br>";
        echo "Số $num1 có phải là số chẵn? " . (kiemTraSoChan($num1) ? "Có" : "Không") . "<br><br>";

        echo "Số $num2 có phải là số nguyên tố? " . (kiemTraSoNguyenTo($num2) ? "Có" : "Không") . "<br>";
        echo "Số $num2 có phải là số chẵn? " . (kiemTraSoChan($num2) ? "Có" : "Không") . "<br>";
    }
    ?>
</body>
</html>
