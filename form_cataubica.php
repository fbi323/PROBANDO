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
					<h2><center>Registro</h2>
					<p>Categoria&nbsp;bicacion</p></center>					
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
					<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Registro Categoria</li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Registro Ubicacion</li>
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Evaluacion del producto</li>
					<div class="clear"></div>
				</ul>

				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Details</h2><div class="product-desc resp-tab-content resp-tab-content-active" style="display:block;" aria-labelledby="tab_item-0">
						<form enctype="multipart/form-data" method="post" action="php/regis_cate.php" class="form-4">
				    		<h1>TIPO CATEGORIA</h1>							
						<p>TSR <span></span></p>
						
				<label for="login">Tipo Producto</label>
			    <input type="text" name="tipo_produc" placeholder="TIPO PRODUCTO" required>
			    	<label for="login">Clase Vehiculo</label>
				    <input type="text" name="class_vehi" placeholder="CLASE VEHICULO" required>
				    	
															
				    				    					<span><input type="submit" value="Guardar"></span> 
				    				    					<span><input type="submit" value="Limpiar"></span>  	
				    		    	
				    					   </p>Gracias</p>	
				    					   </form>​​			
				    					   </div>
				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>product Tags</h2><div class="product-tags resp-tab-content" aria-labelledby="tab_item-1">						 
						 <form enctype="multipart/form-data" method="post" action="php/regis_ubica.php" class="form-4">
				      <p><h1>Registro del Ubicacion</h1>

				      <label for="login">Departamento</label>
			    <input type="text" name="departamento" placeholder="DEPARTAMENTO" required>
			    	<label for="login">Ciudad</label>
				    <input type="text" name="ciudad" placeholder="CIUDAD" required>

				    				    				<span><input type="submit" value="Guardar"></span>
				    				    				<span><input type="submit" value="Limpiar"></span>  	
				    		    	
				    					   </p>Gracias</p>					
				   
				       
				       
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
					 	<li>Precio :<a href="#"><img src="img/tsr/price-rating.png" alt=""></a></li>
					 	<li>Valor :<a href="#"><img src="img/tsr/value-rating.png" alt=""></a></li>
					 	<li>Calidad :<a href="#"><img src="img/tsr/quality-rating.png" alt=""></a></li>
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