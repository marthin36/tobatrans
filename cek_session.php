<?php
session_start();
//mengecek apakah session username kosong atau tidak
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header('location:index.php');
}
?>