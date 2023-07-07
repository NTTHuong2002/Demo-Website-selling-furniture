<?php 
session_start();
$connect=mysqli_connect("localhost","root","","noithat") or die("Can not connect
							database");
		$sql0="SELECT * from donhang WHERE id=".$_GET['iddh'];
		$query0=mysqli_query($connect,$sql0);
		$row0=mysqli_fetch_assoc($query0);
		$trangthai=5;
		$sqlup="UPDATE donhang SET trangthai=$trangthai WHERE id=".$_GET['iddh'];
		$queryup=mysqli_query($connect,$sqlup);
	if ($_SESSION['vt']=="admin") {
		header("location: danhsachdonhang.php");
	}
	else header("location: donmua.php");
	?>