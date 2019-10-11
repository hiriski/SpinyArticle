<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/hk-grotesk/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Material-Icons/material-icons.css">

	<title>SPINY GO</title>
	
</head>
<body>
  
<div id="spiny-go">

<?php require_once('partials/header.php'); ?>
<?php require_once('partials/aside.php'); ?>

	<main push-main="true">
		<div class="content">
      <div class="box text-center">
        <?php
          $con=mysqli_connect("localhost","root","","spinygox");
          $kueri_ambilkey=mysqli_query($con,"delete from data_spinner");
          echo "<div class=\"main-heading\"><h1><i class=\"material-icons\">delete</i> <span>Database berhasil dibersihkan</span></h1></div>";
        ?>
          <a class="btn btn-primary" href='index.php'><i class="material-icons">arrow_back</i> <span>Halaman Utama</span></a>
      </div>
		</div>
	</main>
	
</div>

<script src="assets/js/index.js"></script>
</body>
</html>	
