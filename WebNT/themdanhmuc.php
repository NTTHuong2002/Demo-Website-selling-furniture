 <?php include("menuadmin.php"); ?>
<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['tendanhmuc'])!='') {
		$sql="INSERT INTO danhmuc(tendanhmuc,anh,ngay,mota,idphong) VALUES('".$_GET['tendanhmuc']."','".$_GET['anh']."','".$_GET['ngay']."','".$_GET['mota']."','".$_GET['idphong']."')";
		$ketqua=mysqli_query($conn,$sql);
	}
				
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm danh mục</title>
	<script src="ckeditor/ckeditor.js"></script>

</head>
<body style="background: #F5F5F5">
	<div id="main1" style="margin-left: 20%">
	<div class="container" style="background: #FFF">
		<div class="col-sm-12 form-group" >
			<form action="themdanhmuc.php" method="GET" >
				<h2 >Thêm danh mục</h2>
				Tên danh mục: <input type="text" name="tendanhmuc"><br>
				Ngày: <input type="date" name="ngay"><br>
				Link ảnh: <input type="file" class="btn " id="myfile" name="anh"><br>
				<select name="idphong" >
					<?php
						$sqlPh="SELECT * FROM loaiphong";
						$ketquaPh=mysqli_query($conn,$sqlPh);
						while($row1=mysqli_fetch_assoc($ketquaPh)){
							echo '<option value="'.$row1['id'].'">'.$row1['tenphong'].'</option>';
						}

					?>
				</select>
				Phần mô tả:  <textarea  class="ckeditor col-12" name="mota" cols="80" rows="10" >
				        </textarea> 
				
				<br>
				<input type="submit" class="btn btn-primary " value="Thêm danh mục">
			</form>
		</div>
	</div>
	</div>

</body>
</html>