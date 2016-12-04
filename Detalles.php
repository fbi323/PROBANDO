<?php
include_once('db/utilidades_sql.php');
include_once ('php/utilidades.php');
$id=$_GET['id'];
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/utilidadestienda.js"></script>
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
					<div class="images_3_of_2">
						<div id="container">
						   <div id="products_example">
							<div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="img/rin/rin1.jpg" width:200 height:200 alt=" " /></a>
									<a href="#" target="_blank"><img src="img/rin/rin2.jpg" width:200 height:200 alt=" " /></a>
									<a href="#" target="_blank"><img src="img/rin/rin3.jpg" width:200 height:200 alt=" " /></a>
									<a href="#" target="_blank"><img src="img/rin/rin4.jpg" width:200 height:200 alt=" " /></a>
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="imagen/rin/rin1.jpg" width:200 height:200 alt=" " /></a></li>
									<li><a href="#"><img src="imagen/rin/rin2.jpg" width:200 height:200 alt=" " /></a></li>
									<li><a href="#"><img src="imagen/rin/rin3.jpg" width:200 height:200 alt=" " /></a></li>
									<li><a href="#"><img src="imagen/rin/rin4.jpg" width:200 height:200 alt=" " /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
				<?php $result = get_produc_Byid($id); ?>
					<h2>Detalles&nbsp;del&nbsp;producto</h2>
					<p>Nombre : <?php echo $datos_produc['nom_produc']?></p>					
					<div class="price">
						<p>Precio: <span><?php echo $datos_produc['val_unita']?></span></p>
					</div>
					<div class="available">
						<p>Opciones disponibles:</p>
					<ul>
						<li>Color:<?php echo $datos_produc['color']?></li>
						<li>Tamaño:<?php echo $datos_produc['tama_poduc']?></li>
						<li>Material:<?php echo $datos_produc['mate_poduc']?></li>
						<li>Cantidad:<?php echo $datos_produc['cant_produc']?></li>
					</ul>
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Compartir producto:</p>
						<ul>
					    	<li><a href="#"><img src="img/tsr/icon_1.png" alt=""></a></li>
					    	<li><a href="#"><img src="img/tsr/icon_2.png" alt=""></a></li>	
					    	<li><a href="#"><img src="img/tsr/icon_3.png" alt=""></a></li>					    
			    		</ul>
					</div>
					<div class="button1"><span><a href="Detalles.html" class="button button-rounded" >Agregar al carrito</a></span></div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Añadir lista de deseos</a></li>
				 	    <li class="compare"><a  href="#">Añadir listado compras</a></li>
				 	</ul>
				 </div>
				 	
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Detalles del producto</li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Etiqueta del producto</li>
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Evaluacion del producto</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Details</h2><div class="product-desc resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">
						<p><?php echo $datos_produc['desc_produc']?></p>
						<p>Todo sobre ruedas sera el encargado de lideras la venta de autopartes en colombia haciendo sociedad con varios proveedores del mercado para asi cumplir las necesidades de los clientes los cual son los que adquieren lo productos para sus vehiculos</p>
						Reseñas
						<p>Las BMW xDrive Experience son un conjunto de actividades donde la firma bávara no sólo te permite conocer y disfrutar de la tecnología y sistemas de tracción total de sus coches en condiciones complicadas, sino que también son pequeños cursos de conducción donde se aprende más de lo que parece, y lo digo por experiencia pues no es la primera ‘experience’ a la que me invitan</p>					</div>

				 <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>product Tags</h2><div class="product-tags resp-tab-content" aria-labelledby="tab_item-1">
						 <p>La marca británica de automóviles Bentley, integrada dentro del consorcio Volkswagen, ha aprovechado la celebración del Salón del Automóvil de Los Ángeles para mostrar al mundo uno de sus ejercicios de diseño, a través de su nuevo prototipo Grand Convertible, como un vehículo descapotable que adelanta la línea que adoptará la compañía en el futuro en términos de diseño y de calidades. El coche, que no se sabe por el momento si se fabricará en serie, muestra además unos materiales de alta calidad..</p>
					<h4>Añadir sus etique:</h4>
					<div class="input-box">
						<input type="text" value="">
					</div>
					<div class="button"><span><a href="#">Agregar etiqueta</a></span></div>
			    </div>	

				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Product Reviews</h2><div class="review resp-tab-content" aria-labelledby="tab_item-2">
					<h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
					 <ul>
					 	<li>Precio :<a href="#"><img src="imagen/tsr/price-rating.png" alt=""></a></li>
					 	<li>Valor :<a href="#"><img src="imagen/tsr/value-rating.png" alt=""></a></li>
					 	<li>Calidad :<a href="#"><img src="imagen/tsr/quality-rating.png" alt=""></a></li>
					 </ul>
					 <p>Este almacén se encuentra ubicado en san Andresito de la 38 el cual lleva 10 años abierto al público donde hemos prestado y prestaremos el mejor servicio a nuestros clientes.</p>
				  <div class="your-review">
				  	 <h3>¿Cómo califica a este producto</h3>
				  	  <p>Escriba su opinion</p>
				  	  <form>
					    	<div>
						    	<span><label>Nickname<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>						
						    <div>
						    	<span><label>Review<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="SUBMIT REVIEW"></span>
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