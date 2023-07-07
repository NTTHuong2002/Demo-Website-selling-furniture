<?php 
include('menuadmin.php');
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['id'])) {
		$sql="SELECT * FROM danhmuc WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($ketqua);
	}	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$ten=$_POST['tendanhmuc'];
		if($_POST['anh']!=''){
		
			$anh=$_POST['anh'];
		}
		else {
			$anh=$_POST['anh1'];
		}
		$id1=$_POST['id'];
		$ngay=$_POST['ngay'];
		$mota=$_POST['mota'];
		$idphong=$_POST['idphong'];
		$sql1 = "UPDATE danhmuc SET tendanhmuc='$ten',anh='$anh',ngay='$ngay',mota='$mota',idphong=$idphong WHERE id=".$_POST['id'];
		$ketqua1=mysqli_query($conn,$sql1);	
	}				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa danh mục</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script>
	</script>
</head>
<body>
	<?php  ?>
	<div id="main1" style="margin-left: 20%">
	<div class="container">
		<h1>Sửa danh mục</h1>
	<form action="suadm.php" method="POST" >
		<input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
		Tên danh mục: <input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuc'];?>"><br>
		Link ảnh cũ : <input type="text" name="anh1" value="<?php echo $row['anh']; ?>"><br>
		Link mới: <input type="file" id="myfile" name="anh" value="<?php echo $row['anh'];?>"><br>
		Ngày: <input type="date" name="ngay"><br>
		<select name="idphong" >
			<?php
				$sqlPh="SELECT * FROM loaiphong";
				$ketquaPh=mysqli_query($conn,$sqlPh);
				while($row1=mysqli_fetch_assoc($ketquaPh)){
					echo '<option value="'.$row1['id'].'">'.$row1['tenphong'].'</option>';
				}

			?>
		</select>
		<br>
		Phần mô tả:  
		<textarea  class="ckeditor col-12" name="mota" cols="80" rows="10" ><?php echo $row['mota']?>
			
		</textarea> 
		
		<input type="submit" class="btn btn-primary " value="Sửa danh mục">
	</form>
	</div>
</div>
</body>
</html>