<?php 
include('menuadmin.php');
	$conn=mysqli_connect("localhost","root","","noithat");
		$sql="SELECT * FROM cuahang  ";
		$ketqua=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($ketqua);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="ckeditor/ckeditor.js"></script>
	<script>
	</script>
</head>
<body>
	<?php  ?>
	<div id="main1" style="margin-left: 20%">
	<div class="container">
		<h1>Thông tin cửa hàng</h1>
	<form action="capnhatcuahang.php" method="POST" >
		Tên shop: <input type="text" name="tenshop" style="width: 50%" value="<?php echo $row['tenshop'];?>"><br>
		Link ảnh cũ : <input type="text" name="anhcu"value="<?php echo $row['anh'];?>" style="width: 50%"><br>
		Link ảnh mới: <input type="file" id="myfile" name="anh" ><br>
		
		<br>
		Giới thiệu:  
		<textarea  class="ckeditor col-12" name="gioithieu" cols="80" rows="10" >
			<?php echo $row['gioithieu']?>
		</textarea> 
		Giá trị:
		<textarea  class="ckeditor col-12" name="giatri" cols="80" rows="10" >
			<?php echo $row['giatri']?>
		</textarea> 
		Tần nhìn:
		<textarea  class="ckeditor col-12" name="tamnhin" cols="80" rows="10" >
			<?php echo $row['tamnhin']?>
		</textarea> 
		Sứ mệnh:
		<textarea  class="ckeditor col-12" name="sumenh" cols="80" rows="10" >
			<?php echo $row['sumenh']?>
		</textarea> 
		
		<input type="submit" class="btn btn-primary " value="Cập nhật">
	</form>
	</div>
</div>
</body>
</html>