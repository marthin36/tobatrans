<?php 
if(isset($_POST['perbaruiTujuan'])){
	include('../conn.php');
	$id_tujuan = $_GET['id_tujuan'];
	$tempat_wisata = $_POST['tempatWisata']; 
	$harga = $_POST['harga'];


	// echo $tujuan;
	// echo $harga;

	$perbaruiTujuan = mysqli_query($conn, "UPDATE tujuan_toba_wisata set tempat_wisata ='$tempat_wisata' , harga = '$harga'  WHERE id_tujuan= '$id_tujuan'");


	if($perbaruiTujuan){
		 echo"<script>alert('Perbarui toba wisata Berhasil');</script>";
		header("location:data_tujuan_toba_wisata.php");
	}else{
		echo "<script>alert('Perbarui toba wisata Gagal');</script>";
		header("location:data_tujuan_toba_wisata.php");
	}
}


 ?>