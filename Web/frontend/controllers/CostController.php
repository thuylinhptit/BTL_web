<?php 
	include "models/CostModel.php";
	class CostController extends Controller{
		use CostModel;
		public function index(){

			$data = $this->modelCost();

			$this->loadView("CostView.php",["data"=>$data]);
		}
	}
 ?>