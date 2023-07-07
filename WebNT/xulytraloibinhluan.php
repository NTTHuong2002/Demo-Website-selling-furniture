<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","","noithat");
	$noidung=$_POST['noidung'];
	$idbl=$_POST['idbl'];
	$iduser=$_SESSION['id'];
	$tenuser=$_SESSION['ten'];
	$ngay=$_POST['ngay'];

	$sql="INSERT INTO traloibl(idbl,noidung,iduser,tenuser,ngay) VALUES($idbl,'$noidung',$iduser,'$tenuser','$ngay')";
	$ketqua=mysqli_query($conn,$sql);
 ?>