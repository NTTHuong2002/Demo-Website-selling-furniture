<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['id'])) { 
		$sql="SELECT * FROM hanghoa WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		$row1=mysqli_fetch_assoc($ketqua);	
	}			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa hàng hóa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<?php include('menuadmin.php') ?>
	<div id="main1" style="margin-left: 20%">
	<div class="container">
		<h1>Sửa hàng hóa</h1>
	<form action="xulyhh.php" method="POST" >
		
		<input type="hidden" name="id" value="<?php echo $row1['id'];?>"><br>
		Tên mặt hàng: <input type="text" name="tenhang" value="<?php echo $row1['tenhang'];?>"><br>
		Số lượng: <input type="text" name="soluong" value="<?php echo $row1['soluong'];?>"><br>
		Đơn giá: <input type="text" name="dongia" value="<?php echo $row1['dongia'];?>"><br>
		Link ảnh cũ : <input type="text" name="anh1" value="<?php echo $row1['anh']; ?>"><br>
		Link mới: <input type="file" id="myfile" name="anh" value="<?php echo $row1['anh'];?>"><br>
		Danh mục: 
		<select name="iddanhmuc" >
			<?php
				$sql="SELECT * FROM danhmuc";
				$ketqua=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($ketqua)){
					$sel='';
					if($row['id']==$row1['iddanhmuc']) $sel="selected";
					echo '<option value="'.$row['id'].'"'.$sel.'>'.$row['tendanhmuc'].'</option>';
				}

			?>
		</select><br>
		Khuyến mãi giảm giá:
		<select name="idkhuyenmai">
			<?php  
				$sql_khuyenmai="SELECT * FROM khuyenmai ";
				$ketqua_khuyenmai=mysqli_query($conn,$sql_khuyenmai);
				while ($row_khuyenmai = mysqli_fetch_assoc($ketqua_khuyenmai)) {
					$gi=$row_khuyenmai['giamgia']*100;
					if ($row1['idkhuyenmai']==$row_khuyenmai['id']) {
						
			?>
					<option value="<?php echo $row_khuyenmai['id']; ?>" selected><?php echo $gi; ?>%</option>
			<?php 
					}else {
			?>
					<option value="<?php echo $row_khuyenmai['id']; ?>" ><?php echo $gi; ?>%</option>
			<?php
					}
				}
			?>
				</select>
				<br>
		Phần mô tả:  <textarea class="ckeditor col-12" name="mota" cols="80" rows="10">
			<?php echo $row1['mota']; ?>
		        </textarea> 
		<input  type="submit" value="sửa"  >
	</form>
	</div>
</div>
</body>
</html>