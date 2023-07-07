
<!DOCTYPE html>
<html>
<head>
	<title>Đăng xuất</title>
	<script > 
        	  
        	function hoanthanh(){ 
        		location.replace("trangchu.php") ;

        	} 
     			hoanthanh();
 </script>
</head>
<body>
	<?php include("menu.php") ?>
	<h1>Đăng xuất thành công</h1>
	<?php  

	unset($_SESSION['ten']);
	unset($_SESSION['vt']);
	unset($_SESSION['id']);
	unset($_SESSION['dem']);
	?>
</body>
</html>