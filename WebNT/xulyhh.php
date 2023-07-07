<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
		$ten=$_POST['tenhang'];
		$soluong=$_POST['soluong'];
		$dongia=$_POST['dongia'];
		$iddanhmuc=$_POST['iddanhmuc'];
		$idkhuyenmai=$_POST['idkhuyenmai'];
		$mota=$_POST['mota'];
		if($_POST['anh']!=''){
			$anh=$_POST['anh'];
		}
		else {
			$anh=$_POST['anh1'];
		}
		$id1=$_POST['id'];
		$sql = "UPDATE hanghoa SET tenhang='$ten',soluong='$soluong',dongia='$dongia',anh='$anh',iddanhmuc=$iddanhmuc,mota='$mota',idkhuyenmai=$idkhuyenmai WHERE id=".$id1;
		$ketqua=mysqli_query($conn,$sql);		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xuly</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script > function load(){ location.replace("hanghoa.php") ;}  
     load();</script>
</head>
<body>
	<?php include("menu.php") ?>
	<h1>Sửa thành công</h1>
</body>
</html>