<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ex Machina by TEMPLATED</title>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css" />
        <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
        <style>div.frente{position: relative; left: 20px; top: 20px; z-index: 100;background-color:#FFF}</style>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					<nav id="nav">
						<ul>
							<li><a href="index.php">PRINCIPAL</a></li>
							<li class="active"><a href="buscador.php">BUSCADOR</a></li>
						</ul>
					</nav>

			</div>
		</div>
		<div id="banner"></div>
	<!-- /Banner -->

	<!-- Main -->
<section style="background:#FFF" class="container table-responsive">
<form action="buscador.php" method="post" name="buscar" style="background:#;">
   	<div class="col-md-12 text-center label-warning" style="height:100px;"><h2><strong>BUSCADOR</strong></h2></div>
	
    <div class="row col-md-12">
       <div class="col-md-6 text-right"><h4>NOMBRE</h4></div><div class="col-md-3"><input type="text" name="nombre" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right"><h4>SERIE</h4></div><div class="col-md-3"><input type="text" name="serie" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right"><h4>CAUSA</h4></div><div class="col-md-3"><input type="text" name="causa" class="form-control" /></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right"><h4>PROCEDENCIA</h4></div><div class="col-md-3"><input type="text" name="procedencia" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right" style="height:50px;"><h4>PROVINCIA</h4></div><div class="col-md-3"><input type="text" name="provincia" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-12 text-center" style="height:150px;"><input type="submit" name="btnBusca" value="Buscar" class="btn btn-warning btn-lg"/></div>
    </div>
</form>


<?php
	if(isset($_REQUEST['btnBusca'])){
	require "../model/accionBuscar.php";
	$a=new Buscar();
		$nombre = $_REQUEST['nombre'];
		$serie	= $_REQUEST['serie'];
		$causa	=$_REQUEST['causa'];
		$procedencia = $_REQUEST['procedencia'];
		$provincia	=$_REQUEST['provincia'];
	$per = $a->buscarGeneral($nombre,$serie,$causa,$procedencia,$provincia);
?>
<table class="table table-hover text-center">
<thead bgcolor="#3BA5CB" style="font-weight:600;">
    	<td>ID</td>
        <td>NOMBRES</td>
        <td>INICIO</td>
        <td>FINAL</td>
        <td>SERIE</td>
        <td>CAUSA</td>
        <td>FOLIOS</td>
        <td>CAJA</td>
        <td>LIBRO</td>
        <td>PROCEDENCIA</td>
        <td>PROVINCIA</td>
        <td>OBSERVACION</td>
</thead>
<?php	while ($ff=$per->fetch_array()){ ?>
	<tr>
    	
        <td><?php echo $ff[1]; ?></td>
        <td><?php echo $ff[0]; ?></td>
        <td><?php echo $ff[2]; ?></td>
        <td><?php echo $ff[3]; ?></td>
        <td><?php echo $ff[4]; ?></td>
        <td><?php echo $ff[5]; ?></td>
        <td><?php echo $ff[6]; ?></td>
        <td><?php echo $ff[7]; ?></td>
        <td><?php echo $ff[8]; ?></td>
        <td><?php echo $ff[9]; ?></td>
		<td><?php echo $ff[10]; ?></td>
        <td><?php echo $ff[11]; ?></td>
    </tr>
<?php }
	}
?>
</table>
</section>
<!-- Copyright -->
		<div id="copyright" class="container">
			Design: <a href="#">TEMPLATED</a> Images: <a href="#">Unsplash</a> (<a href="#">CC0</a>)
		</div>


	</body>
</html>