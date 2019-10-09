<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css"> -->
  <title>SPINY GO</title>
</head>
<body>
  
<div id="spiny-go">
  <main>


	<style type="text/css">
.divi { padding:0px 15px 15px 15px; font-family:calibri;}
textarea, input {background:#f3f3f3; padding:5px; border:none;}
	b{ font-size:20px; text-transform:uppercase;}

</style>
<div class="divi">
<h1>SPINY GO</h1> </br>
<?php include"menu.php"; ?>

</br></br>
<form name="spinnerygoz" action="spinnerygo.php" method="POST">
<b>Nama Folder</b><br>
Nama folder tempat artikel disimpan<br>
<input type="text" name="namaklien"><br><br>
<b>Teks Spinner</b><br>
Artikel spintax yang ingin diproses<br>
<textarea name="artikelz" rows="25" cols="130"></textarea>
<br><br>
<b>Jumlah Artikel</b><br>
jumlah artikel yang ingin digenerate<br>
<input type="text" name="jum_artikel"><br><br>
<input type="submit" name="submit" value="Proses"><br>


</form>
</div>

  </main>
</div>

<script src="src/js/index.js"></script>
</body>
</html>