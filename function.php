<?php 
function connect_database(){
	$database =  mysqli_connect("localhost", "root", "" ,"tobatrans");
	if(!$database){
			echo ("Tidak terkoneksi ");
	return $database;
 	}
}


 ?>