<?php 
// $database =  new mysqli("localhost", "root", "" ,"tobatrans");

if (isset($_POST['pesanMobil'])) {
	include("conn.php");

	session_start();
	$id_user = $_SESSION['id_user'];
	$namaPelanggan = $_SESSION['namalengkap'];
	$id_mobil = $_GET['id_mobil']; 

	$query2 = "SELECT * FROM mobil where id_mobil=$id_mobil";
	$tujuan = mysqli_query($conn, $query2);
	$tujuan1 = mysqli_fetch_array($tujuan);
	$namaMobil = $tujuan1['nama_mobil'];
	$plat_nomor= $tujuan1['plat_nomor'];


	$jumlahPenumpang = $_POST['jumlah_penumpang']; 
	$tujuan = $_POST['tujuan'];
	$harga = $_POST['harga'];
	$keteranganPenumpang = $_POST['keteranganPenumpang'];
	$totalHarga = $harga * $jumlahPenumpang;
	$status = "di proses";
	$tanggal =  date("Y-m-d h:i");

	
	// xx

	$input = mysqli_query($conn,"INSERT INTO pesan_mobil values ('','$namaPelanggan','$tujuan','$jumlahPenumpang',$totalHarga,'$keteranganPenumpang','$tanggal','','','','$namaMobil','$plat_nomor','','','','$id_user','$id_mobil')");

	if($input){
		echo "<br>kueri bekerja";
		echo"<script>alert('Pemesanan Mobil Berhasil');</script>";
	 		header("location:riwayat_pemesanan_mobil.php");
	}else{
	 		echo "<script>alert('Pemesanan Mobil Gagal');</script>"; //Pesan jika proses tambah	gagal
	 		header("location:mobil.php");//membuat Link untuk kembali ke halaman tambah
	 }

	// 	if($input){
	//  		echo "kueri bekerja";
	//  		
	//  	}
	//  	else{
	//  		echo "<script>alert('Pemesanan Mobil Gagal');</script>"; //Pesan jika proses tambah	gagal
	//  		header("location:mobil.php");//membuat Link untuk kembali ke halaman tambah
	//  	}

}

	// echo mysqli_error($conn);



 ?>