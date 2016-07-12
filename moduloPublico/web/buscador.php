<!DOCTYPE HTML>
<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Ex Machina by TEMPLATED</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
<div class="container">
	<div class="row" style="height:100px">
    	<div class="col-md-12 text-center" style="height:100px;"><font size="+3" style="font-weight:600;">BUSCADOR</font></div>
    </div>
<form action="buscador.php" method="post" name="buscar" style="background:#FFFFFF;">
     <div class="row col-md-12">
       <div class="col-md-6 text-right"><h4>NOMBRE</h4></div><div class="col-md-3"><input type="text" name="nombre" class="form-control"/></div>
    </div>
    <div class="row col-md-12 frente">
		<div class="col-md-6 text-right"><h4>SERIE</h4></div><div class="col-md-3"><input type="text" name="serie" class="form-control"/></div>
    </div>
    <div class="row col-md-12 frente">
		<div class="col-md-6 text-right"><h4>CAUSA</h4></div><div class="col-md-3"><input type="text" name="causa" class="form-control" /></div>
    </div>
    <div class="row col-md-12 frente">
		<div class="col-md-6 text-right"><h4>PROCEDENCIA</h4></div><div class="col-md-3"><input type="text" name="procedencia" class="form-control"/></div>
    </div>
    <div class="row col-md-12 frente">
		<div class="col-md-6 text-right" style="height:50px;"><h4>PROVINCIA</h4></div><div class="col-md-3"><input type="text" name="provincia" class="form-control"/></div>
    </div>
    <div class="row col-md-12 frente">
		<div class="col-md-12 text-center" style="height:200px;"><input type="submit" name="btnBusca" value="Buscar" class="btn btn-warning btn-lg"/></div>
    </div>
</form>
</div>

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
<table class="table table-hover text-center" bgcolor="#FFF">
<thead bgcolor="#3BA5CB" style="font-weight:600;color:#FFF">
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

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<h2>Maecenas lectus</h2>
							<div class="balloon">
								<blockquote>&ldquo;&nbsp;&nbsp;Donec leo, vivamus ullamcorper fermentum nibh in augue pulvinar ullamcorper metus praesent a lacus at urna congue ullamcorper  rutrum.&nbsp;&nbsp;&rdquo;<br>
									<br>
									<strong>&ndash;&nbsp;&nbsp;John Smith</strong></blockquote>
							</div>
							<div class="ballon-bgbtm">&nbsp;</div>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>Donec dictum</h2>
							<ul class="default">
								<li>
									<h3>Mauris vulputate dolor sit amet</h3>
									<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
								</li>
								<li>
									<h3>Fusce ultrices fringilla metus</h3>
									<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
								</li>
								<li>
									<h3>Donec dictum metus in sapien</h3>
									<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>Nulla leifend</h2>
							<p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
							<ul class="style5">
								<li><a href="#"><img src="images/pics07.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/pics08.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/pics09.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/pics10.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/pics11.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/pics12.jpg" alt=""></a></li>
							</ul>
							<a href="#" class="button">More Collections</a>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>Luctus eleifend</h2>
							<p><strong>Aliquam erat volutpat. Pellentesque tristique ante ut risus. </strong></p>
							<p>Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit.</p>
							<p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
							<a href="#" class="button">More Collections</a>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright" class="container">
			Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
		</div>


	</body>
</html>