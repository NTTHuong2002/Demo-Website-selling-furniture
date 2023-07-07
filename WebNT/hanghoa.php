 <?php include("menuadmin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hàng hóa</title>
	
</head>
<body style="background: #F5F5F5">
	<div id="main1" style="margin-left: 20%">
	<div class="container" style="background: #FFF">
		<div class="col-sm-12 form-group" >
			<h2>Danh sách hàng hóa</h2>
			<a href="themhanghoa.php" title=""><button class="btn btn-primary">Thêm hàng hóa</button></a>
			<table border="1" class="table mt-2" style="text-align: center">
					<tr>
						<th width="5%">STT</th>
						<th width="40%">Link ảnh</th>
						<th width="10%">Tên hàng hóa</th>
						<th width="10%">Số lượng </th>
						<th width="10%">Đơn giá</th>
						<th width="10%">iddanhmuc</th>
						<th width="5%">Khuyenmai</th>
						<th width="5%">Xóa</th>
						<th width="5%">Sửa</th>
					</tr>
					<?php 
						$conn=mysqli_connect("localhost","root","","noithat");
						if (isset($_GET['iddanhmuc'])) {
						$sql="SELECT * FROM hanghoa WHERE iddanhmuc=".$_GET['iddanhmuc'];
						$ketqua=mysqli_query($conn,$sql);
						}
						else{
							$sql="SELECT * FROM hanghoa ";
						$ketqua=mysqli_query($conn,$sql);
						}
						$stt=1;
						while ($row = mysqli_fetch_assoc($ketqua)) {
							echo '<tr>';
							echo '<td style="width=50%">'.$stt.'</td>';
							echo '<td><img src=".//img//'.$row['anh'].'" alt="" style="width: 60%"></td>';
							echo '<td>'.$row['tenhang'].'</td>';
							echo '<td>'.$row['soluong'].'</td>';		
							echo '<td>'.$row['dongia'].'</td>';
							echo '<td>'.$row['iddanhmuc'].'</td>';
							echo '<td>'.$row['idkhuyenmai'].'</td>';
							echo '<td><a href="xoa.php?id='.$row['id'].'">Xóa</a></td>';
							echo '<td><a href="sua.php?id='.$row['id'].'">Sửa</a></td>';
							echo '</tr>';
							$stt++;
						}
					?>
			</table>
		</div>
	</div>
</div>
</body>
</html>