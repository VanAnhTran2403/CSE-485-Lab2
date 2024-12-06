<?php
// Include các file cần thiết
require_once 'Database.php'; // File kết nối CSDL
require_once './controllers/AdminController.php'; // Controller quản trị

// Kết nối cơ sở dữ liệu
$database = new Database();
$db = $database->connect(); // Trả về đối tượng PDO
if ($db) {
    echo "Kết nối thành công!";
} else {
    echo "Kết nối thất bại!";
}

// Khởi tạo controller với kết nối database
$adminController = new AdminController($db);

// Xử lý điều hướng (routing)
$action = $_GET['action'] ?? 'listCategories'; // Mặc định hiển thị danh mục

switch ($action) {
    case 'listCategories': // Hiển thị danh sách danh mục
        $adminController->listCategories();
        break;
    case 'addCategory': // Thêm danh mục
        $adminController->addCategory();
        break;
    case 'editCategory': // Sửa danh mục
        $adminController->editCategory();
        break;
    case 'deleteCategory': // Xóa danh mục
        $adminController->deleteCategory();
        break;
    default:
        echo "Hành động không hợp lệ!";
        break;
}
?>
