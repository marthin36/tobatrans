<?php 
if(isset($_POST['kirimBukti'])){
	
	include('conn.php');

	session_start();
	
	$id_toba = $_GET['id_toba'];
	$namaPemesan = $_SESSION['namalengkap'];
	$fotoBukti = $_POST['fotoBukti'];
	

	if($_FILES['fotoBukti']['name']){
		move_uploaded_file($_FILES['fotoBukti']['tmp_name'],'image/bukti_bayar/'.$id_toba.'.jpg'); 
		//proses menyimpan gambar ke dalam direktori
		$fotoBukti = ''.$id_toba.'.jpg'; //membuat variabsel $profile untuk disimpan sebagai url gambar ke dalam database

	 }	
	// 	echo 'id toBA'.$id_toba."<br>";
	// echo 'NAMA '.$namaPemesan."<br>";
	// echo 'nama foto '.$fotoBukti."<br>";


	 $krmBukti = mysqli_query($conn,"UPDATE toba_wisata SET bukti_bayar = '$fotoBukti' WHERE id_toba_wisata = '$id_toba'");

	 if($krmBukti){
	 	echo"<script>alert('Kirim bukti bayar berhasil');</script>";
		
	 	echo "data masuk";
	 }else{
	 	echo"<script>alert('Kirim bukti bayar gagal');</script>";
	 }
	 header("location:riwayat_pemesanan_wisata.php");

	// echo "tersimpan";
	// }else{
	// 	echo "tidak tersimpan";
	// }





	// echo $fotoMobil."<br>";
	// echo $platNomor."<br>";
	// echo $kapasitasPenumpang."<br>";
	// echo $fasilitas."<br>";
	// // echo $fotoMobil."<br>";
	// 	echo $jenis."<br>";

	  // $input = mysqli_query($conn, "INSERT INTO mobil VALUES('','$fotoMobil','$namaMobil','$platNomor','$jenis','$kapasitasPenumpang','$fasilitas')");

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