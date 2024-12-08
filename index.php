<?php
// Truy vấn dữ liệu
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
// Đóng kết nối
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QL Bài Viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="container">
        <h2 class="text-center">DANH SÁCH NGƯỜI DÙNG</h2>
            <a href="add.php" class="btn btn-success me-2">Thêm mới</a>
            <a href="logout.php" class="btn btn-danger float-end">Đăng xuất</a>
            
        </div>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Mặt khẩu</th>
                    <th scope="col">Loại người dùng</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($users)): ?>
                    <tr>
                        <td colspan="5" class="text-center">Không có người dùng nào!</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($users as $index => $users): ?>
                        <tr>
                            <th scope="row"><?= $index + 1; ?></th>
                            <td><?= htmlspecialchars($users['username']); ?></td>
                            <td><?= htmlspecialchars($users['password']); ?></td>
                            <td><?= htmlspecialchars($users['role']); ?></td>
                            <td>
                                <a href="detail.php?id=<?= $index + 1; ?>" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Trước</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Sau</a>
                </li>
            </ul>
        </nav>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>