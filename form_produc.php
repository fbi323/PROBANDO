<?php

include_once ('php/utilidades.php');
include_once ('db/utilidades_sql.php');

if(isset($_SESSION['email'])){



	if ($_SESSION['rol']=='cliente'){

		header('location:index.php');
		die();
	}
}
$resultCat=get_categorias();
$resultUbica=get_ubicacion();

/*$estado=false();
$error=false();
$msg='';
$msgerror='';*/



if($_FILES){
	
	$categoria=isset($_POST ['categoria'])?
			 $_POST['categoria']:'' ;
	$resultCat=get_categoriaByID($categoria);
	$datos_categoria=$resultCat->fetch_assoc();
	$ref_produc=isset($_POST ['ref_produc'])?
			 $_POST['ref_produc']:'' ;

	$img_rutas="C:/xampp/htdocs/TSRSOLOWEB2016V2/img/".$datos_categoria['tipo_produc']."/".$ref_produc.".jpg";
	$img_ruta="/img/".$datos_categoria['tipo_produc']."/".$ref_produc.".jpg";
	//basename ($_FILES['uploadimg']['name']);
	//echo $img_rutas;
	move_uploaded_file($_FILES['uploadimg']['tmp_name'], $img_rutas);

	if($_POST){
			 

			 $directorio='img/'.$categoria.'/';

		

		$nom_produc=isset($_POST ['nom_produc'])?
			 $_POST['nom_produc']:'' ;

		$desc_produc=isset($_POST ['desc_produc'])?
			 $_POST['desc_produc']:'' ;

		
		$val_unita=isset($_POST ['val_unita'])?
			 $_POST['val_unita']:'' ;

		$cant_produc=isset($_POST ['cant_produc'])?
			 $_POST['cant_produc']:'' ;			

		$color=isset($_POST ['color'])?
			 $_POST['color']:'' ;

		$tama_produc=isset($_POST ['tama_produc'])?
			 $_POST['tama_produc']:'' ;

		$mate_produc=isset($_POST ['mate_produc'])?
			 $_POST['mate_produc']:'' ;	 

		$entra=isset($_POST ['entra'])?
			 $_POST['entra']:'' ;

		$ubicacion=isset($_POST ['ubicacion'])?
			 $_POST['ubicacion']:'' ;

		
 			$result = set_produc($ref_produc, $nom_produc, $desc_produc, $val_unita, $cant_produc, $color, $tama_produc, $mate_produc, $entra,  $ubicacion, $categoria, $img_rutas);
				
			
}
}

?>
<head>
<title>TODO SOBRE RUEDAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/estilotabs.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/estilos.css">
</head>
				<?php
					include_once('php/banner.php');
				?>
					<?php
						include_once('php/header.php');					
					?>

<div class="main">
<div class="clear"></div>
<div class="main1">
<div class="boxes">
<section class="clear" align="center">

				<form enctype="multipart/form-data"  method="POST" class="form-4" align="center">
				<h1>Registrar&nbsp;Productos</h1>
					<p><label for="login">Referencia</label>
				       <input type="text" name="ref_produc" placeholder="Referencia" required></p>
				       	<p><label for="login">Nombre</label>
				       	   <input type="text" name="nom_produc" placeholder="Nombre" required></p>
				       	   	<p><label for="login">Descripcion</label>
				       	       <input type="text" name="desc_produc" placeholder="Descripcion" required></p>						
										<p><label for="login">Valor unitario</label>
				       	       			   <input type="text" name="val_unita" placeholder="Valor unitario" required></p>
				       	       			   <p><label for="login">Cantidad</label>
				       	       			   	  <input type="text" name="cant_produc" placeholder="Cantidad" required></p>
						  
						<p><label for="login">Color</label>
				       	   <input type="text" name="color" placeholder="Color del producto" required></p>
				       	   <p><label for="login">Tamaño</label>
				       	      <input type="text" name="tama_produc" placeholder="Tamaño" required></p>
				       	      <p><label for="login">Material</label>
				       	       	 <input type="text" name="mate_produc" placeholder="Material" required></p>
				       	       	 <p><label for="login">Material</label>				       	       	 
				       	       	    <input type="text" name="entra" placeholder="Fecha " required value="<?php echo date('y/m/d') ?>"></p>
				       	       	    <p>Ubicacion</p>
						<?php $resultubicacion=get_ubicacion(); ?>
						<select name="ubicacion" required>
				    			<?php while ($datos_ubicacion=$resultubicacion->fetch_assoc()) { ?>			    					
				    				    <option value="<?php  echo $datos_ubicacion['_id_ubicacion']?>">
			                        			<?php  echo $datos_ubicacion['departamento']. '-' .$datos_ubicacion['ciudad']?>
			                        	</option></p>
				    			<?php } ?>				    				    	
				    	</select><br><br>
				    	<p>Categoria</p>
						<?php $resultCat=get_categorias(); ?>
						<select name="categoria" required>
				    			<?php while ($datos_categoria=$resultCat->fetch_assoc()) { ?>    			    					
				    				    <option value="<?php  echo $datos_categoria['_id_categoria']?>">
			                        			<?php  echo $datos_categoria['tipo_produc']. '-' .$datos_categoria['class_vehi']?>	
			                        	</option></p>
				    			<?php } 

				    			?>

				    	</select><br><br> 
				       	       	    <table>		
							<tr><td><p>Examinar(Accesorio)</p></td>
								<td><input name="uploadimg" type="file" />
							</td>
								
						</table><br><br>
				       	       	    					<span><input type="submit" value="Guardar"></span>
				    				    				<span><input type="submit" value="Limpiar"></span> 
 
						

						
					
						
					
				</form>
				
			</section>
			</div>
				</div>
		
				<?php
					include_once('php/footer.php');
				?>