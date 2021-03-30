	<!--deklarasi script PHP-->
	<?php
		//script untuk mengatur waktu
		date_default_timezone_set("Asia/Jakarta");
		//script untuk menampilkan pada hari apa dan jam berapa loginnya
		echo "<center>Anda login pada : ".date("D, m F Y, G:i:s")."</center>";
	?>