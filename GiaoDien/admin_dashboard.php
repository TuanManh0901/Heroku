<?php
// Bắt đầu hoặc tiếp tục phiên làm việc, cho phép sử dụng biến $_SESSION
session_start();

// Kiểm tra xem người dùng có vai trò 'admin' hay không
if ($_SESSION['role'] != 'admin') {
    // Nếu không phải admin, chuyển hướng đến trang user_dashboard.php
    header("Location: user_dashboard.php");
    // Kết thúc script để đảm bảo không có mã nào được thực thi sau lệnh chuyển hướng
    exit();
}

// Nếu là admin, chuyển hướng đến trang chủ Google
header("Location: ../ThemCauHoi/index.php");
// Kết thúc script sau khi chuyển hướng
exit();
?>