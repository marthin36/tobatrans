
<?php
	// session_start();
	// echo $_SESSION['nomortelepon'];

	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['beriPersetujuan'])){
		//inlcude atau memasukkan file koneksi ke database
		include('../conn.php');

		//jika tombol tambah benar di klik maka lanjut prosesnya
		$id_lamaran = $_GET['id_lamaran'];
		
		$beriPersetujuan = $_POST['ajukan'];
		// $keterangan_supir = $_POST['konfirmasiSupir'];
		// $noTelpSupir = $_SESSION['nomortelepon'];	
		// $namaSupir = $_SESSION['namalengkap'];
		// $pasPhoto = $_SESSION['pas_photo'];
		// $idSupir = $_SESSION['id_user'];


		// echo $id_lamaran."<br>";
		// echo $beriPersetujuan;
		// echo $notifikasiPersetujuan."<br>";
		$ubah = mysqli_query($conn, "UPDATE lamaran_supir SET status_supir ='$beriPersetujuan' WHERE id_lamaran='$id_lamaran'");

		// echo $idPesan."<br>";
		// echo $pasPhoto."<br>";

		if($ubah){
			echo "<script>alert('Persetujuan telah dikirim');</script>";
		}else{
			echo "<script>alert('Persetujuan tidak dikirim');</script>";
		}
		header("location:data_lamaran_supir.php");

	}
?>
