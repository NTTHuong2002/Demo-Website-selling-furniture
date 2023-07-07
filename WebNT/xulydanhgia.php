<?php 
	session_start();
	if (isset($_POST['danhgia'])) {
		$danhgia=$_POST['danhgia'];
	}
	else {
		$danhgia=0;
	}
	$connect=mysqli_connect("localhost","root","","noithat");
	$sql="SELECT * FROM danhgia WHERE idsp=".$_GET['idhang']." and iduser=".$_SESSION['id']."";
	$query=mysqli_query($connect,$sql);
	$date=getdate();
	$ngay=''.$date['year'].'-'.$date['mon'].'-'.$date['mday'].'';
	if (mysqli_num_rows($query)>0) {
		$sql1="UPDATE  danhgia set danhgia=".$_POST['danhgia']." WHERE idsp=".$_GET['idhang']." and iduser=".$_SESSION['id']."";
		$query1=mysqli_query($connect,$sql1);
	}
	else{
	$sql1="INSERT INTO danhgia(idsp,iduser,danhgia,ngay) values(".$_GET['idhang'].",".$_SESSION['id'].",".$danhgia.",'".$ngay."') ";
	$query1=mysqli_query($connect,$sql1);
	}
	header("location: chitietsp.php?idhang=".$_GET['idhang']."");
?>