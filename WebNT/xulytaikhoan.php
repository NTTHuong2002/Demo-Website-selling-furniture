<?php 
	 $connect=mysqli_connect("localhost","root","","noithat");
	 session_start();
	 if (isset($_POST['submit'])) {
	 	$tendaydu= $_POST['tendaydu'];
		$diachi= $_POST['diachi'];
		$gioitinh= $_POST['gioitinh'];
		$ngaysinh= $_POST['ngaysinh'];
		$anh= $_POST['anh'];
	 	$sql="UPDATE taikhoan set tendaydu='$tendaydu',diachi='$diachi',gioitinh='$gioitinh',ngay='$ngaysinh',anh='$anh' where id=".$_SESSION['id'];
	 	$ketqua=mysqli_query($connect,$sql);
	if ($_SESSION['vt']=="admin") {
		header("location: taikhoanadmin.php");
	}
	else header("location: taikhoan.php"); 	
	}
?>