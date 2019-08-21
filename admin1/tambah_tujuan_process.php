<?php 
if(isset($_POST['tambahTujuan'])){
	include('../commons/function.php');

	$nama_kecamatan = $_POST['namaKecamatan'];
	$harga_mobil = $_POST['hargaMobil'];

	// echo $nama_kecamatan.'<br>';
	// echo $harga_mobil.'<br>';

	// echo $namaMobil."<br>";
	// // echo $fotoMobil."<br>";
	// echo $platNomor."<br>";
	// echo $kapasitasPenumpang."<br>";
	// echo $fasilitas."<br>";
	// echo $fotoMobil."<br>";
	// 	echo $jenis."<br>";
	 $input = mysqli_query($conn, "INSERT INTO tujuan VALUES('','$nama_kecamatan','$harga_mobil')");

	if($input){
	 		echo"<script>alert('Tambah Mobil Berhasil');</script>";
	 		header("location:data_tujuan.php");
	 	}
	 	else{
	 		echo 'Gagal menambahkan galeri '; //Pesan jika proses tambah	gagal
	 		header("location:data_tujuan.php");//membuat Link untuk kembali ke halaman tambah
	 	}
	}
?>