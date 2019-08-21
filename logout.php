<?php
	session_start();
	session_destroy();

    echo"<script>alert('Logout berhasil');</script>";
      
	header('location:index.php');
?> 