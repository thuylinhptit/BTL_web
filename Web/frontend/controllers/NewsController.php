<?php 
	include "models/NewsModel.php";
	class NewsController extends Controller{
		use NewsModel;
		public function index(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;

			$data = $this->modelGetRecord($id);

			$this->loadView("NewsView.php",["data"=>$data]);
		}
	}
 ?>