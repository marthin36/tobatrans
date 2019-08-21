
<?php
	session_start();
	// echo $_SESSION['nomortelepon'];

	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['tanggapiPelanggan'])){
		//inlcude atau memasukkan file koneksi ke database
		include('../conn.php');

		//jika tombol tambah benar di klik maka lanjut prosesnya
		$idPesan = $_GET['id_pesan'];
		$keterangan_supir = $_POST['konfirmasiSupir'];
		$noTelpSupir = $_SESSION['nomortelepon'];	
		$namaSupir = $_SESSION['namalengkap'];
		$pasPhoto = $_SESSION['pas_photo'];
		$idSupir = $_SESSION['id_user'];

		$ubah = mysqli_query($conn, "UPDATE pesan_mobil SET pas_photo_supir ='$pasPhoto', nama_supir='$namaSupir',no_telp_supir='$noTelpSupir',keterangan_supir='$keterangan_supir', id_supir='$idSupir' WHERE id_pesan='$idPesan'");

		// echo $idPesan."<br>";
		// echo $pasPhoto."<br>";

		if($ubah){
			echo "kueri	 bekerja";
		}else{
			echo "kueri tidak bekerja";
		}
		header("location:supir.php");

	}
?>
