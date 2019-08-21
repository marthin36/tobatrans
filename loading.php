<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">
	$(document).ready(function(){$(".preloader").delay(250).fadeOut("slow");})
</script>
   	
<style>
   	
    </style>
    <style type="text/css">
    #preloader{
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color:#fff;
    }

    .preloader .loading{
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font :14px arial;
    }
.loader{
	border:16px solid #f3f3f3;
	border-radius:50%;
	border-top:16px solid green;
	width: 70px;
	height: 70px;
	-webkit-animation:spin 2s linear infinite;
	animation: spin 2s linear infinite;
}

@-webkit-keyframes spin{
	0% { -webkit-transform:rotate(0deg); }
	100%{-webkit-transform;rotate(360deg); }

}
@keyframes spin{
	0% { transform : rotate(0deg);}
	100% { transform:rotate(360deg); }
}


</style>
</head>
<body>
<div class="preloader">
		<div class="loading">
			<img src="image/logo.png" width="1080">
	 		
	 		<center><div class="loader"></div>	</center>
		</div>
	</div>
	
</body>
</html>