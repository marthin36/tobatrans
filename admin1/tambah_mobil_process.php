<?php 
if(isset($_POST['tambahMobil'])){
	include('../commons/function.php');

	$namaMobil = $_POST['namaMobil'];
	$fotoMobil = $_POST['fotoMobil'];
	$platNomor = $_POST['platNomor'];
	$kapasitasPenumpang = $_POST['kapasitasPenumpang'];
	$jenis = $_POST['jenis'];
	$fasilitas = $_POST['fasilitas'];

	if($_FILES['fotoMobil']['name']){
		move_uploaded_file($_FILES['fotoMobil']['tmp_name'], '../image/mobil/'.$namaMobil.'.jpg'); 
		//proses menyimpan gambar ke dalam direktori
		$fotoMobil = ''.$namaMobil.'.jpg'; //membuat variabsel $profile untuk disimpan sebagai url gambar ke dalam database
	}


	echo $namaMobil."<br>";
	echo $fotoMobil."<br>";
	echo $platNomor."<br>";
	echo $kapasitasPenumpang."<br>";
	echo $fasilitas."<br>";
	// echo $fotoMobil."<br>";
		echo $jenis."<br>";

	 $input = mysqli_query($conn, "INSERT INTO mobil VALUES('','$fotoMobil','$namaMobil','$platNomor','$jenis','$kapasitasPenumpang','$fasilitas')");

	 // var_dump($input);
	if($input){
	 		echo"<script>alert('Tambah Mobil Berhasil');</script>";
	 		header("location:data_mobil.php");
	 	}
	 	else{
	 		echo 'Gagal menambahkan galeri '; //Pesan jika proses tambah	gagal
	 		header("location:data_mobil.php");//membuat Link untuk kembali ke halaman tambah
	 	}
	}
?>