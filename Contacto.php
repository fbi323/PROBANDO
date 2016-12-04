<!DOCTYPE HTML>
<html>
<head>
<title>Todo Sobre Ruedas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="img/png" href="images/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all" />
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
</div>
<div class="main">
<div class="main1">
<section>
 	<div class="section group1">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Ubicacion nosotros</h3>
			    	 		<div class="map">
			    	 			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3977.076746465381!2d-74.09987570447691!3d4.580240194573374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f98e77e47ad47%3A0xef06fb037225d1f5!2sColsutec!5e0!3m2!1ses!2sco!4v1475984695894" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			    	 			
					   			
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Informacion Empresa :</h3>
						<p>Todo Sobre Ruedas (TSR)</p>
						<p>Direccion: calle 72 # 34-45 Norte</p>
						<p>Colombia - Bogota</p>
				   		<p>Telefono:(057) 018000323323</p>
				   		<p>Fax: (057) 2323232</p>
				 	 	<p>Email: <span>info cliene@Todosobreruedas323.com</span></p>
				   		<p>Redes sociales: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contactenos</h3>
					      <form  enctype="multipart/form-data" method="POST" action="php/regis_comen.php" >
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="nom_comen" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Correo</label></span>
						    	<span><input name="email_comen" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Telefono</label></span>
						    	<span><input name="tel_comen" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Descripcion</label></span>
						    	<span><textarea name="detal_comen"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Enviar"></span>
						  </div>
					    </form>
				    </div>
  				</div>	  			
  			<div class="clear"></div>	
		</div>
	</div>
</div>
<?php
	include_once('php/footer.php')
?>