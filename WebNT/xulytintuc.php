<?php  
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['id'])) {
		$sql="SELECT * FROM tintuc WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($ketqua);
	}	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$tieude=$_POST['tieude'];
		if($_POST['anh']!=''){
		
			$anh=$_POST['anh'];
		}
		else {
			$anh=$_POST['anh1'];
		}
		$chuthich=$_POST['chuthich'];
		$noidung=$_POST['noidung'];
		$sql1 = "UPDATE tintuc SET tieude='$tieude',chuthich='$chuthich',noidung='$noidung',anh='$anh' WHERE id=".$_POST['id'];
		$ketqua1=mysqli_query($conn,$sql1);	
		
		header("location: thongketintuc.php");
	}		
		
?>