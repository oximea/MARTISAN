
<?php
require_once("../../src/SYSTEM/DATABASE.php");

class PHPFunctions{	

	public static function getClientsData($userName){
		global $CON;
                
		$query="SELECT * FROM tradeassistant.contacts_con;";
                $data=mysqli_query($CON,$query);
		$columns=array("NUMERO","NOMBRE","APELLIDO","CORREO","CORREO ALT","TELEFONO","MENSAJE","DIRECCION","NOTAS");
                $arrLength=count($columns);

		if(mysqli_num_rows($data)>0){
			echo "<thead><tr>";
			for($i=0;$i<$arrLength;$i++){
				echo "<th>".$columns[$i]."</th>";
			}
			echo "</tr></thead>";
			//------------------------------------ TABLE VALUES --------------------------------
			echo "<tbody>";		

			while($row=mysqli_fetch_assoc($data)){
			echo "<tr><td>".$row['ID_CON']."</td><td>".$row['CON_NAME']."</td><td>".$row['CON_LASTNAME']."</td><td>".$row['CON_EMAIL']."</td><td>".$row['CON_ALT_EMAILS']."</td><td>".$row['CON_MOBILE']."</td><td>".$row['CON_MESSAGINGID']."</td><td>".$row['CON_ADDRESS']."</td><td>".$row['CON_NOTES']."</td></tr>";
			}
			echo "</tbody>";			
		}else{
			echo "<thead><tr><th>NO HAY REGISTROS</th></tr></thead><tbody><tr><td>Agregue un nuevo registro</td></tr></tbody>";
		}
	}

	public static function login($userName,$password){
		global $CON;

		$query="SELECT COUNT(*) AS 'EXISTS' FROM tradeassistant.users_usr WHERE USR_LOGIN_NAME='".$userName."' AND USR_PASSWORD='".$password."';";
		$data=mysqli_query($CON,$query);
		$value=mysqli_fetch_assoc($data);
                
                $response=false;

		if($value['EXISTS']==1){
                   return ($response=true);
		}else{
                    return $response;
		}
	}
} 

?>
