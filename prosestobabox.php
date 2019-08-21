<?php
include 'conn.php';

$nama_penerimas = $_POST['nama_penerima']; 
$nama_pengirims = $_POST['nama_pengirim']; 
$no_penerimas  = $_POST ['no_penerima'];
$no_pengirims  = $_POST ['no_pengirim'];
$keterangans   = $_POST ['keterangan'];
$kotas   = $_POST['kota'];
 $alamat_pengirims = $_POST['alamat_pengirim'];
$alamat_penerimas = $_POST['alamat_penerima']; 
$deskripsi  = $_POST['deskripsi'];

//query
$query = "INSERT INTO tobabox1 SET nama_penerima ='$nama_penerimas',nama_pengirim = '$nama_pengirims' , no_penerima = '$no_penerimas', no_pengirim = '$no_pengirims', keterangan = '$keterangans' , kota = '$kotas' , alamat_pengirim = '$alamat_pengirims' , alamat_penerima = '$alamat_penerimas' , deskripsi = '$deskripsi'";
$mantap = mysqli_query($query);
mysqli_query($conn,$query);
if($mantap){
 echo"<script>alert('Maaf Anda Tidak Terdaftar!');</script>";
      header("Refresh:0 url=tobabox.php");

}
else{
  echo "Masukkan anda ada yang salah";
}
header("location:tobabox.php");

?>

