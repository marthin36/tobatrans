
<?php
	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['beriStatusMobil'])){
		//inlcude atau memasukkan file koneksi ke database
		include('../conn.php');

		$id_mobil = $_GET['id_mobil'];
		$statusMobil = $_POST['status_mobil'];
		echo $id_mobil;
		echo $statusMobil;

		$beriStatus = mysqli_query($conn, "UPDATE mobil SET status='$statusMobil' WHERE id_mobil='$id_mobil'");
		 if($beriStatus){
		 	echo "<script>alert('Status Mobil di perbarui');</script>";

		 }else{
		 	echo "<script>alert('Gagal');</script> ";
 	 	}
 	 	header("location:data_mobil.php?page=1");


		//jika tombol tambah benar di klik maka lanjut prosesnya
		// $idToba = $_GET['id_toba'];

		// $query = "SELECT * FROM toba_wisata where id_toba_wisata = $idToba";
		// $kon = mysqli_query($conn, $query);
		// $kon1 = mysqli_fetch_array($kon);	

		// // $status = $_POST['status'];
		// $konfirmasi = $_POST['statusPemesanan'];

		// // echo $idToba."<br>";
		// // echo $konfirmasi."<br>";
		// // echo $kon1['bukti_bayar']."<br>";

		// if($kon1['bukti_bayar'] == "belum dikirim" && $konfirmasi == "Lunas"){
		// 	echo "<script>alert('Transaksi selesai');</script> ";

		// }else{
		// 	echo "<script>alert('Transaksi gagal');</script> ";
 	// 	}


		// $ubah = mysqli_query($conn, "UPDATE toba_wisata SET status_transaksi='$konfirmasi' WHERE id_toba_wisata='$idToba'");

		// if($ubah){
		// 	echo "<script>alert('Konfirmasi berhasil di kirim');</script> ";

		// }else{
		// 	echo "<script>alert('konfirmasi gagal');</script> ";
 	// 	}

 	// 	header("location:data_toba_wisata.php");

	}
?>
