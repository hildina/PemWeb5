<!-- digunakan untuk mengatur letak text, ketebalan text, memberi warna dan memberi border -->
<style type="text/css">
		body{
			background-color: #8FBC8F;
			width: 80%;
		}
</style>
<!--deklarasi script php-->
<?php
	//script untuk mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<center><h2>HELOO!! ".$_POST['nama'].", Ini Data Diri Kamu"."</h2></center><br>";
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Tempat,tanggal lahir :".$_POST['ttl']."</center><br>";
	echo "<center>Alamat Rumah :".$_POST['alamat']."</center><br>";
	echo "<center>No. WA:".$_POST['wa']."</center><br>";
	echo "<center>Hobi : ".$_POST['hobi']."</center><br>";
?>