<?php 
$id=$_GET['idkh'];
	$connect=mysqli_connect("localhost","root","","noithat");
	$sql_taikhoan= "SELECT * FROM  taikhoan WHERE id=$id ";
	$query_taikhoan=mysqli_query($connect,$sql_taikhoan);
	$row=mysqli_fetch_assoc($query_taikhoan);
	if ($row['trangthai']=="block") {
		$sql= "UPDATE taikhoan SET trangthai='' WHERE id=$id ";
		$query=mysqli_query($connect,$sql);
	}
	else {
		$sql= "UPDATE taikhoan SET trangthai='block' WHERE id=$id ";
		$query=mysqli_query($connect,$sql);
	}	
	header("location: khachhang.php");
 ?>