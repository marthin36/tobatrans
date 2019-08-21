<?php 
if(isset($_POST['perbaruiMobil'])){
	include('../commons/function.php');

	$id_mobil =$_GET['id_mobil'];
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

	echo $id_mobil.'<br>';
	echo $namaMobil."<br>";
	echo $fotoMobil."<br>";
	echo $platNomor."<br>";
	echo $kapasitasPenumpang."<br>";
	echo $fasilitas."<br>";
	// echo $fotoMobil."<br>";
		echo $jenis."<br>";

	 $perbaruiMobil = mysqli_query($conn,"UPDATE mobil SET foto_mobil = '$fotoMobil',nama_mobil= '$namaMobil' ,plat_nomor = '$platNomor' ,jenis = '$jenis',kapasitas_penumpang ='$kapasitasPenumpang', fasilitas = '$fasilitas' WHERE id_mobil = '$id_mobil'");

	 // var_dump($input);
	if($perbaruiMobil){
	 		// echo "berhasil";
	 		 echo"<script>alert('Update Mobil Berhasil');</script>";
	 		 header("location:data_mobil.php");
	 	}
	 	else{
	 		echo "<script>alert('Update Mobil gagal');</script>"; //Pesan jika proses tambah	gagal
	 		 header("location:data_mobil.php");//membuat Link untuk kembali ke halaman tambah
	 	}
	}
?>