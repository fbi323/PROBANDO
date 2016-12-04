<?php
/* Para incluir librerías de base de datos y utilidades */
include_once('db/utilidades_sql.php');
include_once ('php/utilidades.php');
$id=$_GET['id'];
?>
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
		

				
				<section class="FD" id="descripcion">
					<div class="titulo1"><h4>Descripcion del producto</h4></div>
						<?php $result = get_producto_Byid($id); ?>

							<table>
						<?php if($datos_varios=$result->fetch_assoc()) { ?>
								<img class="PREVIEW2"   src="<?php echo $datos_varios['img_rutas']?>"/>
								<h4 class="texto2"> <?php echo $datos_varios['_id_produc']?> </h4>
								<h4 class="texto2"> <?php echo $datos_varios['nom_produc']?> </h4>
								<h4 class="texto2"> <?php echo $datos_varios['desc_produc']?> </h4>
								<h4 class="texto2"> <?php echo $datos_varios['val_unita']?> </h4>

			<?php } ?>
							</table>
							</section>	

	 </div>
  </div>
</div>
</div>
		<?php
	include_once('php/footer.php')
?>