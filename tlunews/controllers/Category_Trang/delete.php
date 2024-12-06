<?php
require_once 'D:\CONGNGHEWEB\laragon\www\CSE-485-Lab2-main\tlunews\Database.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Kết nối cơ sở dữ liệu
    $db = Database::getInstance()->getConnection();

    try {
        // Kiểm tra xem ID có tồn tại trong cơ sở dữ liệu
        $sql_check = "SELECT * FROM categories WHERE id = :id";
        $stmt_check = $db->prepare($sql_check);
        $stmt_check->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt_check->execute();

        if ($stmt_check->rowCount() > 0) {
            // Xóa các bài viết liên quan trong bảng news
            $sql_delete_news = "DELETE FROM news WHERE category_id = :category_id";
            $stmt_delete_news = $db->prepare($sql_delete_news);
            $stmt_delete_news->bindParam(':category_id', $id, PDO::PARAM_INT);
            $stmt_delete_news->execute();

            // Thực hiện xóa danh mục
            $sql_delete_category = "DELETE FROM categories WHERE id = :id";
            $stmt_delete_category = $db->prepare($sql_delete_category);
            $stmt_delete_category->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt_delete_category->execute();

            // Chuyển hướng với thông báo thành công
            header("Location: CategoryController.php?message=delete_success");
            exit;
        } else {
            // Nếu không tìm thấy bản ghi
            header("Location: CategoryController.php?message=delete_error");
            exit;
        }
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Lỗi khi xóa danh mục: " . $e->getMessage();
    }
} else {
    // Nếu ID không hợp lệ
    header("Location: CategoryController.php?message=invalid_id");
    exit;
}
?>
