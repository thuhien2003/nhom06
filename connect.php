<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="SHOPSACHh";

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
else {
    echo "Kết nối thành công với database 'SHOPSACHh'! <br> ";
}


// Đóng kết nối
// $conn->close();
?>