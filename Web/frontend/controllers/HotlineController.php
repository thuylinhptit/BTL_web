<?php 
	include "models/HotlineModel.php";
	class HotlineController extends Controller{
		use HotlineModel;
		public function index(){
			$data = $this->modelRead();
			$this->loadView("HotlineView.php",["data"=>$data]);
		}
	}
 ?>