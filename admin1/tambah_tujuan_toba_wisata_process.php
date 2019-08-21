<?php 
if(isset($_POST['tambahTujuanWisata'])){
	include('../commons/function.php');

	$nama_lokasi = $_POST['namaLokasi'];
	$harga_wisata = $_POST['hargaWisata'];

	// echo $nama_kecamatan.'<br>';
	// echo $harga_mobil.'<br>';

	// echo $namaMobil."<br>";
	// // echo $fotoMobil."<br>";
	// echo $platNomor."<br>";
	// echo $kapasitasPenumpang."<br>";
	// echo $fasilitas."<br>";
	// echo $fotoMobil."<br>";
	// 	echo $jenis."<br>";
	 $input = mysqli_query($conn, "INSERT INTO tujuan_toba_wisata VALUES('','$nama_lokasi','$harga_wisata')");

	if($input){
	 		echo"<script>alert('Tambah Tujuan Wisata Berhasil');</script>";
	 		header("location:data_tujuan_toba_wisata.php");
	 	}
	 	else{
	 		echo 'Gagal menambahkan galeri '; //Pesan jika proses tambah	gagal
	 		header("location:data_tujuan_toba_wisata.php");//membuat Link untuk kembali ke halaman tambah
	 	}
	}
?>