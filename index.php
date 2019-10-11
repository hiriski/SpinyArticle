<?php $conn = mysqli_connect("localhost", "root", "", "spinygox");
if (isset($_POST["import"])) {
    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into data_spinner (id,keyword,namaklien,no_file)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "')";
            $result = mysqli_query($conn, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Uppss.. terjadi kesalahan.";
            }
        }
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
	
	<script type="text/javascript">
	$(document).ready(function() {
			$("#frmCSVImport").on("submit", function () {

				$("#response").attr("class", "");
					$("#response").html("");
					var fileType = ".csv";
					var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
					if (!regex.test($("#file").val().toLowerCase())) {
								$("#response").addClass("error");
								$("#response").addClass("display-block");
							$("#response").html("File harus berextensi : <b>" + fileType + "</b>.");
							return false;
					}
					return true;
			});
	});
	</script>

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
			<div class="box import text-center">

				<div class="row">
					<div class="col-12">

				<h4>Import CSV file</h4>
    
				<div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>

					<div class="outer-scontainer">
						<div class="row">

							<form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
		
							<div class="inputFile">
								<label for="file" class="sr-only">Upload file CSV </label>
								<input type="file" id="file" name="file" accept=".csv">
							</div>

							<button type="submit" id="submit" name="import" class="btn btn-primary"><span>Import</span>
								<i class="material-icons">system_update_alt</i></button>
							</form>

						</div> <! -- .row -->
					</div>

					</div>
				</div>
			</div>
		</div>


		<div class="content">
			<div class="box">

				<form id="spinnerygoz" name="spinnerygoz" action="spinnerygo.php" method="POST">

				<div class="row">
					<div class="col-sm-12 col-lg-6">
						<div class="form-group">
							<label for="nama_folder">Nama Folder</label>
							<input class="form-control" type="text" name="namaklien" id="nama_folder" placeholder="Nama Folder" require>
							<small class="form-text text-muted">Nama folder tempat artikel disimpan</small>
						</div>
					</div>

					<div class="col-sm-12 col-lg-6">
						<div class="form-group">
							<label for="jumlah_artikel">Jumlah Artikel</label>
							<input class="form-control" type="number" id="jumlah_artikel" name="jum_artikel" placholder="Jumlah Artikel" require>
							<small class="form-text text-muted">Jumlah artikel yang ingin di generate</small>
						</div>
					</div>
				</div> <!-- row -->

				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label for="ckeditor">Artikel Spinner</label>
							<textarea id="ckeditor" class="ckeditor form-control" name="artikelz" placeholder="Teks Spinner"></textarea>
							<small class="form-text text-muted">Artikel spintax yang ingin diproses</small>
						</div>
					</div>
				</div>

				<div class="form-group text-md-center">
					<button type="submit" name="submit" class="btn btn-primary"><span>Proses</span> <i class="material-icons">arrow_forward</i></button>
				</div>

				</form>

			</div>
		</div>
	</main>
	
</div>





<script src="assets/js/index.js"></script>



<script>
$('input[type="file"]').each(function() {
    // get label text
    var label = $(this).parents('.form-group').find('label').text();
    label = (label) ? label : '<i class="material-icons">save_alt</i> Upload csv file';

    // wrap the file input
    $(this).wrap('<div class="input-file"></div>');
    // display label
    $(this).before('<span class="btn">'+label+'</span>');
    // we will display selected file here
    $(this).before('<span class="file-selected"></span>');

    // file input change listener 
    $(this).change(function(e){
        // Get this file input value
        var val = $(this).val();
        
        // Let's only show filename.
        // By default file input value is a fullpath, something like 
        // C:\fakepath\Nuriootpa1.jpg depending on your browser.
        var filename = val.replace(/^.*[\\\/]/, '');

        // Display the filename
        $(this).siblings('.file-selected').text(filename);
    });
});

// Open the file browser when our custom button is clicked.
$('.input-file .btn').click(function() {
    $(this).siblings('input[type="file"]').trigger('click');
});
</script>

</body>
</html>	