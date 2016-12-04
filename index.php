<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ('db/utilidades_sql.php');
include_once ('php/utilidades.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Todo Sobre Ruedas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="img/tsr/.png" href="img/tsr/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilos.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/estilotabs.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.gallery.js"></script>
<script type="text/javascript">
		$(function() {
		$('#dg-container').gallery({
		autoplay	:	true
	});
});
</script>
</head>
<body>
			<?php
				include_once('php/banner.php')
			?>
				<?php
					include_once('php/header.php')
				?>
					<?php
					include_once('php/galeriapublicitaria.php')
					?>
					
<div class="main">
	<div class="section group">
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta1.jpg" WIDTH=250 HEIGHT=300></a>
			   <a href="404.php"><h3>Combo 1</h3></a>
		</div>
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta2.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Combo 2</h3></a>
		</div>
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta3.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Combo 3</h3></a>
		</div>
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta4.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Combo 4 </h3></a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="section group btm">
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta5.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Oferta 1</h3></a>
		</div>
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta6.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Oferta 2</h3></a>
		</div>
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta7.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Oferta 3</h3></a>
		</div>
		<div class="grid_1_of_4 imagen_publicidad_1_of_4">
			  <a href="404.php"><img src="img/oferta8.jpg" WIDTH=250 HEIGHT=300></a>
			  <a href="404.php"><h3>Oferta 4</h3></a>
		</div>
			<div class="clear"></div>
		</div>
</div>
<?php
	include_once('php/footer.php')
?>