<?php
$conn = new mysqli("localhost", "root", "", "booking");
if ($conn->connect_error) {
  die("Lỗi kết nối: " . $conn->connect_error);
}
echo "✅ Kết nối MySQL thành công!";
?>