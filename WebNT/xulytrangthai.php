<?php 
$connect=mysqli_connect("localhost","root","","noithat") or die("Can not connect
							database");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
		
		$sql0="SELECT * from donhang WHERE id=".$_POST['id'];
		$query0=mysqli_query($connect,$sql0);
		$row0=mysqli_fetch_assoc($query0);
		$trangthai=$row0['trangthai']+1;
		$sqlup="UPDATE donhang SET trangthai=$trangthai WHERE id=".$_POST['id'];
		$queryup=mysqli_query($connect,$sqlup);
	} 
	header("location: danhsachdonhang.php");
	?>