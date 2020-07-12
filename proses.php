<?php 
//menangkap isi variabel dari file yang telah kita isi pada form.php
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$nik = $_POST['nik'];
$golongan = $_POST['Golongan'];
$jaminankesehatan = $_POST['jaminankesehatan'];
$nokartu = $_POST['nokartu'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

//format data yang akan diparsing
 $data = "$nama|$ttl|$nik|$golongan|$jaminankesehatan|$nokartu|$jeniskelamin|$alamat|$notelp";

//buka file
$fh = fopen("form.txt", "w");
fwrite($fh, $data);

//tutup file data.txt
fclose($fh);

//keterangan bila data berhasil di input
echo"Data telah tersimpan</br><a href='tabel.php'>lihat data>></a>";
echo"</br><a href='form.php'>Kembali ke form<<</a>";
?>