<?php
// Kết nối cơ sở dữ liệu
try {
    $conn = new PDO("mysql:host=localhost;dbname=tlunews.sql", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ form
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $role = $_POST['role'] ?? '';

        // Kiểm tra tính hợp lệ
        if (empty($username)) {
            $errors[] = "Tên người dùng không được để trống.";
        }
        if (empty($password)) {
            $errors[] = "Mật khẩu không được để trống.";
        }
        if (empty($role)) {
            $errors[] = "Loại người dùng không được để trống.";
        }

        // Nếu không có lỗi, thêm vào cơ sở dữ liệu
        if (empty($errors)) {
            $sql = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':role', $role);

            if ($stmt->execute()) {
                // Chuyển hướng về trang danh sách sau khi thêm thành công
                header("Location: index.php");
                exit();
            } else {
                $errors[] = "Lỗi: Không thể thêm người dùng.";
            }
        }
    }
} catch (PDOException $e) {
    die("Lỗi: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="container">
        <h2 class="text-center mt-4">Thêm người dùng mới</h2>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="add.php">
            <div class="mb-3">
                <label for="username" class="form-label">Tên người dùng</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($_POST['username'] ?? ''); ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= htmlspecialchars($_POST['password'] ?? ''); ?>">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Loại người dùng</label>
                <select class="form-control" id="role" name="role">
                    <option value="" <?= empty($_POST['role']) ? 'selected' : ''; ?>>-- Chọn loại người dùng --</option>
                    <option value="Admin" <?= ($_POST['role'] ?? '') === 'Admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="User" <?= ($_POST['role'] ?? '') === 'User' ? 'selected' : ''; ?>>User</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Hủy</a>
                <button type="submit" class="btn btn-primary">Thêm người dùng</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
