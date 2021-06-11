<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name= viewport content= width=device-width initial-scale=1.0>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  	<link rel="stylesheet" type="text/css" href="../assets/admin/css/user.css">
  	<script type="text/javascript" src="../assets/admin/js/user.js"></script>
	<!-- load file ckeditor -->
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
	<title></title>
</head>
<body>
<!-- header -->
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 d-sm-none d-none d-lg-block d-md-block">
				<div class="header-title">
					<h3><a href="index.php">Tra cứu vi phạm giao thông</a></h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="user-login">
					<a href="#" class="btn dropdown-toggle" type="button" data-toggle="dropdown" id="user-main">
						<i class="fas fa-user"></i>&nbsp;
						<span>Tài khoản</span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#"><i class="fas fa-user"></i>&nbsp;Hồ sơ</a>
						</li>
						<li>
							<a href="index.php?controller=login&action=logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- end-header -->

<!-- main -->
<div class="main">
	<div class="container-fluid" style="padding-left: 0">
		<div class="row" style="margin-left: 0">
			<div class="col-lg-2 col-md-2" style="padding-left: 0 ; padding-right: 0px;">
				<div class="sidebar">
					<div class="sidebar-user">
						<div style="padding-right: 15px;"><img src="../assets/admin/images/admin.png"></div>
						<div>
							<div class="sidebar-user-title">Tài Khoản Admin</div>
							<div style="display: flex;">
								<img id="situation-color" idx="0" src="images/Green.png">
								<img id="situation-color" idx="1" src="images/Red.png">
								<img id="situation-color" idx="2" src="images/Yellow.png">
								<div class="choice">
									<select id="select">
										<option idx="0">
											<div class="situation-title" idx="0">Hoạt động</div>
										</option>
										<!-- <option idx="1">
											<div class="situation-title" idx="1">Absent</div>
										</option>
										<option idx="2">
											<div class="situation-title" idx="2"></div> -->
										<!-- </option> -->
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="control" style="color: grey">Quản lý</div>
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="index.php?controller=users"><i class="fas fa-users"></i>&nbsp;Danh sách người dùng</a>
							</li>
							<li>
								<a href="index.php?controller=vehicle"><i class="fas fa-car-alt"></i>&nbsp;Danh sách phương tiện</a>
							</li>
							<li>
								<a href="index.php?controller=hotline"><i class="fas fa-phone"></i>&nbsp;Số đường dây nóng</a>
							</li>
							<li>
								<a href="index.php?controller=news"><i class="fas fa-newspaper"></i>&nbsp;Tin tức</i></a>
							</li>
							<li>
								<a href="index.php?controller=cost"><i class="fas fa-dollar-sign"></i></i>&nbsp;Mức Xử Phạt</i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-10 col-md-10" style="padding: 0;">
				<!-- content -->
				<div class="content">

					<?php echo $this->view; ?>

				</div>
				<!-- end-content -->
			</div>
		</div>
	</div>
</div>
<!-- end-main -->

</body>
</html>