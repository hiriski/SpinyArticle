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


	<main>
		<div class="content">
			<form id="spinnerygoz" name="spinnerygoz" action="spinnerygo.php" method="POST">
				<div class="form-group">
					<label for="nama_folder">Nama Folder</label>
					<input class="form-control" type="text" name="namaklien" id="nama_folder" placeholder="Nama Folder">
					<small class="form-text text-muted">Nama folder tempat artikel disimpan</small>
				</div>

				<div class="form-group">
					<label for="jumlah_artikel">Jumlah Artikel</label>
					<input class="form-control" type="number" id="jumlah_artikel" name="jum_artikel" placholder="Jumlah Artikel">
					<small class="form-text text-muted">Jumlah artikel yang ingin di generate</small>
				</div>

				<div class="form-group">
					<label for="jumlah_artikel">Text Spinner</label>
					<textarea class="form-control" name="artikelz" placeholder="Teks Spinner"></textarea>
					<small class="form-text text-muted">Artikel spintax yang ingin diproses</small>
				</div>

				<div class="form-group">
					<input class="btn btn-primary" type="submit" name="submit" value="Proses">
				</div>

			</form>

		</div>
	</main>
	
</div>

<button type="submit" class="btn btn-primary">Submit</button>

<script src="assets/js/index.js"></script>
</body>
</html>	