<?php 

	include("menuadmin.php"); 
	$connect=mysqli_connect("localhost","root","","noithat");
	$sql="SELECT * FROM taikhoan WHERE id =".$_SESSION['id'];
	$ketqua=mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($ketqua);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tài khoản admin</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<style type="text/css" media="screen">

body{
	font-size: 17px;
	font-family: serif;
}
.img-container{ 
	
	height: auto; /** Chiều cao tự động **/ 
	 /** Cách trên dưới 10px và nằm giữa **/ 
	overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/ 
	position: relative;  /** Chiều rộng vùng chứa **/ } 
	
.img-container img { 
	 /** Hình ảnh rộng 100% so với vùng chứa **/ 
	transition: all 1s; /** Tạo độ mượt **/ } 
	
.img-container:hover img { 
	-webkit-transform: scale(1.2); transform: scale(1.2); }
	.img-zoom:hover { 
	border: 1px solid red;
	-webkit-transform: scale(1.2); transform: scale(1.2); }
	@media screen and (max-width: 320px) {
 		body div,h1,h2,h3,h4,h5,h6,font {
 			font-size: 10px;
 			/*width: 1251px;*/
 		}
   
 	}
 	@media (min-width: 321px)  and (max-width: 640px) {
 		body div,h1,h2,h3,h4,h5,h6{
 			/*width: 1251px;*/
 			font-size: 13px;
 		}
   
 	}
 	@media (min-width: 641px) and (max-width: 960px) {
 		body div,h1,h2,h3,h4,h5,h6{
 		font-size: 15px;
 		}
   
 	}
 	article.sp{

 		border: 1px solid #DCC;
 	}
 	article.sp:hover{
 		
 		box-shadow: 0 0 10px;
 		
 	}
 	article.sp button{
 		visibility: hidden;
 	}
 	article.sp:hover button{
 	
 		visibility: visible;

 		
 	}
 	body a.link{
 		text-decoration: none;
 		color: black;
 	}
 	a.link:hover{
 		color: orange;
 	}
 </style>

</head>
<body style="background: #F5F5F5">
	
	
<div id="main1" style="margin-left: 20%">
	<div class="container-fluid" style=";margin-top: 2%">
		<div class="container ">
			<div class="row">
				
				<div class="col-12"style="background: #FFF">
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
									<p>Dụng lượng file tối đa 1 MB</p>
									<p>Định dạng:.JPEG, .PNG</p>		
								</div>
							</div>
							
						</div>
					<form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>