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


<form>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input
type="email"
class="form-control"
id="exampleInputEmail1"
aria-describedby="emailHelp"
placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input
type="password"
class="form-control"
id="exampleInputPassword1"
placeholder="Password"></div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>


			<form name="spinnerygoz" action="spinnerygo.php" method="POST">
				<div class="form">

				</div>


				<b>Nama Folder</b><br>
				Nama folder tempat artikel disimpan<br>
				<input type="text" name="namaklien" placeholder="Nama Folder"><br><br>
				<b>Teks Spinner</b><br>
				Artikel spintax yang ingin diproses<br>
				<textarea name="artikelz" placeholder="Teks Spinner"></textarea>
				<br><br>
				<b>Jumlah Artikel</b><br>
				jumlah artikel yang ingin digenerate<br>
				<input type="text" name="jum_artikel" placholder="Jumlah Artikel"><br><br>
				<input type="submit" name="submit" value="Proses"><br>
			</form>
		</div>
	</main>
	
</div>

<script src="assets/js/index.js"></script>
</body>
</html>	