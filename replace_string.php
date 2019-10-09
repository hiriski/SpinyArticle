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
	$filename="./$pech[2]/$filename";
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