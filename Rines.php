<!DOCTYPE HTML>
<html>
<head>
<title>Todo Sobre Ruedas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="img/png" href="img/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
	include_once('php/banner.php')
	?>
	<?php
	include_once('php/header.php')
	?>
<div class="main">
<div class="main1">
<div class="boxes">
		<h2>Zona de Rines</h2>
		<div class="repair">
		     <section>
			<table class="tabla">
							<thead></thead>
							<tbody>
								<?php include_once('php/productos.php');?>
							</tbody>

					</table>
					
			</section>
    </div>
  </div>
</div>
</div>
<?php
	include_once('php/footer.php')
?>