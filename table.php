<html>
<head>
	<title>tabel</title>
	<style type="text/css">
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
		.footer{
			width: 100%;
			height: 70px;
			background-color:#696969;
			color: white;
			text-align: center;
			font-size: 20px;
			line-height: 40px;
			font-family: chiller;

		}


	</style>
<body>
	<div class="header">DATA PASIEN</div>

<?php
        $file="form.txt";
		$fp=fopen($file, "a+");

		echo "<div id='table'><h2>Tabel Data Pendaftar</h2>";
		while($data = fgets($fp, 600)){
			$pisah = explode("|", $data);
			
			echo "<table width='50%' border='2' cellpadding='3' cellspacing='3'>";
			echo"<tr>
					<td class='table1'>Nama</td>
					<td> $pisah[0]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>Tempat Tanggal Lahir</td>
					<td> $pisah[1]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>NIK</td>
					<td> $pisah[2]</td>
				</tr>";
            echo"<tr>
					<td class='table1'>Golongan Darah</td>
					<td> $pisah[3]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>Jaminan Kesehatan</td>
					<td> $pisah[4]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>No Kartu Jamkes</td>
					<td> $pisah[5]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>Jenis Kelamin</td>
					<td> $pisah[6]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>Alamat</td>
					<td> $pisah[7]</td>
				</tr>";
			echo"<tr>
					<td class='table1'>No telp</td>
					<td> $pisah[8]</td>
				</tr>";
            echo "</table><br></div>";
        }

     
        ?>
    <div class="footer">
		Copyright @JihanWala | 1900018003
	</div>
</body>
</html>
