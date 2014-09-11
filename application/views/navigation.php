<!DOCTYPE html>
<? $this->load->helper('url'); ?>
<html lang='es'>
<head>
<meta charset = 'utf-8'>
<title>Cafematic</title>
<style>
.cssBoton {
	float:left;
	margin-left: 15px;
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f) );
	background:-moz-linear-gradient( center top, #f24537 5%, #c62d1f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f');
	background-color:#f24537;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	text-indent:0;
	border:1px solid #d02718;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:40px;
	line-height:40px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
}
.cssBoton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537) );
	background:-moz-linear-gradient( center top, #c62d1f 5%, #f24537 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537');
	background-color:#c62d1f;
}.cssBoton:active {
	position:relative;
	top:1px;
}

#main{
	width: 900px;
	height: 800px;
	margin:auto;
	font-size: 14px;
	font-family: Arial;
	background-image: url("./cafe.jpg");
}
nav {
	height: 40px;
}
.nave{
	list-style: none;

}
.nave li{
	float: left;
	padding: 3px;

}

		.prim { 
		
			background-color: white;
			
			-moz-background-clip: padding;     /* Firefox 3.6 */
			-webkit-background-clip: padding;  /* Safari 4? Chrome 6? */
			background-clip: padding-box;      /* Firefox 4, Safari 5, Opera 10, IE 9 */
						 
			border: 5px solid rgba(0,0,0,0.3);
						
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px; 
		
			padding: 5px;
			width: 70px;
			height: 40px;
			text-align: center;
			
			float: left; 
		
		}
</style>
</head>
<body>
	<div id="main">
		<header>
			<center>
				<h1>Sistema de distribución de gastos de café</h1>
			</center>
			<nav>
				<ul class="nave">
				<li><button class="cssBoton" onclick="javasript:document.location.href=
					'<?= base_url();?>'">Inicio</button></li>
				<li><button class="cssBoton" onclick="javasript:document.location.href=
					'<?= base_url();?>index.php/consulta'">Consulta</button></li>
				<li><button class="cssBoton" onclick="javasript:document.location.href=
					'<?= base_url();?>index.php/registros'">Transacciones</button></li>
				<li><button class="cssBoton" onclick="javasript:document.location.href=
					'<?= base_url();?>index.php/agregar'">Agregar trabajador</button></li>
				<li><button class="cssBoton" onclick="javasript:document.location.href=
					'<?= base_url();?>index.php/eliminar'">Eliminar trabajador</button></li>
				</ul>
			</nav>
			
		</header>
		<br>
		<hr>
		<br>
	
