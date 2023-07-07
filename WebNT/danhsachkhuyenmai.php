 <?php include("menuadmin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chương trình khuyến mãi</title>
	
</head>
<body style="background: #F5F5F5">
	<div id="main1" style="margin-left: 20%">
	<div class="container" style="background: #FFF">
		<div class="col-sm-12 form-group" >
			<h2>Danh sách Chương trình khuyến mãi</h2>
			<a href="themkhuyenmai.php" title=""><button class="btn btn-primary">Thêm chương trình khuyến mãi</button></a>
			<table border="1" class="table mt-2" style="text-align: center">
					<tr>
						<th width="5%">STT</th>
						<th width="30%">Link ảnh</th>
						<th width="20%">Tiêu đề</th>
						<th width="30%">Nội dụng</th>
						<th width="5%">Giảm giá</th>
						<th width="5%">Xóa</th>
						<th width="%">Sửa</th>
					</tr>
					<?php 
						$conn=mysqli_connect("localhost","root","","noithat");
						$sql="SELECT * FROM khuyenmai ";
						$ketqua=mysqli_query($conn,$sql);
						$stt=1;
						while ($row = mysqli_fetch_assoc($ketqua)) {
							echo '<tr>';
							echo '<td style="width=50%">'.$stt.'</td>';
							echo '<td><img src=".//img//'.$row['anh'].'" alt="" style="width: 60%"></td>';
							echo '<td>'.$row['tieude'].'</td>';
							echo '<td>'.$row['noidung'].'</td>';		
							echo '<td>'.$row['giamgia'].'</td>';
							echo '<td><a href="xoakhuyenmai.php?id='.$row['id'].'">Xóa</a></td>';
							echo '<td><a href="suakhuyenmai.php?id='.$row['id'].'">Sửa</a></td>';
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