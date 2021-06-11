<!DOCTYPE html>
<html lang="en">

<!-- start-header -->

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css">
    <script src="../assets/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="../assets/frontend/css/style.css">
</head>

<body>
    <!-- start-header -->
    <header>
        <header style="background-color: #036903">
            <div class="container pl-0">
                <div class="row" style="margin-right: 0px">
                    <a href="#"><img src="../assets/frontend/image/vpgt.png" width="100%" height="100%" class="img-rounded" /></a>
                </div>
            </div>
        </header>
    </header>
    <!-- end-header -->

    <!-- nav -->
    <section class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #3291a8; height: 42px;">
        <div class="container-fluid container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse container" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-left: 80px;">
                        <a class="nav-link active" aria-current="page" href="index.php">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=hotline">Đường dây nóng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=search">Tra cứu vi phạm giao thông</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=cost">Mức xử phạt</a>
                    </li>
                </ul>


            </div>
        </div>
    </section>
    <!-- end-nav -->

    <?php echo $this->view; ?>

    <!-- footer -->
    <footer>
        <nav class="navbar" id="navbar-footer">
            <ul>
                <li>
                    <a class="nav-link" href="#">Bản quyền</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Thông tin về Portal</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Liên hệ - Góp ý</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Sơ đồ Cổng</a>
                </li>

            </ul>
        </nav>
        <div class="container">
            <div class="row" id="footer-text">
                <div class="col-lg-12" style="margin-top: 30px;">
                    CỔNG THÔNG TIN ĐIỆN TỬ CÔNG AN THÀNH PHỐ HÀ NỘI
                </div>
                <div class="col-lg-12">
                    Chịu trách nhiệm nội dung: Đ/c Đào Thanh Hải - Phó Giám đốc Công an Thành phố
                </div>
                <div class="col-lg-12">
                    Đia chỉ: 87 Trần Hưng Đạo - Hoàn Kiếm - Hà Nội; SĐT 069.219.6777; E-mail: <a href="#" style="color: red">vanthu_catp@hanoi.gov.vn</a>
                </div>
                <div class="col-lg-12">
                    CỔNG THÔNG TIN ĐIỆN TỬ CÔNG AN THÀNH PHỐ HÀ NỘI
                </div>
            </div>
        </div>
    </footer>
    <!-- end-footer -->

</body>

</html>