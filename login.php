<?php 
session_start(); 
// mengambil database yang dibuat
include "koneksi.php";

// USER MENGAMBIL DARI INPUT HALAMAN LOGIN DAN PASSWORD
if (isset($_POST['user']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
/// untuk memvalidasi dari jika user menginput 
	$name = validate($_POST['user']);
	$pass = validate($_POST['password']);
/// JIKA KOSONG AKAN MEMUNCULKAN OUTPUT User Name tidak tersedia DAN Password tidak tersedia
	if (empty($name)) {
		header("Location: index.php?error=User Name tidak tersedia");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password tidak tersedia");
	    exit();
	}else{
/// UNTUK MENGAMBIL USERNAME DAN PASSWORD DIDATABASE  
		$sql = "SELECT * FROM login WHERE user_name='$name' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['nama'] = $row['nama'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: admin.php");
		        exit();
/// JIKA BERHASIL MAKA AKAN MASUK FILE HOME.PHP / HALAMAN UTAMA
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
/// JIKA SALAH AKAN MASUK KE FILE SALAH.HTML
		}else{
			header("Location: salah.html");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}