<?php 
if(isset($_POST['kirimBukti'])){
	
	include('conn.php');

	session_start();
	
	$id_toba = $_GET['id_toba'];
	$namaPemesan = $_SESSION['namalengkap'];
	$fotoBukti = $_POST['fotoBukti'];
	

	if($_FILES['fotoBukti']['name']){
		move_uploaded_file($_FILES['fotoBukti']['tmp_name'],'image/bukti_bayar/'.$namaPemesan.'.jpg'); 
		//proses menyimpan gambar ke dalam direktori
		$fotoBukti = ''.$namaPemesan.'.jpg'; //membuat variabsel $profile untuk disimpan sebagai url gambar ke dalam database

		echo "tersimpan";
	}else{
		echo "tidak tersimpan";
	}


	echo 'id toBA'.$id_toba."<br>";
	echo 'NAMA '.$namaPemesan."<br>";
	echo 'nama foto '.$fotoBukti."<br>";



	// echo $fotoMobil."<br>";
	// echo $platNomor."<br>";
	// echo $kapasitasPenumpang."<br>";
	// echo $fasilitas."<br>";
	// // echo $fotoMobil."<br>";
	// 	echo $jenis."<br>";

	//  $input = mysqli_query($conn, "INSERT INTO mobil VALUES('','$fotoMobil','$namaMobil','$platNomor','$jenis','$kapasitasPenumpang','$fasilitas')");

	//  // var_dump($input);
	// if($input){
	//  		echo"<script>alert('Tambah Mobil Berhasil');</script>";
	//  		header("location:data_mobil.php");
	//  	}
	//  	else{
	//  		echo 'Gagal menambahkan galeri '; //Pesan jika proses tambah	gagal
	//  		header("location:data_mobil.php");//membuat Link untuk kembali ke halaman tambah
	//  	}
	}
?>