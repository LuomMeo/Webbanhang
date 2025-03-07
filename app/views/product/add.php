<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Thêm sản phẩm mới</h1>
        </div>
        <div class="card-body p-4">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form method="POST" action="/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Tên sản phẩm" required>
                            <label for="name">Tên sản phẩm</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" id="price" name="price" class="form-control" step="0.01" placeholder="Giá" required>
                            <label for="price">Giá (VNĐ)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea id="description" name="description" class="form-control" placeholder="Mô tả" style="height: 100px" required></textarea>
                            <label for="description">Mô tả sản phẩm</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select id="category_id" name="category_id" class="form-select" required>
                                <option value="" selected disabled>Chọn danh mục</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?php echo $category->id; ?>">
                                        <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <label for="category_id">Danh mục</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image" class="form-label">Hình ảnh sản phẩm</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary btn-lg me-2">
                            <i class="fas fa-plus me-2"></i>Thêm sản phẩm
                        </button>
                        <a href="/Product/list" class="btn btn-outline-secondary btn-lg">
                            <i class="fas fa-arrow-left me-2"></i>Quay lại danh sách
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Thêm CSS tùy chỉnh -->
<style>
    .card {
        border-radius: 15px;
        overflow: hidden;
    }
    .card-header {
        padding: 1.5rem;
    }
    .form-control, .form-select {
        border-radius: 10px;
        padding: 0.75rem;
    }
    .form-floating label {
        padding-left: 1rem;
    }
    .btn {
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
    }
    .alert {
        border-radius: 10px;
    }
</style>

<!-- Giả sử bạn đã bao gồm Bootstrap 5 và Font Awesome trong header.php -->
<?php include 'app/views/shares/footer.php'; ?>