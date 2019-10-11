<?php 

$con=mysqli_connect("localhost","root","","spinygox");
function replace_string_in_file($filename, $string_to_replace, $replace_with){
    $content=file_get_contents($filename);
    $content_chunks=explode($string_to_replace, $content);
    $content=implode($replace_with, $content_chunks);
    file_put_contents($filename, $content);
}
$kueri_ambilkey=mysqli_query($con,"select * from data_spinner");
$hit=0;
while($pech=mysqli_fetch_array($kueri_ambilkey)){
	
	$hit++;
	$filename="$pech[2]"."$pech[3]".".txt";
	$filename="./klien/$pech[2]/$filename";
	echo $hit;
	
	$string_to_replace="SPINNERKEYWORDS";
	$pengganti=ucwords($pech[1]);
    $replace_with="$pengganti";
   $iki_replace=replace_string_in_file($filename, $string_to_replace, $replace_with);
	if($iki_replace){
	echo ". $pech[1] , $filename  DONE Bro !!<br>"; } 
	else {
		echo "....fail...<br>";
	}
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="assets/plugin/ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/hk-grotesk/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Material-Icons/material-icons.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

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
          echo "<div class=\"main-heading\"><h1><i class=\"material-icons\">cached</i> <span>Replace String sukses</span></h1></div>";
        ?>
          <a class="btn btn-primary" href='index.php'><i class="material-icons">arrow_back</i> <span>Halaman Utama</span></a>
      </div>
		</div>
	</main>

<script src="assets/js/index.js"></script>

</body>
</html>	