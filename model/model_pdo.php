<?php 
	class model{
		public function list_all($sql){
			global $pdo;
			//thuc thi truy van, ket qua tra ve true hoac false
			if($result = $pdo->query($sql)){
				$arr = array();
				//duyet qua cac phan tu trong object $result
				while($rows = $result->fetch(PDO::FETCH_OBJ))
					$arr[] = $rows;
				return $arr;
			}else
				$pdo->errInfo();
		}
		public function get_a_record($sql){
			global $pdo;
			if($result = $pdo->query($sql)){
				return $result->fetch(PDO::FETCH_OBJ);
			}else
				$pdo->errInfo();
		}
		public function execute($sql){
			global $pdo;
			if($pdo->exec($sql))
				return $pdo->insert_id;
			else
				$pdo->errInfo();
		}
		public function num_rows($sql){
			global $pdo;
			if($result = $pdo->query($sql)){
				return $result->rowCount();
			}else
				$pdo->errInfo();
		}
	}
 ?>