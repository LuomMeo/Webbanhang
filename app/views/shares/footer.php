<footer class="footer bg-dark text-white mt-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Contact Information Column -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase fw-bold mb-4 position-relative">
                    Quản Lý Sản Phẩm
                    <span class="underline-effect"></span>
                </h5>
                <p class="text-muted">
                    Hệ thống quản lý sản phẩm tối ưu giúp bạn theo dõi và cập nhật 
                    thông tin sản phẩm một cách chuyên nghiệp và hiệu quả.
                </p>
                <div class="mt-3">
                    <small class="text-muted">
                        <i class="fas fa-envelope me-2"></i>Email: support@quanlysp.com
                    </small>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase fw-bold mb-4 position-relative">
                    Liên Kết Nhanh
                    <span class="underline-effect"></span>
                </h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/Product/" class="text-white text-decoration-none hover-link">
                            <i class="fas fa-angle-right me-2"></i>Danh sách sản phẩm
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="/Product/add" class="text-white text-decoration-none hover-link">
                            <i class="fas fa-angle-right me-2"></i>Thêm sản phẩm
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media Column -->
            <div class="col-lg-4 col-md-12">
                <h5 class="text-uppercase fw-bold mb-4 position-relative">
                    Kết Nối Với Chúng Tôi
                    <span class="underline-effect"></span>
                </h5>
                <div class="social-icons d-flex gap-3">
                    <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link twitter" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="copyright py-3 bg-gradient-dark text-center">
        <p class="mb-0">
            © 2025 Quản Lý Sản Phẩm. All rights reserved. 
            <span class="ms-2">Designed with <i class="fas fa-heart text-danger"></i></span>
        </p>
    </div>
</footer>

<!-- Custom CSS -->
<style>
    .footer {
        background: linear-gradient(180deg, #212529, #1a1f23);
    }

    .underline-effect {
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 2px;
        background: #0d6efd;
        transition: width 0.3s ease;
    }

    h5:hover .underline-effect {
        width: 100px;
    }

    .hover-link {
        transition: all 0.3s ease;
    }

    .hover-link:hover {
        color: #0d6efd !important;
        padding-left: 10px;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .facebook:hover { background: #3b5998; }
    .twitter:hover { background: #1da1f2; }
    .instagram:hover { background: #e1306c; }

    .bg-gradient-dark {
        background: linear-gradient(180deg, #1a1f23, #15191c);
    }

    .text-muted {
        color: rgba(255, 255, 255, 0.7) !important;
    }
</style>

<!-- Font Awesome (update to latest version) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />