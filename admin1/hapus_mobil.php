<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "tobatrans");

	//$conn = mysqli_connect("localhost", "p1d4ti08", "6YsE4o1p", "p1d4ti08_pu");
		
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "tobatrans") or die("Select Database Problem !!");

	$id = $_GET['id_mobil'];
    $query = "DELETE FROM mobil WHERE id_mobil='$id'";
	if($conn->query($query)==true){
		echo"<script>alert('Hapus Galeri Berhasil');</script>";
	}
    header('Refresh:0 url=data_mobil.php');
?>