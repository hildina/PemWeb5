<!-- digunakan untuk memberi warna -->
<style type="text/css">
		body{
			background-color: #8FBC8F;
			width: 80%;
		}
</style>
<!--deklarasi script php-->
<?php
	//script untuk mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	//script memanggil file tugas1include.php
	include 'tugas1include.php';
?>