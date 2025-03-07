<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5 mb-5">
    <!-- Welcome Banner -->
    <div class="banner mb-5">
        <div class="card border-0 shadow-lg overflow-hidden position-relative">
            <div class="row g-0 align-items-center">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="card-body p-5 text-center text-md-start">
                        <h1 class="display-5 fw-bold text-dark mb-3 animate__animated animate__fadeIn">
                            Khám Phá Công Nghệ Đỉnh Cao
                        </h1>
                        <p class="lead text-muted mb-4 animate__animated animate__fadeIn animate__delay-1s">
                            Điện thoại, laptop và phụ kiện hiện đại với giá tốt nhất - 
                            chất lượng vượt trội, dịch vụ tận tâm!
                        </p>
                        <a href="/Product/" 
                           class="btn btn-primary btn-lg px-5 py-3 transition-all animate__animated animate__fadeIn animate__delay-2s">
                            <i class="fas fa-shopping-cart me-2"></i>Khám Phá Ngay
                        </a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <img src="https://marketingtoancau.com/files/product/thiet-ke-banner-chuyen-nghiep-cho-cua-hang-dien-thoai-nhat-nam-mobile-dqovvmz5.jpg" 
                         class="img-fluid w-100 banner-img" 
                         alt="Tech Products"
                         style="height: 400px; object-fit: cover;">
                </div>
            </div>
            <div class="banner-overlay"></div>
        </div>
    </div>

    <!-- Product Listing -->
    <div class="card shadow-lg border-0 product-listing">
        <div class="card-header bg-gradient-dark text-white d-flex justify-content-between align-items-center">
            <h1 class="h4 mb-0 fw-bold">Danh Sách Sản Phẩm</h1>
            <a href="/Product/add" class="btn btn-success btn-sm transition-all px-4">
                <i class="fas fa-plus me-2"></i>Thêm Sản Phẩm
            </a>
        </div>
        <div class="card-body p-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($products as $product): ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm transition-all hover-card border-0">
                            <!-- Product Image -->
                            <div class="card-img-top position-relative overflow-hidden">
                                <?php if ($product->image): ?>
                                    <img src="/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                                         class="img-fluid w-100 transition-scale" 
                                         alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>"
                                         style="height: 220px; object-fit: cover;">
                                <?php else: ?>
                                    <div class="d-flex align-items-center justify-content-center bg-light"
                                         style="height: 220px;">
                                        <span class="text-muted fw-bold">No Image</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Product Details -->
                            <div class="card-body p-3">
                                <h5 class="card-title mb-2">
                                    <a href="/Product/show/<?php echo $product->id; ?>" 
                                       class="text-decoration-none text-dark fw-bold hover-link">
                                        <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                </h5>
                                <p class="card-text text-muted small text-truncate-3 mb-2">
                                    <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                                <div class="mb-3">
                                    <span class="text-danger fw-bold fs-5">
                                        <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                                    </span>
                                </div>
                                <span class="badge bg-info text-white px-3 py-1">
                                    <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            </div>

                            <!-- Actions -->
                            <div class="card-footer bg-transparent border-0 p-3 pt-0 d-flex gap-2">
                                <a href="/Product/edit/<?php echo $product->id; ?>" 
                                   class="btn btn-outline-warning btn-sm flex-grow-1 transition-all">
                                    <i class="fas fa-edit me-1"></i>Sửa
                                </a>
                                <a href="/Product/delete/<?php echo $product->id; ?>" 
                                   class="btn btn-outline-danger btn-sm flex-grow-1 transition-all"
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                    <i class="fas fa-trash me-1"></i>Xóa
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* General Styles */
    .card {
        border-radius: 20px;
        overflow: hidden;
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    /* Banner Styles */
    .banner .card {
        background: linear-gradient(135deg, #ffffff, #f1f3f5);
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0, 123, 255, 0.1), transparent);
        pointer-events: none;
    }

    .banner-img {
        transition: transform 0.5s ease;
    }

    .banner:hover .banner-img {
        transform: scale(1.03);
    }

    .btn-primary {
        background: #007bff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
    }

    .btn-primary:hover {
        background: #0056b3;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
    }

    /* Product Listing Styles */
    .bg-gradient-dark {
        background: linear-gradient(90deg, #212529, #343a40);
    }

    .card-header {
        padding: 1.5rem 2rem;
    }

    .hover-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .transition-scale {
        transition: transform 0.4s ease;
    }

    .card-img-top:hover .transition-scale {
        transform: scale(1.1);
    }

    .btn-sm {
        padding: 0.6rem 1.2rem;
        border-radius: 8px;
        font-size: 0.9rem;
    }

    .btn-outline-warning, .btn-outline-danger {
        border-width: 2px;
    }

    .btn-outline-warning:hover {
        background: #ffc107;
        color: white;
    }

    .btn-outline-danger:hover {
        background: #dc3545;
        color: white;
    }

    .hover-link:hover {
        color: #007bff !important;
    }

    .text-truncate-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Responsive Adjustments */
    @media (max-width: 767px) {
        .banner img {
            height: 250px;
        }
        .banner .card-body {
            padding: 2.5rem;
        }
        .display-5 {
            font-size: 2rem;
        }
        .btn-lg {
            padding: 0.6rem 1.2rem;
        }
    }
</style>

<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<?php include 'app/views/shares/footer.php'; ?>