<?php
include "koneksi.php";
$id = $_GET["id"];
$sql = "DELETE FROM `barang` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: admin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}