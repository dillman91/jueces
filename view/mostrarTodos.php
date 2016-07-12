<!doctype html>
<html>
<head>
<?php
session_start();
if (!isset($_SESSION['Administrador'])){
header("location: ../moduloPublico/web/index.html"); 
}
?>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<?php include "includes/header.php"; ?>
<?php
	require "../model/selects.php";
	$listas = new Selecciones();
	$query = $listas->seleccionarTodo();
?>
<?php if($_REQUEST){ ?>
<div class="row">
	<div class="alert alert-success text-center"><h3><?php echo @$_REQUEST['mensaje']; ?></h3></div>
</div> <?php }?>
<table class="table table-hover col-lg-12">
    <thead bgcolor="#3BA5CB" class="text-center" style="font-weight:600;color:#FFF">
        <td>ID</td>
        <td>A. MATERNO</td>
        <td>A. PATERNO</td>
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
        <td></td>
        <td></td>
    </thead>
    <?php
    while($f=$query->fetch_array()){
    ?>
    <tr>
        <td><?php echo $f[0]; ?></td>
        <td><?php echo $f[1]; ?></td>
        <td><?php echo $f[2]; ?></td>
        <td><?php echo $f[3]; ?></td>
        <td><?php echo $f[4]; ?></td>
        <td><?php echo $f[5]; ?></td>
        <td><?php echo $f[6]; ?></td>
        <td><?php echo $f[7]; ?></td>
        <td><?php echo $f[8]; ?></td>
        <td><?php echo $f[9]; ?></td>
        <td><?php echo $f[10]; ?></td>
        <td><?php echo $f[11]; ?></td>
        <td><?php echo $f[12]; ?></td>
        <td><?php echo $f[13]; ?></td>
        <td><a href="formEditar.php?id=<?php echo $f[0];?>" class="btn btn-warning">EDITAR</a></td>
        <td><a href="../controller/controllerForm.php?id_eliminar=<?php echo $f[0];?>" class="btn btn-danger" value="ELIMINAR" name="btnEliminar">ELIMINAR</a></td>
    </tr>
    <?php 
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