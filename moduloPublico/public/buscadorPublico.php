<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="container text-info">
	<div class="row">
    	<div class="col-md-12 text-center" style="height:100px;"><font size="+3" style="font-weight:600;">BUSCADOR</font></div>
    </div>
<form action="buscadorPublico.php" method="post" name="buscar">
	<div class="row col-md-12">
    	<div class="col-md-6 text-right"><strong>NOMBRE</strong></div><div class="col-md-3"><input type="text" name="nombre" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right"><strong>SERIE</strong></div><div class="col-md-3"><input type="text" name="serie" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right"><strong>CAUSA</strong></div><div class="col-md-3"><input type="text" name="causa" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right"><strong>PROCEDENCIA</strong></div><div class="col-md-3"><input type="text" name="procedencia" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-6 text-right" style="height:50px;"><strong>PROVINCIA</strong></div><div class="col-md-3"><input type="text" name="provincia" class="form-control"/></div>
    </div>
    <div class="row col-md-12">
		<div class="col-md-12 text-center" style="height:100px;"><input type="submit" name="btnBusca" value="Buscar" class="btn btn-warning btn-lg"/></div>
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
<table class="table table-hover text-center">
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



<footer>
	<div class="col-md-12" style="height:45px; background:#035182; color:#FFF;">
    	<div class="text-center"><h4>&copy; Copyright - OFICINA DE INFORMATICA</h4></div>
    </div>
</footer>
</body>
</html>