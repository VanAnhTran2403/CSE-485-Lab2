<?php
require_once 'D:\CONGNGHEWEB\laragon\www\CSE-485-Lab2-main\tlunews\Database.php';

$id = $_GET['id']; // Lấy ID từ URL

$sql = "SELECT * FROM categories WHERE id = :id";
$stmt = Database::getInstance()->getConnection()->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$category = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$category) {
    echo "Danh mục không tồn tại.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Danh mục</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Chi tiết Danh mục</h1>

    <div class="mb-3">
        <strong>ID:</strong> <?php echo htmlspecialchars($category['id']); ?>
    </div>
    <div class="mb-3">
        <strong>Tên danh mục:</strong> <?php echo htmlspecialchars($category['name']); ?>
    </div>

    <a href="CategoryController.php" class="btn btn-primary">Quay lại</a>
</div>

<!-- Thêm Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
