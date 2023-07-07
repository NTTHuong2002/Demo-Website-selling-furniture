<?php include("menuadmin.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tin tức </title>

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
					<h2 >Tin tức</h2>
					<a href="themtintuc.php" title=""><button class="btn btn-primary">Thêm tin tức</button></a>

					<table border="1" class="table mt-2" style="width: 100%">
							<tr>
								<th width="1%">STT</th>
								<th width="20%">Ảnh</th>
								<th width="10%">Tiêu đề</th>
								<th width="12%">Chú thích</th>
								<th width="30%">Nội dung</th>
								<th width="1%">Sửa</th>
								<th width="1%">Xóa</th>
								
							</tr>
							<?php 
								$conn=mysqli_connect("localhost","root","","noithat");
								$sql="SELECT * FROM tintuc";
								$ketqua=mysqli_query($conn,$sql);
								$stt=1;
								while ($row=mysqli_fetch_array($ketqua)) {
									?>
									<tr>
									<td><?php echo $stt; ?></td>
									<td><img src="img/<?php echo $row['anh']; ?>" alt="" style="width: 100%"></td>
									<td><?php echo $row['tieude']; ?></td>
									<td><?php echo $row['chuthich']; ?></td>	
									<td width="30%"><?php echo $row['noidung']; ?></td>
									<td><a href="suatintuc.php?id=<?php echo $row['id']; ?>" title="">Sửa</a></td>
									<td><a href="xoatintuc.php?id=<?php echo $row['id']; ?>" title="">Xóa</a></td>
									
									</tr>
								<?php
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