<?php 
	$this->layoutPath = "Layout.php";
 ?>

<!-- main-content -->
<div class="main-content">
	<div class="container">
		<div style="margin-top: 30px;">
			<ul class="breadcrumb">
	            <li class="breadcrumb-item">
	                <a href="index.php">Trang chủ </a></li>
	            <li class="breadcrumb-item">
	               Tin tức </li>
	        </ul>
	    </div>
		<div class="row">
			<div class="title pl-3 pb-4 pt-3 col-xs-12 col-sm-12 col-md-12 col-lg-12 text-primary"><?php echo $data->title; ?></div>
			<div class="date pl-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">Ngày đăng: <?php echo $data->time; ?></div>
			<div class="content pl-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p id="fix-img"><?php echo $data->content; ?></p>
			</div>
		</div>
	</div>
</div>
<!-- end-main-content -->
				