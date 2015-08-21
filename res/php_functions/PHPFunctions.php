<?php
require_once("../../src/SYSTEM/DATABASE.php");

class PHPFunctions{	

	public static function getClientsData($userName){
		global $CON;
		//------------------------------------ COLUMN NAMES --------------------------------
		$query="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA ='tradeassistant' AND TABLE_NAME='products_pr';";
		$data=mysqli_query($CON,$query);
		$columns=array();

		if(mysqli_num_rows($data)>0){
			echo "<thead><tr>";
			while($row=mysqli_fetch_assoc($data)){
				echo "<th>".$row['COLUMN_NAME']."</th>";
				$columns[]=$row['COLUMN_NAME'];
			}
			echo "</tr></thead>";
			//------------------------------------ TABLE VALUES --------------------------------
			echo "<tbody>";
			//$query="SELECT * FROM tradeassistant.clients_cl WHERE USR_LOGIN_NAME='".$userName."';";
			$query="SELECT * FROM tradeassistant.products_pr;";
			$data=mysqli_query($CON,$query);

			while($row=mysqli_fetch_assoc($data)){
			echo "<tr><td>".$row['ID_PR']."</td><td>".$row['PR_NAME']."</td><td>".$row['PR_DESCRIPTION']."</td><td>".$row['ID_BL']."</td></tr>";
			}
			echo "</tbody>";			
		}else{
			echo "<thead><tr><th>NO DATA FOUND</th></tr></thead><tbody><tr><td>CONTACT THE ADMINISTRATOR</td></tr></tbody>";
		}
	}

	public static function login($userName,$password){
		global $CON;

		$query="SELECT COUNT(*) AS 'EXISTS' FROM tradeassistant.users_usr WHERE USR_LOGIN_NAME='".$userName."' AND USR_PASSWORD='".$password."';";
		$data=mysqli_query($CON,$query);
		$value=mysqli_fetch_assoc($data);

		if($value['EXISTS']==1){

		}else{
			
		}
	}
} 

?>