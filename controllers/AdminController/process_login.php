<?php
session_start();

$valid_credentials = [
    'admin' => '123456',
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        $user = trim($_POST["user"]);
        $pass = trim($_POST["pass"]);

        // Kiểm tra thông tin đăng nhập
        if (isset($valid_credentials[$user]) && $valid_credentials[$user] === $pass) {
            // Đăng nhập thành công
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user;
            header("Location: /CSE-485-Lab2/index.php");
            exit();
        } else {
            // Sai thông tin đăng nhập
            $error = "Tài khoản hoặc mật khẩu không chính xác.";
            header("Location: login.php?error=" . urlencode($error));
            exit();
        }
    }
}

// Nếu truy cập trực tiếp vào file mà không qua POST
header("Location: login.php");
exit();
?>
