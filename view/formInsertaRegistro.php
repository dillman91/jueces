<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin t&iacute;tulo</title>
<link href="../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION['Administrador'])){
header("location: ../moduloPublico/web/index.html"); 
}
?>
<?php include "includes/header.php"; ?>
<script>
function texto(){ 
      	document.envioForm.ap_paterno.defaultValue = "FALTANTE";
		document.envioForm.ap_materno.defaultValue = "FALTANTE"; 
      	document.envioForm.nombres.defaultValue = "FALTANTE"; 
      	document.envioForm.inicio.defaultValue = "0001-01-01"; 
      	document.envioForm.fin.defaultValue = "0001-01-01"; 
      	document.envioForm.serie.defaultValue = "FALTANTE"; 
      	document.envioForm.causa.defaultValue = "FALTANTE"; 
      	document.envioForm.folios.defaultValue = "FALTANTE"; 
      	document.envioForm.caja.defaultValue = "FALTANTE"; 
      	document.envioForm.procedencia.defaultValue = "FALTANTE"; 
      	document.envioForm.provincia.defaultValue = "FALTANTE";
}
</script>
<div class="row" style="height:100px;">
	<div class="text-center"><h1>REGISTRAR NUEVO LIBRO</h1></div>
</div>
  <table class="table table-hover">
    <form action="../controller/controllerForm.php" method="post" name="envioForm">
			<tr><td colspan="4" class="text-center"><input type="button" class="btn btn-danger" name="perdido" value="LIBRO FALTANTE" onclick="texto()"/></td></tr>
		    <tr>
    	    	<td class="text-right"><h4>APELLIDO PATERNO</h4></td>
        	    <td><input type="text" name="ap_paterno" class="form-control" required/></td>
                <td class="text-right"><h4>APELLIDO MATERNO</h4></td>
        	    <td><input type="text" name="ap_materno" class="form-control"/></td>
       	 	</tr>
            <tr>
    	    	<td class="text-right"><h4>NOMBRES</h4></td>
        	    <td><input type="text" name="nombres" class="form-control" required/></td>
                <td class="text-right"><h4>FECHA INICIO</h4></td>
        	    <td><input type="date" name="inicio" class="form-control" required/></td>
       	 	</tr>
            <tr>
    	    	<td class="text-right"><h4>FECHA FIN</h4></td>
        	    <td><input type="date" name="fin" class="form-control" required/></td>
                <td class="text-right"><h4>SERIE DOCUMENTAL</h4></td>
        	    <td><input type="text" name="serie" class="form-control" required/></td>
       	 	</tr>
            <tr>
    	    	<td class="text-right"><h4>CAUSA</h4></td>
        	    <td><input type="text" name="causa" class="form-control" required/></td>
                <td class="text-right"><h4>FOLIOS</h4></td>
        	    <td><input type="text" name="folios" class="form-control" required/></td>
       	 	</tr>
            <tr>
    	    	<td class="text-right"><h4>NUMERO DE CAJA</h4></td>
        	    <td><input type="text" name="caja" class="form-control" required/></td>
                <td class="text-right"><h4>LIBRO</h4></td>
        	    <td><input type="text" name="libro" class="form-control" required/></td>
       	 	</tr>
            <tr>
    	    	<td class="text-right"><h4>PROCEDENCIA</h4></td>
        	    <td><input type="text" name="procedencia" class="form-control" required/></td>
                <td class="text-right"><h4>PROVINCIA</h4></td>
        	    <td><input type="text" name="provincia" class="form-control" required/></td>
       	 	</tr>
            <tr>
    	    	<td class="text-right"><h4>OBSERVACION</h4></td>
        	    <td><input type="text" name="observacion" class="form-control" value="DETERIORADO"/></td>
       	 	</tr>
            <tr>
           	<tr><td colspan="4" class="text-center"><input type="submit" value="REGISTRAR" name="btnFormulario" class="btn btn-success btn-lg"/></td></tr>
            </div>
        </div>
    </form>
  </table>
<?php include "includes/footer.php"; ?>
</body>
</html>