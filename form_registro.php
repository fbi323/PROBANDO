<?php
include_once('db/utilidades_sql.php');
//include_once('php/utilidades.php');
$resultubicacion=get_ubicacion();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>TODO SOBRE RUEDAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/estilotabs.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/estilos.css">
<!--image slider-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script src="js/jquery-slider.js" type="text/javascript"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="js/slides.min.jquery.js"></script>



<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
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
<div class="main">
<div class="main1">
<div class="details">
				  <div class="product-details">				
					<div >
						<div id="container">
						   <div id="products_example">
							<div id="products">
								
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><center>Registro de usuarios</h2>
					<p>Bienvenidos a su portal</p></center>					
					<div class="pric">
						
					</div>
					<div class="availabl">
					
					</div>
				<div class="share-desc">
					<div class="share">
						
					</div>
					<div ><span><a  ></a></span></div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Registro Clientes</li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Registro Proveedor</li>
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Evaluacion del producto</li>
					<div class="clear"></div>
				</ul>

				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Details</h2><div class="product-desc resp-tab-content resp-tab-content-active" style="display:block;" aria-labelledby="tab_item-0">
						<form enctype="multipart/form-data" method="post" action="php/regis_cli.php" class="form-4">
				    		<h1>Registro del Cliente</h1>							
						<p>TSR <span></span></p>
						<p><label for="login">TIPO DE DOCUMENTO:</label>
						<SELECT id="tipo_doc" name="tipo_doc" required>
							<OPTION VALUE="">SELECCIONE DOCUMENTO</OPTION>
							<OPTION VALUE="CC">CEDULA</OPTION>
							<OPTION VALUE="NI">NIT</OPTION>
							<OPTION VALUE="CE">CEDULA EXTRAGERA</OPTION>
							<OPTION VALUE="TI">TARJETA IDENTIDAD</OPTION>
						|	<OPTION VALUE="PAS">PASAPORTE</OPTION>							
						</SELECT></p>
				<label for="login">Numero de documento</label>
			    <input type="text" name="num_doc" placeholder="Documento" required>
			    	<label for="login">Nombre</label>
				    <input type="text" name="nom_cli" placeholder="Nombres" required>
				    	<label for="login">Apellido</label>
				        <input type="text" name="apelli_cli" placeholder="Apellidos" required>
				        	<label for="login">Email</label>
				        	<input type="email" name="email" placeholder="Email" required> <br><br>


				    			<label for="password">Contraseña</label>
				       		    <input type="password" name="contrasena" placeholder="Contraseña" required>

							<label for="password">Confirmar</label>									
				       		    <input type="password" placeholder="Confirme clave" name="confirmar_password" required>



				       		    	<label for="login">Telefono</label>
				        			<input type="text" name="tel_cli" placeholder="Telefono" required>
				        				<label for="login">Direccion</label>
				        				<input type="text" name="direc_cli" placeholder="direccion" required>
				        					<label for="login">Municipio</label>
				    				   	 	<input type="text" name="ciud_cli" placeholder="Ciudad/Municipio" required> 
				    				    		<p><label for="login">Departamento</label>DEPARTAMENTO
				    				   			 <select name="ubicacion" required>
				    				    			<?php while ($datos_ubicacion=$resultubicacion->fetch_assoc()) { ?>
				    				    				<option value="<?php  echo $datos_ubicacion['_id_ubicacion']?>">
			                        						<?php  echo $datos_ubicacion['departamento']. '-' .$datos_ubicacion['ciudad']?>
			                        					</option></p>
				    				    			<?php } ?>				     				    	
				    				   			 </select> 
				    				   			 		<p><label for="login">TIPO DE DOCUMENTO:</label> GENERO
																<SELECT id="gene_cli" name="gene_cli" required>
																		<OPTION VALUE="">SELECCIONE GENERO</OPTION>
																		<OPTION VALUE="femenino">FEMENINO</OPTION>
																		<OPTION VALUE="masculino">MASCULINO</OPTION>
																		<OPTION VALUE="otro">OTRO</OPTION>							
																</SELECT></p>   				    	
				    				    		
				    				    				<p><label for="login">Fecha Nacimiento</label> FECHA NACIMIENTO
				    				    				<p><input type="date" name="fecnac_cli" placeholderrequired="y/m/d"></p> 				<p><label for="login">Seleccione rol</label>USUARIO
				    				    							<SELECT id="rol" name="rol" required>
																		
																		<OPTION VALUE="cliente">Cliente</OPTION>
																		
																	</SELECT></p><br>
															
				    				    					<span><input type="submit" value="Guardar"></span> 
				    				    					<span><input type="submit" value="Limpiar"></span>  	
				    		    	
				    					   </p>Gracias por ser parte de la familia Todo Sobre Ruedas</p>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>	
				    					   </form>​​			
				    					   </div>
				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>product Tags</h2><div class="product-tags resp-tab-content" aria-labelledby="tab_item-1">						 
						 <form enctype="multipart/form-data" method="post" action="php/regis_provee.php" class="form-4">
				      <p><h1>Registro del Proveedor</h1>
				      <?php $resultubicacion=get_ubicacion(); ?>
				  <label for="login">TIPO DE DOCUMENTO:</label>
						<SELECT id="tipo_doc_pro" name="tipo_doc_pro" required>
							<OPTION VALUE="">SELECCIONE DOCUMENTO</OPTION>
							<OPTION VALUE="CC">CEDULA</OPTION>
							<OPTION VALUE="NIT">NIT</OPTION>
							<OPTION VALUE="CE">CEDULA EXTRAGERA</OPTION>
							<OPTION VALUE="TI">TARJETA IDENTIDAD</OPTION>
						|	<OPTION VALUE="PAS">PASAPORTE</OPTION>
						</SELECT>
				    </p><br>

				    
				        <label for="login">Numero de documento</label>
				        <input type="text" name="num_provee" placeholder="Documento de Proveedor" required>				    
				        	<label for="login">Nombre</label>
				        	<input type="text" name="nom_provee" placeholder="Nombres de Empresa" required>		    
				    			<label for="login">Email</label>
				        		<input type="text" name="email" placeholder="Email de Empresa" required> 				    
				        			<label for="password">Contraseña</label>
				        			<input type="password" name="contrasena" placeholder="contraseña" required> 				    
				        				<label for="login">Telefono</label>
				        				<input type="text" name="tel_provee" placeholder="Telefono Empresa" required>				   
				        					<label for="login">Direccion</label>
				        					<input type="text" name="direc_provee" placeholder="Direccion Empresa" required> 
				        						<label for="login">Ciudad/Municipio</label>
				    				   	 		<input type="text" name="ciudad_provee" placeholder="Ciudad/Municipio" required> 
				    				    			<p><label for="login">Departamento</label>DEPARTAMENTO
				    				   			 <select name="ubicacion" required>
				    				    			<?php while ($datos_ubicacion=$resultubicacion->fetch_assoc()) { ?>
				    				    				<option value="<?php  echo $datos_ubicacion['_id_ubicacion']?>">
			                        						<?php  echo $datos_ubicacion['departamento']. '-' .$datos_ubicacion['ciudad']?>
			                        					</option></p>
				    				    			<?php } ?>				    				    	
				    				   			 </select> 
				    				   					 <p><label for="login">Fecha Nacimiento</label> FECHA CREADA
				    				    				<p><input type="date" name="fec_creada" placeholder="Fecha Fundacion" required></p><br>
				    				    				<p><label for="login">Seleccione rol</label>USUARIO
				    				    							<SELECT id="rol" name="rol" required>
																	
																		<OPTION VALUE="provee">Proveedor</OPTION>
																		>
																	</SELECT></p><br> 
				    				    				<span><input type="submit" value="Guardar"></span>
				    				    				<span><input type="submit" value="Limpiar"></span>  	
				    		    	
				    					   </p>Gracias por ser parte de la familia Todo Sobre Ruedas</p>					
				   
				       
				       
				</form>​​</p>
					<h4>Añadir sus etique:</h4>
					<div class="input-box">
						<input type="text" value="">
					</div>
					<div class="button"><span><a href="#">Agregar etiqueta</a></span></div>
			    </div>	

				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Product Reviews</h2><div class="review resp-tab-content" aria-labelledby="tab_item-2">
					<h4>Calificacion TSR <a href="#">Todo Sobre Ruedas</a></h4>
					 <ul>
					 	<li>Precio :<a href="#"><img src="img/price-rating.png" alt=""></a></li>
					 	<li>Valor :<a href="#"><img src="img/value-rating.png" alt=""></a></li>
					 	<li>Calidad :<a href="#"><img src="img/quality-rating.png" alt=""></a></li>
					 </ul>
					 <p>Este almacén se encuentra ubicado en san Andresito de la 38 el cual lleva 10 años abierto al público donde hemos prestado y prestaremos el mejor servicio a nuestros clientes.</p>
				  <div class="your-review">
				  	 <h3>¿Cómo califica a este producto</h3>
				  	  <p>Escriba su opinion</p>
				  	  <form>
					    	<div>
						    	<span><label>Nombre<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Correo<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>						
						    <div>
						    	<span><label>Sugerencia<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Guardar"></span>
						  </div>
					    </form>
				  	 </div>				
				</div>
			</div>
		 </div>
	 </div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
   <div class="content_bottom">
   	<div class="text-h1 top1 btm">
			<h2>Exivision de tuniados</h2>
	  	</div>
 <div class="div2">
        <div id="mcts1">
        	<img src="img/fondo1.jpg" width:200 height:200 alt=""/>
            <img src="img/fondo2.jpg" width:200 height:200 alt="" />
            <img src="img/fondo3.jpg" width:200 height:200 alt="" />
        	<img src="img/fondo4.jpg" width:200 height:200 alt=""/>
            <img src="img/fondo5.jpg" width:200 height:200 alt="" />
            <img src="img/fondo6.jpg" width:200 height:200 alt="" />
       </div>
	</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
	include_once('php/footer.php')
?>