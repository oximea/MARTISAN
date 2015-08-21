<?php
include("../../res/php_functions/PHPFunctions.php");
$USER_NAME="JAndres";
?>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="../../res/css/Metro/metro.css" />
<link rel="stylesheet" href="../../res/css/Metro/metro-icons.css"/>
<link rel="stylesheet" href="../../res/css/main.css" />
<link rel="stylesheet" href="../../res/css/simplePagination.css" />
</head>
<body>
<form id="mainForm">
		<header class="app-bar fixed-top navy" data-role="appbar">
			<div class="container">
				<a class="app-bar-element branding" href="#">SW Assistant -
					Martisan</a>
				<div class="app-bar-element place-right">
					<span class="dropdown-toggle"> <span class="mif-cog"></span>
						<?php echo $USER_NAME;?>
					</span>
					<div
						class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark"
						style="width: 200px" data-no-close="true" data-role="dropdown">
						<ul class="unstyled-list fg-dark">
							<li><a class="fg-dark fg-hover-blue" href="#"> Perfil </a></li>
							<li><a class="fg-dark fg-hover-blue" href="#">
									Configuración </a></li>
							<li><a class="fg-dark fg-hover-blue" href="#"> Cerrar
									Sesión </a></li>
						</ul>
					</div>
				</div>
				<a href="https://icons8.com">Icon pack by Icons8</a>
			</div>
		</header>

		<div class="page-content">
			<div id="cell-content" class="cell auto-size padding20 bg-white">
				<h1 class="text-light">Clientes
				<span class="mif-user place-right"></span>
                                <?php 
                                echo 'hola mundo';
                                ?>
				</h1>				
				<hr class="thin bg-grayLighter">
				<button class="button primary" onclick=""><img src="../../res/images/plus-white.png"/>Agregar Cliente</button>
				<hr class="thin bg-grayLighter">
				<div id="table_content">	
					<table id="clients_table" class="dataTable table striped hovered border bordered" data-role="datatable" data-searching="true">				
						<?php						
							$databaseName="tradeassistant";
							$tableName="products_pr";
							PHPFunctions::getClientsData($databaseName,$tableName);
							?>
					</table>
                                    <div> me la pelas</div>
				</div>				
			</div>
			<br>
			<br>
		</div>
	</form>
</body>
<script src="../../res/js/jQuery/jquery-1.11.3.min.js"></script>
<script src="../../res/js/jQuery/jquery.dataTables.min.js"></script>
<script src="../../res/js/Metro/metro.js"></script>
<script src="../../res/js/indexJS.js"></script>
<script>
	$("#clients_table").DataTable();
</script>
</html>
