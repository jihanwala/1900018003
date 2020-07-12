<!DOCTYPE html>
<html>
<head>
	<title>Tugas 11</title>
	<style type="text/css">
			
body{
	background-image: url(images.jpg);
	background-position: center;
	background-size: cover;
	background-attachment: fixed;
	font-family: sans-serif;

}	
 
.tulisan_form{
	text-align: center;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 30px;
}
 
.card{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}

	</style>
</head>
<body>
	<div class="card">
	<p class="tulisan_form">DATA FORM PASIEN </p>
	<br>
	Nama Pasien   : <?php echo $_POST["name"];?><br>
	NIK           : <?php echo $_POST["nik"];?><br>
	Jenis Kelamin : <?php echo $_POST["jnskelamin"];?><br>
	Umur          : <?php echo $_POST["umur"];?><br>
	gejala        : <?php echo $_POST["gejala"];?><br>

	<?php  	
	fwrite($file,$name,$nik,$jnskelamin,$umur,$gejala);  
	fclose($file); 
	?> 
</div>
</body>
</html>