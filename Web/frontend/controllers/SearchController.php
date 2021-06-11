<?php 
	include "models/SearchModel.php";
	class SearchController extends Controller{
		use SearchModel;
		public function index(){
			// $data = $this->modelSearch();
			$this->loadView("SearchView.php");
		}

//		public function search(){
//			$bienso = isset($_GET["bienso"])&&$_GET["bienso"]>0 ? $_GET["bienso"] : 0;
//			$action = "index.php?controller=search&action=searchPost";
//
//			//goi view , truyen du lieu ra view
//			$this->loadView("SearchView.php",["action"=>$action]);
//		}

		public function search(){
			$bienso = isset($_GET["bienso"])? $_GET["bienso"] : 0;
			if($bienso!=0){
                $data = $this->modelSearch($bienso);
                $this->loadView("SearchView.php",["data"=>$data]);
			} else {
                $this->loadView("SearchView.php");
            }
		}
	}
 ?>