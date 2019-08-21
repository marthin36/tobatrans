<?php 
// $database =  new mysqli("localhost", "root", "" ,"tobatrans");

if (isset($_POST['pesanWisata'])) {
	include("conn.php");

	session_start();

	$id_user = $_SESSION['id_user'];
	$harga = $_POST['harga'];
	$namaPemesan = $_SESSION['namalengkap'];
	$metodeBayar = $_POST['metode_bayar'];
	$jumlahPengunjung = $_POST['jumlahPengunjung'];
	$totalHarga = $jumlahPengunjung * $harga; 
	$keteranganPengunjung = $_POST['keteranganPengunjung'];
	$tanggal =  date("Y-m-d h:i");
	$statusPemesanan = "di proses"; 
	$tujuan = $_POST['tujuan'];

	if($metodeBayar == "Bayar di tempat"){
		$buktiBayar = "bayar tunai";
	}else{
		$buktiBayar = "belum dikirim";
	}

	echo 'id user '.$id_user."<br>";
	echo 'total harga'.$totalHarga.'<br>';
	echo 'harga per orang  '.$harga.'<br>';
	echo 'nama pemesan  '.$namaPemesan."<br>";
	echo 'metode bayar  '.$metodeBayar."<br>";
	echo 'jumlah penumpang  '.	$jumlahPengunjung."<br>";
	echo 'total harga  '.$totalHarga.'<br>';
	echo 'keterangan pengunjung  '.$keteranganPengunjung;
	echo "<br>tanggal".$tanggal;
	echo "<br>bukti bayar ".$buktiBayar;
	echo "<br>status pemesanan  ".$statusPemesanan;
	echo "<br>tujuan ".$tujuan;

	  $input = mysqli_query($conn,"INSERT INTO toba_wisata values ('','$namaPemesan','$tujuan','$jumlahPengunjung',$totalHarga,'$keteranganPengunjung','$metodeBayar','$buktiBayar','$statusPemesanan','$tanggal','$id_user')");

	if($input){
		// echo "<br>kueri bekerja";
	echo"<script>alert('Pemesanan Wisata Berhasil');</script>";
	 		header("location:riwayat_pemesanan_wisata.php");
	}else{
		echo "<script>alert('Pemesanan Wisata Gagal');</script>"; //Pesan jika proses tambah	gagal
	 		header("location:pemesanan_wisata.php");//membuat Link untuk kembali ke halaman tambah
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