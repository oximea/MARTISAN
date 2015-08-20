<?php
require_once("../../src/SYSTEM/DATABASE.php");

class PHPFunctions{	

	public static function getClientsData($databaseName,$tableName){
		global $CON;
		//------------------------------------ COLUMN NAMES --------------------------------
		$query="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA ='".$databaseName."' AND TABLE_NAME='".$tableName."'";
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
			$query="SELECT * FROM ".$databaseName.".".$tableName;
			$data=mysqli_query($CON,$query);

			while($row=mysqli_fetch_assoc($data)){
			echo "<tr><td>".$row['ID_PR']."</td><td>".$row['PR_NAME']."</td><td>".$row['PR_DESCRIPTION']."</td><td>".$row['ID_BL']."</td></tr>";
			}
			echo "</tbody>";			
		}else{
			echo "<thead><tr><th>NO DATA FOUND</th></tr></thead><tbody><tr><td>CONTACT THE ADMINISTRATOR</td></tr></tbody>";
		}
	}
} 

?>