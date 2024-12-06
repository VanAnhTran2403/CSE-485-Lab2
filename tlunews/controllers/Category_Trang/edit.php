<?php
require_once 'D:\CONGNGHEWEB\laragon\www\CSE-485-Lab2-main\tlunews\Database.php';

$id = $_GET['id'];
$success = false; // Biến kiểm tra sửa thành công

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    // Cập nhật tên danh mục trong cơ sở dữ liệu
    $sql = "UPDATE categories SET name = :name WHERE id = :id";
    $stmt = Database::getInstance()->getConnection()->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    if ($stmt->execute()) {
        // Gán trạng thái thành công
        $success = true;
    }
}

// Lấy thông tin danh mục hiện tại
$sql = "SELECT * FROM categories WHERE id = :id";
$stmt = Database::getInstance()->getConnection()->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$category = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Danh mục</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // Hiển thị thông báo sửa thành công nếu $success = true
        <?php if ($success): ?>
        window.onload = function() {
            alert('Sửa thông tin thành công!');
            window.location.href = 'CategoryController.php'; // Chuyển hướng sau khi nhấn OK
        }
        <?php endif; ?>
    </script>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Sửa Danh mục</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục:</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($category['name']); ?>" required>
        </div>
        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-warning me-2">Cập nhật</button>
            <a href="CategoryController.php" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>

<!-- Thêm Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
