<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: left;
        }
        th, td {
            width: 33%;
        }
    </style>
</head>
<body>

<?php
    // Tổng số sách
    $totalBooks = 100;

    // Số dòng hiển thị trên mỗi trang
    $booksPerPage = 10;

    // Tính tổng số trang cần có
    $totalPages = ceil($totalBooks / $booksPerPage);

    // Xác định trang hiện tại từ URL, mặc định là trang 1
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Tính chỉ số bắt đầu và kết thúc của sách trên trang hiện tại
    $startIndex = ($currentPage - 1) * $booksPerPage;
    $endIndex = min($startIndex + $booksPerPage - 1, $totalBooks - 1);
?>

<h2>Danh sách sách</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên Sách</th>
        <th>Nội Dung Sách</th>
    </tr>
    
    <?php
        // Vòng lặp hiển thị các sách trên trang hiện tại
        for ($i = $startIndex + 1; $i <= $endIndex + 1; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>Tên sách " . $i . "</td>";
            echo "<td>Nội dung sách " . $i . "</td>";
            echo "</tr>";
        }
    ?>
</table>

<div style="margin-top: 20px;">
    <?php
        // Hiển thị nút điều hướng trang
        if ($currentPage > 1) {
            echo '<a href="?page=' . ($currentPage - 1) . '">Trang trước</a> ';
        }

        for ($page = 1; $page <= $totalPages; $page++) {
            if ($page == $currentPage) {
                echo '<strong>' . $page . '</strong> ';
            } else {
                echo '<a href="?page=' . $page . '">' . $page . '</a> ';
            }
        }

        if ($currentPage < $totalPages) {
            echo '<a href="?page=' . ($currentPage + 1) . '">Trang sau</a>';
        }
    ?>
</div>

</body>
</html>
