<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","","noithat");
	$noidung=$_POST['noidung'];
	$idsp=$_POST['idsp'];
	$iduser=$_SESSION['id'];
	$tenuser=$_SESSION['ten'];
	$ngay=$_POST['ngay'];
	$sql="INSERT INTO binhluan(noidung,idsp,iduser,tenuser,thoigian) VALUES('$noidung',$idsp,'$iduser','$tenuser','$ngay')";
	$ketqua=mysqli_query($conn,$sql);
 ?>