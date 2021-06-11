<?php 
	class HomeController extends Controller{
		//Ham tao
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>