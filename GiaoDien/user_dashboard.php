<?php
// Bắt đầu hoặc tiếp tục phiên làm việc, cho phép sử dụng biến $_SESSION
session_start();

// Kiểm tra xem người dùng có vai trò 'user' hay không
if ($_SESSION['role'] != 'user') {
    // Nếu không phải user thông thường, chuyển hướng đến trang admin_dashboard.php
    header("Location: admin_dashboard.php");
    // Kết thúc script để đảm bảo không có mã nào được thực thi sau lệnh chuyển hướng
    exit();
}

// Nếu là user thông thường, chuyển hướng đến trang web adsmartify.net
header("Location: ../LamBaiThi/index.php");
// Lưu ý: Thiếu dấu chấm phẩy ở cuối dòng này, nên thêm vào để tránh lỗi
?>