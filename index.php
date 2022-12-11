<html>
<head>
	<title>Login Multiuser</title>
</head>
<body>
	<center><h3>Halaman Login <br/>....</h3>
	<?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<p>Maaf! Username & Password Salah.</p>";
		}else if($_GET['alert']=="belum_login"){
			echo "<p>Anda Harus Login Terlebih Dulu!</p>";
		}else if($_GET['alert']=="logout"){
			echo "<p>Anda Telah Logout!</p>";
		}
	}
	?>
	</center>
	<center>
	<table>
		<form action="aksi.php" method="post">
			<tr>
				<td>
					<label>Username</label>
				</td>
				<td>
					<input type="text" name="username" required="required">
				</td>
			</tr>
			
			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="password" name="password" required="required">
				</td>
			</tr>
			
			<tr>
				<td><input type="submit" class="tombol_login" value="login"></td>
				<td></td>
			</tr>
		</div>
	</table>
</center>
</body>
</html>