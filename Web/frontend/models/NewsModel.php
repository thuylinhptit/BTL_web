<?php 
	trait NewsModel{
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from news where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve 1 ban ghi
			return $query->fetch();
		}
	}
?>
