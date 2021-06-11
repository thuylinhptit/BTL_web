<?php 
	trait HotlineModel{
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
			$query = $conn->query("select * from hotline order by id asc limit $from,$recordPerPage");
			//tra ve tat ca cac ban ghi
			return $query->fetchAll();
		}

		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from hotline");
			//tra ve tong so ban ghi dem dc
			return $query->rowCount();
		}

		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from hotline where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve 1 ban ghi
			return $query->fetch();
		}

		public function modelUpdate($id){
			$name = $_POST["name"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];

			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update hotline set name=:var_name , address =:var_address,  phone =:var_phone where id=:var_id");
			$query->execute(["var_id"=>$id , "var_name"=>$name , "var_address"=>$address ,"var_phone"=>$phone ]);
		
		}

		public function modelCreate(){
			$name = $_POST["name"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into hotline set name=:var_name , address =:var_address,  phone =:var_phone" );
			$query->execute([ "var_name"=>$name , "var_address"=>$address ,"var_phone"=>$phone ]);
		}

		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from hotline where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>