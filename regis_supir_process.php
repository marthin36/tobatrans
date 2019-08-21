<?php 
// $database =  new mysqli("localhost", "root", "" ,"tobatrans");

if (isset($_POST['tambahLamaran'])) {
	include("conn.php");

	$nama = $_POST['nama'];
	$kendaraan = $_POST['kendaraan'];
	$pengalaman = $_POST['pengalaman'];
	$alamatemail = $_POST['alamat'];
	$notelp = $_POST['notelp'];
	$deskripsi = $_POST['deskripsi'];
	$status = "Di proses";
	
	// xx

	$input = mysqli_query($conn,"INSERT INTO lamaran_supir values('','$nama','$kendaraan','$pengalaman','$alamatemail','$notelp','$deskripsi','$status')");

	if($input){
		// echo "kueri bekerja";
		echo"<script>alert('Lamaran supir  Berhasil ditambahkan');</script>";
	 		
	}else{
		// echo "kueri tidak bekertja";
	 		echo "<script>alert('Lamaran Supir Gagal');</script>"; //Pesan jika proses tambah	gagal
	 		// header("location:regis_supir.php");//membuat Link untuk kembali ke halaman tambah
	 }

	header('Refresh:0 url=regis_supir.php');

}

	// echo mysqli_error($conn);



 ?>