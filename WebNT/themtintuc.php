 <?php include("menuadmin.php"); ?>
<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_POST['tieude'])!='') {
		$sql="INSERT INTO tintuc(tieude,chuthich,noidung,anh) VALUES('".$_POST['tieude']."','".$_POST['chuthich']."','".$_POST['noidung']."','".$_POST['anh']."')";
		$ketqua=mysqli_query($conn,$sql);
	}
					
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm tin tức</title>
	<script src="ckeditor/ckeditor.js"></script>

</head>
<body style="background: #F5F5F5">
	<div id="main1" style="margin-left: 20%">
	<div class="container" style="background: #FFF">
		<div class="col-sm-12 form-group" >
			<form action="themtintuc.php" method="POST" >
				<h2 >Thêm tin tức</h2>
				Tiêu đề: <input type="text" name="tieude"><br>
				Chú thích: <input type="text" name="chuthich"><br>
				Link ảnh: <input type="file" class="btn " id="myfile" name="anh"><br>
				Nội dung::  <textarea  class="ckeditor col-12" name="noidung" cols="80" rows="10" >
				        </textarea> 
				
				<br>
				<input type="submit" class="btn btn-primary " value="Thêm ">
			</form>
		</div>
	</div>
	</div>

</body>
</html>