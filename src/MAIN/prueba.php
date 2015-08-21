<html>
<head>
<title> Prueba </title>
</head>
<body>
<?php require_once("../SYSTEM/DATABASE.php");

echo "Conexion Establecida <hr><br>";

	$query="SELECT * FROM tradeassistant.products_pr";
	$data=mysqli_query($CON,$query);
	$cont=0;

	while($row=mysqli_fetch_assoc($data)){
		echo  $cont." // ID: ".$row['ID_PR'].", PR_NAME: ".$row['PR_NAME'].", PR_DESCRIPTION: ".$row['PR_DESCRIPTION'].", ID_BL: ".$row['ID_BL']."<br>";
		$cont++;
	}

	mysqli_close($CON);
	echo "<hr><br>Conexion Terminada";
	
?>
</body>
</html>