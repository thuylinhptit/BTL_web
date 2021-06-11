<?php 
	include "models/VehicleModel.php";
	class VehicleController extends Controller{
		//ke thua class vehicleModel
		use VehicleModel;
		public function index(){
			//so ban ghi tren mot trang
			$recordPerPage = 5;
			//tinh so trang truyen ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view , truyen du lieu ra view
			$this->loadView("VehicleReadView.php",["numPage"=>$numPage,"data"=>$data]);
		}

		public function update(){
			$bienso = isset($_GET["bienso"])&&$_GET["bienso"]>0 ? $_GET["bienso"] : 0;
			//tao bien $action de dua vao thuoc tinh action cua the form
			$action = "index.php?controller=vehicle&action=updatePost&bienso=$bienso";
			//lay du lieu
			$record = $this->modelGetRecord($bienso);

			//goi view , truyen du lieu ra view
			$this->loadView("VehicleCreateUpdateView.php",["action"=>$action,"record"=>$record]);
		}

		public function updatePost(){
			$bienso = isset($_GET["bienso"])&&$_GET["bienso"]>0 ? $_GET["bienso"] : 0;
			$this->modelUpdate($bienso);
			header("location:index.php?controller=vehicle");
		}

		public function create(){
			//tao bien $action de dua vao thuoc tinh action cua the form
			$action = "index.php?controller=vehicle&action=createPost";

			//goi view , truyen du lieu ra view
			$this->loadView("VehicleCreateUpdateView.php",["action"=>$action]);
		}

		public function createPost(){
			$this->modelCreate();
			header("location:index.php?controller=vehicle");
		}

		public function delete(){
			$bienso = isset($_GET["bienso"])&&$_GET["bienso"]>0 ? $_GET["bienso"] : 0;
			$this->modelDelete($bienso);
			header("location:index.php?controller=vehicle");
		}
	}
 ?>