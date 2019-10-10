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

for ( $i = 1; $i < $jum_artikel; $i++) {
//echo $spintax->process($string);
/* NESTED SPINNING EXAMPLE */

$aha=$spintax->process($string);
//$aha= $aha."<br>";

$dir_to_save = "./klien/$nama_folder/";
if (!is_dir($dir_to_save)) {
  mkdir($dir_to_save,0777,TRUE);
}
$filenya="$nama_folder"."$i".".txt";
file_put_contents($dir_to_save.$filenya, $spintax->process($string), FILE_APPEND | LOCK_EX);
	
//$masukkan=mysqli_query($con,"UPDATE data_spinner set article='$aha' ");
	
}
?>
