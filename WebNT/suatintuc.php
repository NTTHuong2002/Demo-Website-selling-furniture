<?php 
include('menuadmin.php');
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['id'])) {
		$sql="SELECT * FROM tintuc WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($ketqua);
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa tin tức</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="ckeditor/ckeditor.js"></script>
	<script>
	</script>
</head>
<body>
	<?php  ?>
	<div id="main1" style="margin-left: 20%">
	<div class="container">
		<h1>Sửa danh mục</h1>
	<form action="xulytintuc.php" method="POST" >
		<input type="hidden" name="id" value="<?php echo $row['id'];?>" ><br>
		Tiêu đề: <input type="text" name="tieude" style="width: 50%" value="<?php echo $row['tieude'];?>"><br>
		Link ảnh cũ : <input type="text" name="anh1"value="<?php echo $row['anh'];?>" style="width: 50%"><br>
		Link ảnh mới: <input type="file" id="myfile" name="anh" ><br>
		Chú thích: <textarea  name="chuthich" cols="80" rows="5"><?php echo $row['chuthich']; ?></textarea><br>
		
		<br>
		Nội dung:  
		<textarea  class="ckeditor col-12" name="noidung" cols="80" rows="10" ><?php echo $row['noidung']?>
			
		</textarea> 
		
		<input type="submit" class="btn btn-primary " value="Sửa danh mục">
	</form>
	</div>
</div>
</body>
</html>