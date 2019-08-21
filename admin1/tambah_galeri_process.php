<?php 
if(isset($_POST['tambahGaleri'])){
	include('../commons/function.php');

	$judul = $_POST['judul'];
	$gambar = $_POST['gambar'];
	$lokasi = $_POST['lokasi'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = date("Y-m-d h:i");

	if($_FILES['gambar']['name']){
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../image/galeri/'.$judul.'.jpg'); 
		//proses menyimpan gambar ke dalam direktori
		$gambar = ''.$judul.'.jpg'; //membuat variabsel $profile untuk disimpan sebagai url gambar ke dalam database
	}else{
			echo ("salah kode <br>");
		}

	// echo $judul."<br>";
	// echo $tanggal."<br>";
	// echo $deskripsi."<br>";
	// echo $tanggal."<br>";

	$input = mysqli_query($conn, "INSERT INTO galeri VALUES('','$judul','$gambar','$lokasi','$deskripsi', '$tanggal')");

	if($input){
		// echo "kueri bekerja";
			echo"<script>alert('Tambah Galeri Berhasil');</script>";
			header("location:data_galeri.php");
		}
		else{
			echo 'Gagal menambahkan galeri ';
			} //Pesan jika proses tambah	gagal
	// 		header("location:data_galeri.php");//membuat Link untuk kembali ke halaman tambah
	// 	}
	}
	
?>