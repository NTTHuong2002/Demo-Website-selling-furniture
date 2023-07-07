<?php 

	include("menu.php"); 
	$connect=mysqli_connect("localhost","root","","noithat");
	$sql="SELECT * FROM taikhoan WHERE id =".$_SESSION['id'];
	$ketqua=mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($ketqua);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tài khoản</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body >
	
	<div class="container-fluid" style=";margin-top: 2%" style="background: #F5F5F5"> 
		<div class="container ">
			<div class="row">
				<div class="col-2 mt-3	">
					<img src="img/<?php echo $row['anh']; ?>" alt="" style="width: 30%" class="rounded rounded-circle">
					<?php echo $row['tendaydu']; ?>
					<br><hr><br>
					<h5><a class="link" href="taikhoan.php" title="">Tài khoản của tôi</a></h5>
					<h5><a class="link" href="donmua.php" title="">Đơn mua</a></h5>
				</div>
				<div class="col-10"style="background: #FFF">
					<div class="col-12 mt-3"  >
					  <h4>Hồ Sơ Của Tôi</h4>
					  <h6>Quản lý thông tin hồ sơ để bảo mật tài khoản</h6>
					  <hr>
				
					</div>
					<form action="xulytaikhoan.php" method="post" accept-charset="utf-8">
						<div class="col-12">
							<div class="row">
								<div class="col-8">
										
									<table class="table table-borderless">
										<tr>
											<td align="right">Tên Đăng Nhập</td>
											<td ><?php echo $row['tendn']; ?></td>
										</tr>
										<tr>
											<td align="right">Tên</td>
											<td ><input type="text" name="tendaydu" class="form-control"  placeholder="Nhập tên đầy dủ" value="<?php echo $row['tendaydu']; ?>"></td>
										</tr>
										<tr>
											<td align="right">Email</td>
											<td><?php echo $row['email']; ?></td>
										</tr>
										<tr>
											<td align="right">Số Điện Thoại</td>
											<td><?php echo $row['sodt']; ?></td>
										</tr>
										<tr>
											<td align="right">Địa chỉ</td>
											<td ><input type="text" name="diachi" class="form-control" value="26 Huỳnh Văn Nghệ"></td>
										</tr>
										<tr>
											<td align="right">Giới Tính</td>
											<td>
												<input type="radio" name="gioitinh" value="nam" 
												<?php 
													if ($row['gioitinh']=="nam") {
														echo "checked='checked'";
													} 
												?>
												>Nam
												<input type="radio" name="gioitinh"<?php 
													if ($row['gioitinh']=="nu") {
														echo "checked='checked'";
													} 
												?> value="nu">Nữ
												<input type="radio" name="gioitinh"<?php 
													if ($row['gioitinh']=="khac") {
														echo "checked='checked'";
													} 
												?> value="khac">Khác
											</td>
										</tr>
										<tr>
											<td align="right">Ngày Sinh</td>
											<td>
												<input type="date" name="ngaysinh" value="<?php echo $row['ngay']; ?>">
											</td>
										</tr>
										
									</table>

									<input type="submit" class="btn btn-danger form-control" name="submit" value="Lưu" style="float: right;width: 30%">

								</div>
								<div class="col-4 border-left text-center">
									<img src="img/<?php echo $row['anh']; ?>" width="50%" alt="" class="rounded-circle">
									<input type="file" class="form-control btn" align="center" id="customFile" name="anh" />
									<div style="font-size: 0.8em">Định dạng:.JPG, .PNG</div>		
								</div>
							</div>
							
						</div>
					<form>
				</div>
			</div>
		</div>
	</div>

		<?php  include("lienhe.php");?>
</body>
</html>