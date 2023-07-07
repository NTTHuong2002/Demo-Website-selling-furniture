 <?php include("menuadmin.php"); ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Danh sách khách hàng</title>
	
</head>
<body style="background: #F5F5F5">
<div id="main1" style="margin-left: 20%">
	<div class="container" style="background: #FFF">
		<div class="col-sm-12 form-group" >
			<h2>Danh sách Khách hàng</h2>
			<table border="1" class="table">
					<tr>
						<th width="1%">STT</th>
						<th width="20%">Tên đăng nhập</th>
						<th width="20%">Email </th>
						<th width="20%">SoDT </th>
						<th width="20%">Diachi </th>
						<th width="10%">Tình trạng</th>
						<th width="9%">Thao tác</th>

						
					</tr>
					<?php 
						$conn=mysqli_connect("localhost","root","","noithat");
						$sql="SELECT * FROM taikhoan WHERE vaitro!='admin'" ;
						$ketqua=mysqli_query($conn,$sql);
						
						$stt=1;
						while ($row = mysqli_fetch_assoc($ketqua)) {
							echo '<tr>';
							echo '<td style="width=50%">'.$stt.'</td>';
							echo '<td>'.$row['tendn'].'</td>';
							echo '<td>'.$row['email'].'</td>';
							echo '<td>'.$row['sodt'].'</td>';
							echo '<td>'.$row['diachi'].'</td>';
							echo '<td>'.$row['trangthai'].'</td>';
							echo '<td><a href="blockKH.php?idkh='.$row['id'].'" title=""><button type="button" class="btn btn-sm "  >Block</button></a></td>';

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