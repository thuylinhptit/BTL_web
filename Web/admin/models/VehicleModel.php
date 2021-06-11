<?php 
	trait VehicleModel{
		//lay cac ban ghi co phan trang
		//$recordPerPage la so ban ghi trong 1 trang
		public function modelRead($recordPerPage){
			//lay tong so ban ghi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang
			//ham ceil la ham lay tran. VD: ceil(2,3) = 3
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from vehicle order by bienso asc limit $from,$recordPerPage");
			//tra ve tat ca cac ban ghi
			return $query->fetchAll();
		}

		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select bienso from vehicle");
			//tra ve tong so ban ghi dem dc
			return $query->rowCount();
		}

		//lay mot ban ghi
		public function modelGetRecord($bienso){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from vehicle where bienso=:var_bienso");
			$query->execute(["var_bienso"=>$bienso]);
			//tra ve 1 ban ghi
			return $query->fetch();
		}

		public function modelUpdate($bienso){
			$bienso = $_POST["bienso"];
			$type = $_POST["type"];
			$mistake = $_POST["mistake"];
			$time = $_POST["time"];
            $location = $_POST["location"];
			$cost = $_POST["cost"];

			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update vehicle set bienso=:var_bienso , type=:var_type , mistake =:var_mistake, time =:var_time, location =:var_location, cost =:var_cost where bienso=:var_bienso");
			$query->execute(["var_bienso"=>$bienso , "var_type"=>$type , "var_mistake"=>$mistake , "var_time"=>$time, "var_location"=>$location,"var_cost"=>$cost ]);
		
		}

		public function modelCreate(){
			$bienso = $_POST["bienso"];
			$type = $_POST["type"];
			$mistake = $_POST["mistake"];
			$time = $_POST["time"];
            $location = $_POST["location"];
			$cost = $_POST["cost"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into vehicle set  bienso=:var_bienso , type=:var_type , mistake =:var_mistake, time =:var_time, location =:var_location, cost =:var_cost");
			$query->execute(["var_bienso"=>$bienso , "var_type"=>$type , "var_mistake"=>$mistake , "var_time"=>$time, "var_location"=>$location,"var_cost"=>$cost ]);
		}

		public function modelDelete($bienso){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from vehicle where bienso=:var_bienso");
			$query->execute(["var_bienso"=>$bienso]);
		}
	}
 ?>