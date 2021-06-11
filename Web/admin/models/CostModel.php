<?php 
	trait CostModel{
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
			$query = $conn->query("select * from cost order by id asc limit $from,$recordPerPage");
			//tra ve tat ca cac ban ghi
			return $query->fetchAll();
		}

		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from cost");
			//tra ve tong so ban ghi dem dc
			return $query->rowCount();
		}

		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from cost where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve 1 ban ghi
			return $query->fetch();
		}

		public function modelUpdate($id){
			$mistake = $_POST["mistake"];
			$xemay = $_POST["xemay"];
			$oto = $_POST["oto"];

			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update cost set mistake=:var_mistake , xemay =:var_xemay,  oto =:var_oto where id=:var_id");
			$query->execute(["var_id"=>$id , "var_mistake"=>$mistake , "var_xemay"=>$xemay ,"var_oto"=>$oto ]);
		
		}

		public function modelCreate(){
			$mistake = $_POST["mistake"];
			$xemay = $_POST["xemay"];
			$oto = $_POST["oto"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into cost set mistake=:var_mistake , xemay =:var_xemay,  oto =:var_oto" );
			$query->execute([ "var_mistake"=>$mistake , "var_xemay"=>$xemay ,"var_oto"=>$oto ]);
		}

		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from cost where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>