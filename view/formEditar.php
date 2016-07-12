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
<?php
	require "../model/selects.php";
	$class = new Selecciones();
	$resul = $class->id_juez($_GET['id']);
	$res = $resul->fetch_array();
?>
</head>
<body>
<?php include "includes/header.php"; ?>
<div class="row" style="height:100px;">
	<div class="text-center"><h1>EDITAR REGISTRO</h1></div>
</div>
    <form action="../controller/controllerForm.php" method="post" name="envioForm">
		<table class="table table-hover">
	        <tr>
    	    	<td>APELLIDO PATERNO</td>
        	    <td><input type="text" name="ap_paterno" value="<?php echo $res[1];?>" class="form-control"/></td>
                <td>APELLIDO MATERNO</td>
        	    <td><input type="text" name="ap_materno" value="<?php echo $res[2];?>"  class="form-control"/></td>
             </tr>
             <tr>
    	    	<td>NOMBRES</td>
        	    <td><input type="text" name="nombres" value="<?php echo $res[3];?>" class="form-control"/></td>
                <td>INICIO</td>
        	    <td><input type="date" name="inicio" value="<?php echo $res[4];?>" class="form-control"/></td>
       	 	</tr>
            <tr>
    	    	<td>FIN</td>
        	    <td><input type="date" name="fin" value="<?php echo $res[5];?>" class="form-control"/></td>
                <td>SERIE</td>
        	    <td><input type="text" name="serie" value="<?php echo $res[6];?>" class="form-control"/></td>
       	 	</tr>
            <tr>
    	    	<td>CAUSA<</td>
        	    <td><input type="text" name="causa" value="<?php echo $res[7];?>" class="form-control"/></td>
                <td>FOLIOS</td>
        	    <td><input type="text" name="folios" value="<?php echo $res[8];?>" class="form-control"/></td>
       	 	</tr>
            <tr>
    	    	<td>CAJA</td>
        	    <td><input type="text" name="caja" value="<?php echo $res[9];?>" class="form-control"/></td>
                <td>LIBRO</td>
        	    <td><input type="text" name="libro" value="<?php echo $res[10];?>" class="form-control"/></td>
       	 	</tr>
            <tr>
    	    	<td>PROCEDENCIA</td>
        	    <td><input type="text" name="procedencia" value="<?php echo $res[11];?>" class="form-control"/></td>
                <td>PROVINCIA</td>
        	    <td><input type="text" name="provincia" value="<?php echo $res[12];?>" class="form-control"/></td>
       	 	</tr>
            <tr>
    	    	<td>OBSERVACION</td>
        	    <td><input type="text" name="observacion" value="<?php echo $res[13];?>" class="form-control"/>
                <input type="hidden" name="id" value="<?php echo $res[0]; ?>" class="form-control"></td>
       	 	</tr>
            <tr>
            <tr><td colspan="4" class="text-center"><input type="submit" value="EDITAR" name="btnEditar" class="btn btn-success btn-lg"/></td></tr>
      </table>
    </form>
</body>
</html>