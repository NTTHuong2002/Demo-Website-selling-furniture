<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
		$sql="DELETE  FROM tintuc WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		header("location: thongketintuc.php");				
?>