<?php 
	include "models/HotlineModel.php";
	class HotlineController extends Controller{
		//ke thua class hotlineModel
		use HotlineModel;
		public function index(){
			//so ban ghi tren mot trang
			$recordPerPage = 5;
			//tinh so trang truyen ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view , truyen du lieu ra view
			$this->loadView("hotlineReadView.php",["numPage"=>$numPage,"data"=>$data]);
		}

		public function update(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			//tao bien $action de dua vao thuoc tinh action cua the form
			$action = "index.php?controller=hotline&action=updatePost&id=$id";
			//lay du lieu
			$record = $this->modelGetRecord($id);

			//goi view , truyen du lieu ra view
			$this->loadView("hotlineCreateUpdateView.php",["action"=>$action,"record"=>$record]);
		}

		public function updatePost(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			$this->modelUpdate($id);
			header("location:index.php?controller=hotline");
		}

		public function create(){
			//tao bien $action de dua vao thuoc tinh action cua the form
			$action = "index.php?controller=hotline&action=createPost";

			//goi view , truyen du lieu ra view
			$this->loadView("hotlineCreateUpdateView.php",["action"=>$action]);
		}

		public function createPost(){
			$this->modelCreate();
			header("location:index.php?controller=hotline");
		}

		public function delete(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			$this->modelDelete($id);
			header("location:index.php?controller=hotline");
		}
	}
 ?>