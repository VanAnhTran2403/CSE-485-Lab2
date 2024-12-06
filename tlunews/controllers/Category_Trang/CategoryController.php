<?php
require_once 'D:\CONGNGHEWEB\laragon\www\CSE-485-Lab2-main\tlunews\Database.php';

class CategoryController
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // Lấy tất cả danh mục
    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        // Trả về tất cả các dòng dữ liệu dưới dạng mảng
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Khởi tạo CategoryController
$categoryController = new CategoryController();

// Lấy danh sách danh mục
$categories = $categoryController->getAllCategories();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Danh Mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Thêm Font Awesome để sử dụng các icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .table th:nth-child(1), .table td:nth-child(1) {
            text-align: center;
            width: 10%;
        }
        .table th:nth-child(3), .table td:nth-child(3) {
            text-align: center;
            width: 12%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4"><b>Danh Sách Danh Mục</b></h1>

    <a href="add.php" class="btn btn-primary mb-3">Thêm Danh mục</a>

    <?php
    // Kiểm tra thông báo từ URL
    if (isset($_GET['message'])) {
        $message = $_GET['message'];

        if ($message == 'delete_success') {
            echo '<div class="alert alert-success">Xóa danh mục thành công!</div>';
        } elseif ($message == 'delete_error') {
            echo '<div class="alert alert-danger">Có lỗi xảy ra khi xóa danh mục!</div>';
        }
    }
    ?>

    <?php if ($categories): ?>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th class="text-center">Tên danh mục</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo htmlspecialchars($category['id']); ?></td>
                    <td><?php echo htmlspecialchars($category['name']); ?></td>
                    <td>
                        <!-- Thêm icon cho các thao tác -->
                        <a href="detail.php?id=<?php echo $category['id']; ?>" class="btn btn-info btn-sm">
                            <i class="fa-solid fa-eye"></i> <!-- Icon Xem chi tiết -->
                        </a>
                        <a href="edit.php?id=<?php echo $category['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen"></i> <!-- Icon Sửa -->
                        </a>
                        <a href="delete.php?id=<?php echo $category['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">
                            <i class="fa-solid fa-trash"></i> <!-- Icon Xóa -->
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có danh mục nào trong cơ sở dữ liệu.</p>
    <?php endif; ?>
</div>

<!-- Thêm Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
