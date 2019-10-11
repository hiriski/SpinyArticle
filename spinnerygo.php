<?PHP
/**
 * Spintax - A helper class to process Spintax strings.
 * @name Spintax
 * @author Jason Davis - https://www.codedevelopr.com/
 * Tutorial: https://www.codedevelopr.com/articles/php-spintax-class/
 */

//$con=mysqli_connect("localhost","root","","spinygox");
class Spintax {
    public function process($text) {
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*)\}/x',
            array($this, 'replace'),
            $text
        );
    }
    public function replace($text) {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts,1)];
    }
}

/* EXAMPLE USAGE */
$spintax = new Spintax();

$jum_artikel    = $_POST['jum_artikel'];
$nama_folder    = $_POST['namaklien'];
$string         = $_POST['artikelz'];

for ( $i = 1; $i <= $jum_artikel; $i++) {
//echo $spintax->process($string);
/* NESTED SPINNING EXAMPLE */

$aha=$spintax->process($string);
//$aha= $aha."<br>";

$dir_to_save = "./klien/$nama_folder/";
if (!is_dir($dir_to_save)) {
  mkdir($dir_to_save,0777,TRUE);
}

$filenya    = "$nama_folder"."$i".".txt";

file_put_contents($dir_to_save.$filenya, $spintax->process($string), FILE_APPEND | LOCK_EX);

//$masukkan=mysqli_query($con,"UPDATE data_spinner set article='$aha' ");
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
<?php require_once('partials/modal-help.php'); ?>
<?php require_once('partials/modal-table.php'); ?>
<?php require_once('partials/modal-download-sample.php'); ?>

	<main push-main="true">
		<div class="content">
      <div class="box text-center">
        <?php
          echo "<div class=\"main-heading\"><h1><i class=\"material-icons\">folder</i> <span>Folder berhasil dibuat</span></h1></div>";
        ?>
          <a class="btn btn-primary" href='index.php'><i class="material-icons">arrow_back</i> <span>Halaman Utama</span></a>
      </div>
		</div>
	</main>

<script src="assets/js/index.js"></script>

</body>
</html>	