<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>
<link href="../public/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php 
session_start();
if (!isset($_SESSION['Administrador'])){
header("location: ../moduloPublico/web/index.html"); 
}
else
{
include "includes/header.php"; 
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Sistema de Libro de Jueces</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center">
      <img src="../public/img/arp_logo_mini.png" width="150"/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3 class="text-center">Archivo Regional Puno</h3>
    </div>
  </div>
</div>
<?php include "includes/footer.php"; ?>
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/bootstrap.js"></script>
<?php } ?>
</body>
</html>
