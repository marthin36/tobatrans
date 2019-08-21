<?php 
if(isset($_POST['perbaruiTujuan'])){
	include('../conn.php');
	$id_tujuan = $_GET['id_tujuan'];
	$tujuan = $_POST['tujuan']; 
	$harga = $_POST['harga'];


	// echo $tujuan;
	// echo $harga;

	$perbaruiTujuan = mysqli_query($conn, "UPDATE tujuan set kecamatan ='$tujuan' , harga = '$harga'  WHERE id_tujuan= '$id_tujuan'");


	if($perbaruiTujuan){
		 echo"<script>alert('Perbarui tujuan Berhasil');</script>";
		header("location:data_tujuan.php");
	}else{
		echo "<script>alert('Perbarui tujuan Gagal');</script>";
		header("location:data_tujuan.php");
	}
}


 ?>