<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="container mt-5">
        <h2 class="text-center">Đăng Nhập</h2>
        <form action="process_login.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="user" class="form-label">Tài khoản</label>
                <input type="text" name="user" id="user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Mật khẩu</label>
                <input type="password" name="pass" id="pass" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>
    </main>
</body>

</html>
