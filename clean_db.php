<?php 

$con=mysqli_connect("localhost","root","","spinygox");
$kueri_ambilkey=mysqli_query($con,"delete from data_spinner");

	
echo "<h1>Database berhasil dibersihkan kembali ke  <a href='index.php'>halaman utama</a></h1>";



?>