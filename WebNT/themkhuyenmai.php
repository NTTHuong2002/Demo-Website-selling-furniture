<?php include("menuadmin.php"); ?>
<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_POST['tieude'])){
		$tieude=$_POST['tieude'];
		$anh=$_POST['anh'];
		$noidung=$_POST['noidung'];
		$giamgia=$_POST['giamgia'];
		$sql="INSERT INTO khuyenmai(tieude,noidung,anh,giamgia) VALUES('$tieude','$noidung','$anh',$giamgia)";
		$ketqua=mysqli_query($conn,$sql);
		
	}
				
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm khuyến mãi</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="ckeditor/ckeditor.js"></script>
	
	
</head>
<body style="background: #F5F5F5">
	<div id="main1" style="margin-left: 20%">
	<div class="container" style="background: #FFF">
		<div class="col-sm-12 form-group" >
			<h2 >Thêm chương trình khuyến mãi</h2>

			<form action="themkhuyenmai.php" method="POST" >
				Tiêu đề <input type="text" name="tieude" ><br>
				<label for="anh">Link ảnh:</label>
				<input type="file" id="myfile" name="anh"><br>
				Khuyến mãi giảm giá: <select name="giamgia">
					<option value="0.1">10%</option>
					<option value="0.2">20%</option>
					<option value="0.5">50%</option>
				</select>
				<br>
				Nội dụng:  <textarea  class="ckeditor col-12" name="noidung" cols="80" rows="10" >
				        </textarea> 
				<input type="submit" class="btn btn-primary" value="Thêm">
			</form>
		</div>
	
	</div>
</div>
</body>
</html>