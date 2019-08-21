
<?php
	// session_start();
	// echo $_SESSION['nomortelepon'];

	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['beriKomentar'])){
		//inlcude atau memasukkan file koneksi ke database
		include('conn.php');

		//jika tombol tambah benar di klik maka lanjut prosesnya
		$idPesan = $_GET['id_pesan'];
		$komentarPenumpang = $_POST['komentarPenumpang'];
		// $keterangan_supir = $_POST['konfirmasiSupir'];
		// $noTelpSupir = $_SESSION['nomortelepon'];	
		// $namaSupir = $_SESSION['namalengkap'];
		// $idSupir = $_SESSION['id_user'];

		echo 'id pesan'.$idPesan."<br>";
		echo $komentarPenumpang."<br>";
		// echo 'id supir'.$idSupir."<br>";
		// echo $keterangan_supir."<br>";
		// echo $noTelpSupir."<br>";
		// echo $namaSupir;
		// echo $_SESSION['nomortelepon'];

		$ubah = mysqli_query($conn, "UPDATE pesan_mobil SET komentar_penumpang='$komentarPenumpang' WHERE id_pesan='$idPesan'");
		// if($ubah){
		// 	echo "kueri bekerja";
		// }else{
		// 	echo "kueri tiddak bekerja";
		// }

		header("location:riwayat_pemesanan_mobil.php");

		// $gambar = $_POST['gambar'];
		// $deskripsi = $_POST['deskripsi'];
		// $tanggal = date("Y-m-d h:i");

	// echo $judul."<br>";
	// echo $gambar."<br>";
	// echo $deskripsi."<br>";
		
	// echo $tanggal."<br>";
		
		// if($_FILES['gambar']['name']){
		// 	move_uploaded_file($_FILES['gambar']['tmp_name'], '../image/galeri/'.$judul.'.jpg');
		// 	//proses menyimpan gambar ke dalam direktori
		// 	$gambar = ''.$judul.'.jpg'; //membuat variabel $picture untuk disimpan sebagai url gambar ke dalam database
		// }else{
		// 	echo 'salah_kode<br>';
		// }
		//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
		 // $hasil = mysqli_query($conn, "UPDATE galeri SET judul_galeri='$judul', gambar='$gambar', deskripsi='$deskripsi',tanggal='$tanggal' WHERE id_galeri='$id_galeri'");

	// 	 if($hasil){
	// 	 	echo 'kueri bekerja';
	// 	 }else{
	// 	 	echo 'Mmaaaf, tidak bekerja';
	// 	 }
	
	// echo $judul."<br>";
	// echo $gambar."<br>";
	// echo $deskripsi."<br>";
	// echo $tanggal."<br>";
		 
		//jika query update sukses
		// if($hasil){
		// 	echo"<script>alert('Edit Galeri Berhasil');</script>";
		// 	header("location:data_galeri.php");
		// }
		// else{
		// 	echo 'Gagal memperbarui Galeri '; //Pesan jika proses simpan gagal
		// 	header("location:data_galeri.php"); //membuat Link untuk kembali ke halaman edit
		// }
	
	// else{ //jika tidak terdeteksi tombol simpan di klik
		//redirect atau dikembalikan ke halaman edit
	// 	echo '<script>window.history.back()</script>';
	// }
	}
?>
