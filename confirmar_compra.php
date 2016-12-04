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
	$i=0;
	$subtotal=0;
	?>
	<?php
	include_once('php/header.php')
	?>
<div class="main">
<div class="main1">
<div class="boxes">
<div class="repair">		
		<section>


				
		<div id="contenido">
				
						<section>
					
							<table  border="3px" class="tabla3" >

								<thead "> 
									<tr>
										<td colspan="2" align="center">Pedido</td> 
									</tr>	 
								</thead>

								<tbody>
									<tr>
										<td >Producto</td>
										<td style=" " align="center">Valor</td>
									</tr>

								<tr>

								<?php 
							
									if (isset($_SESSION['producto'])){	

									while ($i<=$_SESSION['posicion']) {
									$result = get_producto_Byid($_SESSION['producto'][$i]);

										if($datos_productos=$result->fetch_assoc()) { 
										echo "<tr><td>".$datos_productos['nom_produc']."</td>"."<td align ='center'>".$datos_productos['valor']."</td></tr>";
										}

									$i++;
									$subtotal+=$datos_productos['val_unita'];

									}
									
									}		
									?>
</tr>

									<tr>
										<td>Total</td>
										<td align="center"><?php echo $subtotal; ?></td>
									</tr>

									<tr>
										<td><a href="php/cancelar_pedido.php" type="submit">Cancelar</td></a>
										<td><button type="submit">Confirmar</button></td>
									</tr>

							
								
							</tbody>
						</table>
					</section>
		</section>	
			<div class="clear"></div>
    </div>
  </div>
</div>

</div>
<?php
	include_once('php/footer.php')
?>
