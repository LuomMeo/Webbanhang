<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary shadow-lg fixed-top">
            <div class="container-fluid px-4">
                <!-- Brand Logo -->
                <a class="navbar-brand fw-bold d-flex align-items-center transition-all" href="/">
                    <i class="fas fa-box-open me-2 animate__animated animate__pulse animate__infinite"></i>
                    <span>Quản Lý Sản Phẩm</span>
                </a>

                <!-- Toggler Button -->
                <button class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Items -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <!-- Main Menu -->
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <a class="nav-link transition-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" 
                               href="/Product/">
                                <i class="fas fa-list me-1"></i>Danh sách sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link transition-link" 
                               href="/Product/add">
                                <i class="fas fa-plus-circle me-1"></i>Thêm sản phẩm
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle transition-link" 
                               href="#" 
                               id="categoryDropdown" 
                               role="button" 
                               data-bs-toggle="dropdown" 
                               aria-expanded="false">
                                <i class="fas fa-folder-open me-1"></i>Danh mục
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark animate__animated animate__fadeIn" 
                                aria-labelledby="categoryDropdown">
                                <li><a class="dropdown-item" href="/Category/phones">Điện thoại</a></li>
                                <li><a class="dropdown-item" href="/Category/laptops">Laptop</a></li>
                                <li><a class="dropdown-item" href="/Category/accessories">Phụ kiện</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Actions -->
                    <ul class="navbar-nav gap-3 align-items-center">
                        <!-- Search Form -->
                        <li class="nav-item">
                            <form class="d-flex" action="/Product/search" method="GET">
                                <input class="form-control me-2 search-input" 
                                       type="search" 
                                       placeholder="Tìm kiếm..." 
                                       aria-label="Search"
                                       name="query">
                                <button class="btn btn-outline-light transition-all" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </li>
                        <!-- Cart -->
                        <li class="nav-item">
                            <a class="nav-link transition-link position-relative" href="/Cart/">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle-y rounded-circle">3</span>
                            </a>
                        </li>
                        <!-- User Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle transition-link d-flex align-items-center" 
                               href="#" 
                               id="userDropdown" 
                               role="button" 
                               data-bs-toggle="dropdown" 
                               aria-expanded="false">
                                <i class="fas fa-user-circle me-1"></i>Tài khoản
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end animate__animated animate__fadeIn" 
                                aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/Profile/">Hồ sơ</a></li>
                                <li><a class="dropdown-item" href="/Orders/">Đơn hàng</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="/Logout/">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 pt-5">
        <!-- Main content will go here -->
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #007bff, #004085);
        }

        .navbar {
            padding: 1.25rem 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.75rem;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            color: #fff !important;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            padding: 0.6rem 1.5rem !important;
            border-radius: 8px;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #fff !important;
            background: rgba(255, 255, 255, 0.15);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.25);
            color: #fff !important;
        }

        .transition-link {
            transition: all 0.3s ease;
        }

        .dropdown-menu {
            background: #004085;
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .dropdown-item {
            color: rgba(255, 255, 255, 0.9);
            padding: 0.5rem 1.5rem;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .search-input {
            border-radius: 20px 0 0 20px;
            border: none;
            padding: 0.5rem 1rem;
        }

        .btn-outline-light {
            border-radius: 0 20px 20px 0;
            padding: 0.5rem 1rem;
        }

        .btn-outline-light:hover {
            background: #fff;
            color: #007bff;
        }

        .badge {
            font-size: 0.7rem;
            padding: 0.3em 0.5em;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                padding: 1rem;
                background: rgba(0, 0, 0, 0.2);
                border-radius: 10px;
                margin-top: 1rem;
            }
            .search-input {
                width: 100%;
                margin-bottom: 0.5rem;
            }
            .btn-outline-light {
                width: 100%;
                border-radius: 20px;
            }
        }
    </style>
</body>
</html>