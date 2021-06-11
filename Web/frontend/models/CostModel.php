<?php 
	trait CostModel{
		public function modelCost(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from cost");
			
			//tra ve 1 ban ghi
			return $query->fetchAll();
		}
	}
 ?>