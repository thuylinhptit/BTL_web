<?php 
	include "models/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		public function index(){
			$data = $this->modelRead();
			$this->loadView("HomeView.php",["data"=>$data]);
		}
	}
 ?>