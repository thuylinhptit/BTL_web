<?php 
	class Controller{
		public $view = NULL;
		public $layoutPath = NULL;
		public function loadView($fileName, $data = NULL){
			
			$fileName = "views/$fileName";
			if(file_exists($fileName)){
				ob_start();
					
					if($data != NULL)
						extract($data);
					include $fileName;
					
					$this->view = ob_get_contents();
				ob_end_clean();
			}
			
			if($this->layoutPath != NULL)
				include "views/$this->layoutPath";
			else
				echo $this->view;
		}
		
		public function authentication(){
			if(isset($_SESSION["admin_email"]) == false)
				header("location:index.php?controller=login");
		}
	}
 ?>