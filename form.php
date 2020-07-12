<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 3</title>
	<style type="text/css">
	body{
	margin: 0px;
	padding: 0px;
	background-image: url(back.jfif);
	background-position: center;
	background-size: cover;
	background-attachment: fixed;
	font-family: sans-serif;

}	
.header{
width: 100%;
height: 70px;
background-color: #696969;
color: white;
font-size: 35px;
text-align: center;
font-weight: bold;
line-height: 40px;

}
 
	.tulisan_form{
	text-align: center;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 30px;
}
 
.kotak_form{
	width: 500px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}
.tombol_login{
	background: #696969;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
</style>

</head>
<body>
	<div class="header">
		PENDAFTARAN ONLINE PUSKEMAS		
	</div>
	
	<div class="kotak_form">
		<p class="tulisan_form">FORM PASIEN </p>
	<form method="POST" action="dataform.php">

		<div> <label for="name">Nama Lengkap</label>
		<label>:</label>
		<input type="text" name="name" size="25"></div><br>

		<div> <label for="nik">NIK :</label>
		<input type="text" name="nik"> </div><br>

		<div><label for="jaminankesehatan">Jaminan Kesehatan : </label>
			<input type="radio" id="BPJS" name="jaminankesehatan" value="BPJS">
			<label for="BPJS">BPJS</label>
			<input type="radio" id="ASKES" name="jaminankesehatan" value="ASKES">
			<label for="ASKES">ASKES</label>
			<input type="radio" id="JAMKESMAS" name="jaminankesehatan" value="JAMKESMAS">
			<label for="JAMKESMAS">JAMKESMAS</label>
			<input type="radio" id="KIS" name="jaminankesehatan" value="KIS">
			<label for="KIS">KIS</label>			
		</div><br>

		<div><label for="nokartu">NO Kartu Jamikes :</label>
		<input type="text" name="nokartu" size="25"></div><br>


		<div> <label for="jnskelamin">Jenis Kelamin :</label>
		<input type="radio" id="laki-laki" name="jnskelamin" value="laki-laki">
		<label for="laki-laki">Laki-Laki</label>
		<input type="radio" id="perempuan" name="jnskelamin" value="perempuan"> 
		<label for="radio">Perempuan</label>
		</div><br>

		<div><label for="umur">Umur :</label>
		<input type="text" name="umur" size="15"></div><br>

		<div><label for="alamat">Alamat :</label> 
			<input type="text" name="alamat" height="10" width="15">
		</div><br>

		<div><label for="gejala"><b></b><b>Gejala </b>:</label>
		<textarea name="gejala"></textarea></div>
		<br><br>

<input type="submit" class="tombol_login" value="LOGIN">

	

	</form>
	</div>

</body>
</html>