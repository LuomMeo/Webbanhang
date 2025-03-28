<?php
// Require SessionHelper and other necessary files
require_once('app/config/database.php');
require_once('app/models/ProductModel.php');
require_once('app/models/CategoryModel.php');
require_once('app/helpers/SessionHelper.php');

class ProductController
{
    private $productModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }

    // Kiểm tra quyền Admin
    private function isAdmin() {
        return SessionHelper::isAdmin();
    }

    // Hiển thị danh sách sản phẩm (mở cho tất cả)
    public function index() {
        $products = $this->productModel->getProducts();
        include 'app/views/product/list.php';
    }

    // Xem chi tiết sản phẩm (mở cho tất cả)
    public function show($id) {
        $product = $this->productModel->getProductById($id);
        if ($product) {
            include 'app/views/product/show.php';
        } else {
            $_SESSION['error'] = "Không tìm thấy sản phẩm.";
            header('Location: /Product');
            exit;
        }
    }

    // Thêm sản phẩm (chỉ Admin)
    public function add() {
        if (!$this->isAdmin()) {
            $_SESSION['error'] = "Bạn không có quyền truy cập chức năng này!";
            header('Location: /Product');
            exit;
        }
        $categories = (new CategoryModel($this->db))->getCategories();
        include 'app/views/product/add.php';
    }

    // Lưu sản phẩm mới (chỉ Admin)
    public function save() {
        if (!$this->isAdmin()) {
            $_SESSION['error'] = "Bạn không có quyền truy cập chức năng này!";
            header('Location: /Product');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? '';
            $category_id = $_POST['category_id'] ?? null;

            $result = $this->productModel->addProduct($name, $description, $price, $category_id);

            if (is_array($result)) {
                // Có lỗi validation
                $_SESSION['errors'] = $result;
                $_SESSION['old'] = [
                    'name' => $name,
                    'description' => $description,
                    'price' => $price,
                    'category_id' => $category_id
                ];
                header('Location: /Product/add');
            } else {
                // Thêm thành công
                $_SESSION['success'] = "Thêm sản phẩm thành công!";
                header('Location: /Product');
            }
            exit;
        }
    }

    // Sửa sản phẩm (chỉ Admin)
    public function edit($id) {
        if (!$this->isAdmin()) {
            $_SESSION['error'] = "Bạn không có quyền truy cập chức năng này!";
            header('Location: /Product');
            exit;
        }

        $product = $this->productModel->getProductById($id);
        if (!$product) {
            $_SESSION['error'] = "Không tìm thấy sản phẩm.";
            header('Location: /Product');
            exit;
        }

        $categories = (new CategoryModel($this->db))->getCategories();
        include 'app/views/product/edit.php';
    }

    // Cập nhật sản phẩm (chỉ Admin)
    public function update() {
        if (!$this->isAdmin()) {
            $_SESSION['error'] = "Bạn không có quyền truy cập chức năng này!";
            header('Location: /Product');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? '';
            $category_id = $_POST['category_id'] ?? null;

            if ($this->productModel->updateProduct($id, $name, $description, $price, $category_id)) {
                $_SESSION['success'] = "Cập nhật sản phẩm thành công!";
                header('Location: /Product');
            } else {
                $_SESSION['error'] = "Có lỗi xảy ra khi cập nhật sản phẩm.";
                header("Location: /Product/edit/$id");
            }
            exit;
        }
    }

    // Xóa sản phẩm (chỉ Admin)
    public function delete($id) {
        if (!$this->isAdmin()) {
            $_SESSION['error'] = "Bạn không có quyền truy cập chức năng này!";
            header('Location: /Product');
            exit;
        }

        if ($this->productModel->deleteProduct($id)) {
            $_SESSION['success'] = "Xóa sản phẩm thành công!";
        } else {
            $_SESSION['error'] = "Có lỗi xảy ra khi xóa sản phẩm.";
        }
        header('Location: /Product');
        exit;
    }

    public function category($categoryId)
    {
        // Lấy thông tin danh mục
        $categoryModel = new CategoryModel($this->db);
        $category = $categoryModel->getCategoryById($categoryId);
        
        if (!$category) {
            $_SESSION['error'] = "Không tìm thấy danh mục.";
            header('Location: /Product');
            exit;
        }

        // Lấy sản phẩm theo danh mục
        $products = $this->productModel->getProductsByCategory($categoryId);
        
        // Truyền thêm thông tin danh mục để hiển thị
        $categoryInfo = $category;
        
        include 'app/views/product/list.php';
    }
}
?>