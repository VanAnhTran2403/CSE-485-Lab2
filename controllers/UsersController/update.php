<?php
// Kết nối cơ sở dữ liệu
try {
    $conn = new PDO("mysql:host=localhost;dbname=tlunews.sql", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thực thi câu truy vấn
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // Sử dụng FETCH_ASSOC để lấy kết quả dạng mảng kết hợp
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
    $users = []; // Nếu lỗi, gán mảng rỗng để tránh lỗi tiếp theo
}

// Xử lý cập nhật thông tin
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    // Kiểm tra dữ liệu nhập
    if (empty($username)) {
        $errors[] = "Tên người dùng không được để trống.";
    }
    if (empty($role)) {
        $errors[] = "Loại người dùng không được để trống.";
    }

    if (empty($errors)) {
        try {
            // Cập nhật thông tin người dùng
            $stmt = $conn->prepare("UPDATE users SET username = :username, password = :password, role = :role WHERE id = :id");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // Chuyển hướng về index.php sau khi cập nhật thành công
                header("Location: index.php");
                exit;
            } else {
                $errors[] = "Cập nhật không thành công.";
            }
        } catch (PDOException $e) {
            $errors[] = "Lỗi cơ sở dữ liệu: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="container">
        <h2 class="text-center mt-4">Cập nhật người dùng</h2>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Tên người dùng</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($user['username']); ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= htmlspecialchars($user['password']); ?>">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Loại người dùng</label>
                <select class="form-control" id="role" name="role">
                    <option value="Admin" <?= $user['role'] === 'Admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="User" <?= $user['role'] === 'User' ? 'selected' : ''; ?>>User</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Hủy</a>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
