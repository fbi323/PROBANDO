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
<div class="clear"></div>
<div class="main1">
<div class="boxes">
<section class="clear" align="center">
				<form action="php/login.php" method="post" class="form-4" align="center">
				    <h1>Ingreso&nbsp;TSR</h1>
				    <p>
				        <label for="login">Usuario o email</label>
				        <input type="text" name="email" placeholder="correo" required>
				    </p>
				    <p>
				        <label for="password">Contraseña</label>
				        <input type="password" name="contrasena" placeholder="Password" required> 
				    </p>
				    <p  >
				        <input type="submit" name="submit" value="Continuar" align="center">
				   	</p>
				   <br><br><br>
				  	  <p>
				        <a href="form_registro.php" align="center" onclick="document.getElementByid('form_1').submit()" > Registrarse TSR</a><br>
				        <a href="form_registro.php" align="center" > Haz olvidado clave</a>
				        
				 	  </p>     
				</form>​​
				</section>
				<div class="clear"></div>
</div>
</div>
</div>
<?php
	include_once('php/footer.php')
?>