<?php

$db_name= "localhost";
$db_user= "root";
$password = "";

$db_nm = "kopihitam";

$conn = mysqli_connect($db_name, $db_user, $password, $db_nm);

if (!$conn) {
	echo "koneksi gagal";
}