
<?php
	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['konfirmasi'])){
		//inlcude atau memasukkan file koneksi ke database
		include('conn.php');

		//jika tombol tambah benar di klik maka lanjut prosesnya
		$idPesan = $_GET['id_pesan'];
		$status = $_POST['status'];


		echo $idPesan."<br>";
		echo $status;

		$ubah = mysqli_query($conn, "UPDATE pesan_mobil1 SET status='$status'WHERE id_pesan='$idPesan'");

		header("location:supir/supir.php");
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
