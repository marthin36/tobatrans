
<?php
	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['edit'])){
		//inlcude atau memasukkan file koneksi ke database
		include('conn.php');
		//jika tombol tambah benar di klik maka lanjut prosesnya
		session_start();
		
 
$id = $_SESSION['id_user'];
 $namalengkaps = $_POST['namalengkap'];
$tanggallahirs = $_POST['tanggallahir'];
$jenis_kelamins = $_POST['jenis_kelamin'];
$alamats = $_POST['alamat'];
$nomortelepons = $_POST['nomortelepon'];
$emails = $_POST['email'];
$usernames = $_POST['username'];
$passwords= $_POST['password'];
$role = 2;
		
		if($_FILES['gambar']['name']){
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'image/profil/'.$namalengkaps.'.jpg');
			//proses menyimpan gambar ke dalam direktori
			$gambar = 'image/profil/'.$namalengkaps.'.jpg'; //membuat variabel $picture untuk disimpan sebagai url gambar ke dalam database
		}
		//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
		 $hasil = mysqli_query($conn,"UPDATE user SET namalengkap ='$namalengkaps', tanggallahir ='$tanggallahirs', jenis_kelamin = '$jenis_kelamins', alamat = '$alamats', nomortelepon = '$nomortelepons', email = '$emails' ,username='$usernames',password='$passwords' WHERE id_user='$id'");
		 

		 // $query = "INSERT INTO tobabox1 SET nama_penerima ='$nama_penerimas',nama_pengirim = '$nama_pengirims' , no_penerima = '$no_penerimas', no_pengirim = '$no_pengirims', keterangan = '$keterangans' , kota = '$kotas' , alamat_pengirim = '$alamat_pengirims' , alamat_penerima = '$alamat_penerimas' , deskripsi = '$deskripsi'";
		 
		//jika query update sukses
		if($hasil){
			echo"<script>alert('Edit Profil Berhasil');</script>";
			header("Refresh:0 url=index.php");
		}
		else{
			echo 'Gagal menyimpan data! '; //Pesan jika proses simpan gagal
			header("location:profil.php"); //membuat Link untuk kembali ke halaman edit
		}
	}
	else{ //jika tidak terdeteksi tombol simpan di klik
		//redirect atau dikembalikan ke halaman edit
		echo '<script>window.history.back()</script>';
	}
?>
