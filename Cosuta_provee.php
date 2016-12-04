<!DOCTYPE HTML>
<html>
<head>
<title>Todo Sobre Ruedas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="img/png" href="images/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/estilo23.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->

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
<div class="boxes">
        <h2>Consulta de proveedores </h2>
        <div class="repair">
             <section><p>
<?php
include_once ('db/utilidades_sql.php');
//include_once ('db/utilidades_sql.php');
include_once ('php/utilidades.php');
#Efectuamos la consulta SQL
$result = get_proveedor();
#Mostramos los resultados obtenidos
echo "<table class='datos' border: green 5px solid;>";
echo "<th>DOCUMENTO</th><th>NOMBRE</th><th>EMAIL</th><th>TELEFONO</th><th>DIRECCION</th><th>MUNICIPIO</th>  <th>DEPARTAMENTO</th><th>CIUDAD</th>";
echo "<tr><td><br></td></tr>";
$i=1;
while( $row = $result->fetch_assoc ())
{   
    if ($i%2==0){
        echo "<tr class='fondofila1'>";
    }else{
        echo "<tr class='fondofila2'>";
    }
    
    echo "<td>".$row[ "num_provee"     ]."</td>";
    echo "<td>".$row[ "nom_provee"     ]."</td>";
    echo "<td>".$row[ "email"       ]."</td>";
    echo "<td>".$row[ "tel_provee"     ]."</td>";
    echo "<td>".$row[ "direc_provee"   ]."</td>";
    echo "<td>".$row[ "ciudad_provee"    ]."</td>";
    echo "<td>".$row[ "departamento"]."</td>";
    echo "<td>".$row[ "ciudad"]."</td>";    
    echo "<tr>";
    $i++;

}
   
    echo "</table>";             
?></table>
<BR><BR>

<div align="left"><a href="index.php">Volver a menu pricipal</a></div>
<div class="clear"></div>
                
            </section></p>
            
    </div>
  </div>
</div>
</div>
<?php
    include_once('php/footer.php')
?>
