<?php include("menuadmin.php"); ?>
<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_POST['tenhang'])) {
		
		$tenhang=$_POST['tenhang'];
		$soluong=$_POST['soluong'];
		$dongia=$_POST['dongia'];
		$anh=$_POST['anh'];
		$ngay=$_POST['ngay'];
		$mota=$_POST['mota'];
		$iddanhmuc=$_POST['iddanhmuc'];
		$idkhuyenmai=$_POST['idkhuyenmai'];
		$sql="INSERT INTO hanghoa(tenhang,soluong,dongia,anh,ngay,mota,iddanhmuc,idkhuyenmai) VALUES('$tenhang',$soluong,$dongia,'$anh','$ngay','$mota',$iddanhmuc,$idkhuyenmai)";
		$ketqua=mysqli_query($conn,$sql);
	}
				
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm hàng hóa</title>
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
			<h2 >Thêm hàng hóa</h2>

			<form action="themhanghoa.php" method="POST" >
				Tên mặt hàng: <input type="text" name="tenhang" ><br>
				Số lượng: <input type="number" name="soluong"><br>
				Đơn giá: <input type="number" name="dongia"><br>
				<label for="anh">Link ảnh:</label>
				<input type="file" id="myfile" name="anh"><br>
				<label for="ngay">Ngày: </label>
				<input type="date" name="ngay"><br>
				Danh mục: 
				<select name="iddanhmuc" >
					<?php
						$sql1="SELECT * FROM danhmuc";
						$ketqua1=mysqli_query($conn,$sql1);
						while($row1=mysqli_fetch_assoc($ketqua1)){
							echo '<option value="'.$row1['id'].'">'.$row1['tendanhmuc'].'</option>';
						}

					?>
				</select>
				<br>
				Khuyến mãi giảm giá: 
				<select name="idkhuyenmai">
					<?php  
						$sql_khuyenmai="SELECT * FROM khuyenmai ";
						$ketqua_khuyenmai=mysqli_query($conn,$sql_khuyenmai);
						while ($row_khuyenmai = mysqli_fetch_assoc($ketqua_khuyenmai)) {
							$gi=$row_khuyenmai['giamgia']*100;

					?>
					<option value="<?php echo $row_khuyenmai['id']; ?>"><?php echo $gi; ?>%</option>
					<?php  
						}
					?>
				</select>
				<br>
				Phần mô tả:  <textarea  class="ckeditor col-12" name="mota" cols="80" rows="10" >
				        </textarea> 
				<input type="submit" class="btn btn-primary" value="Thêm">
			</form>
		</div>
	
	</div>
</div>
</body>
</html>