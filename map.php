<?php 
	require_once("function.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Map</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

	<link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/half-slider.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="jquery/jquery-3.2.1.min.js"></script>
<style >
	body{
    /*background-image: url("image/avanza1.jpg");*/
     background-repeat: no-repeat;
     /*background-position: center;*/
     background-size: cover;
	}
</style>
</head>
<body id="login">
	<?php 
	require_once("header.php");
	 ?><br><br><br><br><br><br>
<br><br><br><br><br><br>
	 <div class="container">
	<center>
		 <!-- Menyisipkan library Google Maps  -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
		<!-- Elemen yang akan menjadi kontainer peta -->
    	<div id="googleMap" style="width:100%;height:300px;"></div>
    	</center>
    	<br></br>
    	<h4>
    		Toba Trans merupakan aplikasi web yang bergerak di bidang transportasi. Toba Trans di kawasan dekat dengan bandara Silangit yang terletak di Tapanuli Utara, Sumatera Utara.
    	</h4>
	</div>
</body>
</html>