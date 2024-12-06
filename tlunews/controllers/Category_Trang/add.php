<?php
require_once 'D:\CONGNGHEWEB\laragon\www\CSE-485-Lab2-main\tlunews\Database.php';

$success = false;
$name = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name']; // Lấy giá trị từ form

    // Thêm danh mục vào cơ sở dữ liệu
    $sql = "INSERT INTO categories (name) VALUES (:name)";
    $stmt = Database::getInstance()->getConnection()->prepare($sql);
    $stmt->bindParam(':name', $name);

    if ($stmt->execute()) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Danh mục</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // Hiển thị thông báo thêm thành công nếu $success = true
        <?php if ($success): ?>
        window.onload = function() {
            alert('Thêm danh mục thành công!');
            window.location.href = 'CategoryController.php'; // Chuyển hướng sau khi nhấn OK
        }
        <?php endif; ?>
    </script>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Thêm Danh mục Mới</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục:</label>
            <!-- Giữ lại giá trị đã nhập trong ô input -->
            <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>" required>
        </div>
        <div class="d-flex justify-content-start">
            <!-- Nút Thêm -->
            <button type="submit" class="btn btn-success me-2">Thêm</button>
            <!-- Nút Quay lại -->
            <a href="CategoryController.php" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>

<!-- Thêm Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
