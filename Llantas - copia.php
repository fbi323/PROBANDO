<?php
include_once ('db/utilidades_sql.php');
$result = get_produc();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Todo Sobre Ruedas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="img/png" href="images/favicon.png">
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
		<h2>Zona de llantas</h2>
		<div class="repair">

		
		<section>
		<table>
		<tr>
		<?php
		$items=0;

		while ($datos_produc=$result->fetch_assoc()) { 
				if($items%4==0){
				echo "</tr> 	<tr><td><br></td></tr> <tr>";
				} ?>

				<td>
				<ul class="lb-album">
					<li>
						<a href="#image-1">
							<img WIDTH=650 HEIGHT=200 class='PREVIEW' src= <?php echo "'".$datos_produc['img_rutas']."'";?> /></a><a>
				   <!--image<img src="img/llanta/CAMI WRANGLER HP.jpg" alt="" >-->
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-1">
						<img WIDTH=650 HEIGHT=200 class='PREVIEW' src=<?php echo "'".$datos_produc['img_rutas']."'";?>/></a><a>"; ?>
					<!--<img src="img/llanta/CAMI WRANGLER HP.jpg" alt="" WIDTH=350 HEIGHT=200>-->
							<?php echo "<a href='Detalles.php?id=".$datos_produc['_id_produc']."'";?> 
							<!--<a href="Detalles.php" class="lb-close"> </a>-->
						</div>
						<p>Nombre : <?php echo $datos_produc['nom_produc']?> <br> PRECIO : <?php echo $datos_produc['val_unita']?></p>
						<div class="rd_more">
							<!--<a href="Detalles.php" class="button button-rounded">COMPRAR</a>-->
							<!--<?php //echo "<button class='button' value='".$datos_productos['_id_produc']."'>Enviar Carrito</button>" ?>-->
						</div>
					</li>



					
				</ul>
				<td>

			
		<?php $items++; } ?>	
			</tr>	
			</table>
			</section>	
			<div class="clear"></div>
    </div>
  </div>
</div>

</div>
<?php
	include_once('php/footer.php')
?>