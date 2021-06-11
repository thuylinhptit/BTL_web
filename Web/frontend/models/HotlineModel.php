<?php 
	trait HotlineModel{
		public function modelRead(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from hotline");

			return $query->fetchAll();
		}
	}
 ?>