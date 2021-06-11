<?php 
	//start session
	session_start();
	// load file Connection 
	include "../application/Connection.php";

	//load file Controller
	include "../application/Controller.php";
 ?>

 	<!-- load động mvc -->
 	<?php
 		// lấy biến controller truyền url 
 		$controller=isset($_GET["controller"])? $_GET["controller"]:"Home";
 		$action=isset($_GET["action"])? $_GET["action"]:"index";
 		// gắn thêm các chuỗi để thành một đường dẫn  file controller;
 		//ham ucfirst() viet hoa ki tu dau tien
 		$fileController="controllers/".ucfirst($controller)."Controller.php";
 		$className=ucfirst($controller)."Controller";
 		if(file_exists($fileController)){
 			include $fileController;
 			$obj=new $className();
 			//goi action
 			$obj->$action();
 		}else{
 			die("$fileController không tồn tại");
 		}
 	 ?>

