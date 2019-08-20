<?php 
	class model{
		//lay tat ca cac ban ghi trong table
		public static function list_all($sql){
			//khai bao bien $db thanh bien toan cuc de su dung o day
			$db = mysqli_connect("localhost","root","","cloud_computing");
			$result = mysqli_query($db,$sql) or die("Không truy vấn được");			
			$arr = array();
			//duyet cac phan tu cua object $result, moi phan tu nem vao thanh 1 phan tu cua array
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//thuc hien cau truy van
		public static function execute($sql){
			$db = mysqli_connect("localhost","root","","cloud_computing");
			//$result = mysqli_query($db,$sql) or die("Không truy vấn được");	
			$insert_id =0;
			if(mysqli_query($db,$sql))
				$insert_id = mysqli_insert_id($db);
			return $insert_id;
		}
		//lay mot ban ghi
		public static function get_a_record($sql){
			$db = mysqli_connect("localhost","root","","cloud_computing");
			$result = mysqli_query($db,$sql) or die("Không truy vấn được");
			$record = mysqli_fetch_object($result);
			return $record;
		}
		//dem so luong ban ghi
		public static function num_rows($sql){
			$db = mysqli_connect("localhost","root","","cloud_computing");
			$result = mysqli_query($db,$sql) or die("Không truy vấn được");
			return mysqli_num_rows($result);
		}
	}
 ?>