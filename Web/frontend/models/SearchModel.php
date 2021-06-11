<?php
	trait SearchModel{
//		public function modelSearch($bienso){
//			$conn = Connection::getInstance();
//			$query = $conn->prepare("select * from vehicle where bienso like "%'.:var_bienso.'%"");
//			$query->execute(["var_bienso"=>$bienso]);
//
//			return $query->fetch();
//		}

        public function modelSearch($bienso) {
            $conn = Connection::getInstance();
            $obj_select = $conn->prepare("SELECT * FROM vehicle WHERE vehicle.bienso LIKE '%$bienso%'");

            $arr = [];
            $obj_select->execute($arr);
            return $obj_select->fetchAll();
        }
	}
 ?>