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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function confirmDelete() {
            return confirm("Bạn có chắc chắn muốn xóa người dùng này?");
        }
    </script>
</head>

<body>
    <main class="container">
        <h2 class="text-center mt-4">Xóa người dùng</h2>
        <div class="alert alert-warning text-center">
            Bạn đang cố gắng xóa người dùng <strong><?= htmlspecialchars($user['username']); ?></strong>. <br>
            Điều này sẽ không thể hoàn tác.
        </div>

        <!-- Form xác nhận xóa -->
        <form method="POST" onsubmit="return confirmDelete();">
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Hủy</a>
                <button type="submit" class="btn btn-danger">Xóa</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
