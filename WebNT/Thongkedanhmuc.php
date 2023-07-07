<?php include("menuadmin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Danh mục </title>

  <style>
  
  </style>
</head>
<br>
<body style="background: #F5F5F5">
	
<div id="main1" style="margin-left: 20%">
	<div class="container-fluid" >
		<div class="container"style="background: #FFF" >
			<div class="row">
				<div class="col-sm-12 " >
					<h2 >Danh mục </h2>
					<a href="themdanhmuc.php" title=""><button class="btn btn-primary">Thêm danh mục</button></a>

					<table border="1" class="table mt-2" style="width: 100%">
							<tr>
								<th width="1%">STT</th>
								<th width="24%">Ảnh</th>
								<th width="20%">Tên danh mục</th>
								<th width="10%">Ngày</th>
								<th width="20%">Mô tả</th>
								<th width="15%">loại phòng</th>
								<th width="5%">Xóa</th>
								<th width="5%">Sửa</th>
							</tr>
							<?php 
								$conn=mysqli_connect("localhost","root","","noithat");
								$sql="SELECT * FROM danhmuc";
								$ketqua=mysqli_query($conn,$sql);
								$stt=1;
								while ($row=mysqli_fetch_array($ketqua)) {
									echo '<tr>';
									echo ' <td>'.$stt.'</td>';
									echo ' <td><img src="img//'.$row['anh'].'" alt="" style="width: 50%"></td>';
									echo ' <td><a href="hanghoa.php?iddanhmuc='.$row['id'].'" >'.$row['tendanhmuc'].'</a></td>';
									echo ' <td>'.$row['ngay'].'</td>';	
									echo ' <td>'.$row['mota'].'</td>';
									$sql1="SELECT * FROM loaiphong WHERE id=".$row['idphong'];
									$ketqua1=mysqli_query($conn,$sql1);
									$row1=mysqli_fetch_assoc($ketqua1);
									echo ' <td>'.$row1['tenphong'].'</td>';
									echo ' <td><a href="xoadm.php?id='.$row['id'].'" >Xóa</a></td>';
									echo ' <td><a href="suadm.php?id='.$row['id'].'" >Sửa</a></td>';
									
									echo '</tr>';
									$stt++;
								}
							?>
					</table>
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>