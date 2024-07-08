<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--  Background Website -->
<div id="gradient-bg">
		<div calss="gradient-container">
			<div class="gradient1"></div>
			<div class="gradient2"></div>
			<div class="gradient3"></div>
			<div class="gradient4"></div>
			<div class="gradient5"></div>
		</div>
</div>
	
<!-- Form Login  -->
<div id="form-container">
<!-- MENGAMBIL PROGAM DARI LOGIN.PHP DENGAN METODE POST -->
<form action="login.php" method="post">
     	<h2>SELAMAT DATANG DIHALAMAN LOGIN DATABASE BARANG</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="user" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</div>
</body>
</html>