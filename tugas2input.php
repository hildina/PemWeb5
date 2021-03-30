<html>
<head>
	<title>Login Page</title>
    <!-- digunakan untuk mengatur letak text, ketebalan text, memberi warna dan memberi border -->
    <style type="text/css">
		body{
			background-color: #8FBC8F;
			width: 80%;
		}
		h1{
			color: #2F4F4F;
			font-weight: lighter;
			font-size: 50px;
			margin-left: 120px;
		}
		label{
			color: #2F4F4F;
			font-weight: lighter;
			font-size: 25px;
		}
		form{
			margin-top: 150px;
			margin-left:20%;
		}
		input[type=text]{
		    font-size: 15px;
		    width: 90%;
		    padding: 5px 15px;
		    margin: 8px 0;
		    border: 2px solid #ccc;
		    transition: 0.5s;
		    border-radius: 15px;
		}
		input[type=submit],
		input[type=reset]{
		    font-size: 15px;
		    color: white;
		    border-radius: 3px;
		    padding: 7px 20px;
		    cursor:pointer;
		    margin-top: 15px;
		}
		input[type=text]:focus {
		    border: 2px solid red;
		}
		input[type=submit]:hover,
		input[type=reset]:hover{
		    opacity:0.9;
		}
		input[type=reset]{
   			background: #2E8B57
		}
		input[type=submit]{
   			background: #2E8B57
		}
	</style>
</head>
<body>
	<!--membuat form yang menggunakan method POST-->
	<form method="POST" action="tugas2postAct.php">
		<!--membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--membuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--membuat tombol untuk mengeksekusi file postAct.php-->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>