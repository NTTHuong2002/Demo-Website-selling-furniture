<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
		$sql="DELETE  FROM danhmuc WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
	<script > function load(){ location.replace("admin.php") ;}  
     load();</script>
</head>
<body>
</body>
</html>