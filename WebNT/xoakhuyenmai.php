<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
		$sql="DELETE  FROM khuyenmai WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		header("location: danhsachkhuyenmai.php");				
?>