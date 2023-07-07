<?php  
	$conn=mysqli_connect("localhost","root","","noithat");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$tenshop=$_POST['tenshop'];
		if($_POST['anh']!=''){
		
			$anh=$_POST['anh'];
		}
		else {
			$anh=$_POST['anhcu'];
		}
		$gioithieu=$_POST['gioithieu'];
		$giatri=$_POST['giatri'];
		$tamnhin=$_POST['tamnhin'];
		$sumenh=$_POST['sumenh'];
		$sql1 = "UPDATE cuahang SET tenshop='$tenshop',anh='$anh',gioithieu='$gioithieu',giatri='$giatri',tamnhin='$tamnhin',sumenh='$sumenh'";
		$ketqua1=mysqli_query($conn,$sql1);	
		
		header("location: cuahang.php");
	}		
		
?>