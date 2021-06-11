<?php 
	trait HomeModel{
		public function modelRead(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news");

			return $query->fetchAll();
		}
	}
 ?>