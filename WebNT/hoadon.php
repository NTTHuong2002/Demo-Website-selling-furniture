<?php  
	session_start();
	$conn=mysqli_connect("localhost","root","","noithat");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hóa đơn</title>
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
 </style>

</head>
<body style="background: #F5F5F5 ;">
	
		<div class="container-fluid " >
			<div class="container"   style="background: #FFF ;padding: 0% 5%;">
				<div class="row " >
					<div class="col-8 "  >
						<img src="img/logo.jpg" style="width: 25%;height: 50%;margin: 5% 0 -10% 0" alt="">
						<h3 style="margin-top: 3%;margin-left: 30%;color: red" ><b>QTT SHOP</b></h3>
					</div>
					<div class="col-4 ">
						<h3 style="margin-top: 25%;" align="right"><b>HÓA ĐƠN</b></h3>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-6">
								
							</div>
							<?php  
								$sql_donhang="SELECT * FROM donhang WHERE id=".$_GET['id'];
								$ketqua_dh=mysqli_query($conn,$sql_donhang);
								$row_donhang=mysqli_fetch_assoc($ketqua_dh);
								$sql_taikhoan="SELECT * FROM taikhoan WHERE id=".$row_donhang['idkhachhang'];
								$ketqua_tk=mysqli_query($conn,$sql_taikhoan);
								$row_taikhoan=mysqli_fetch_assoc($ketqua_tk);
							?>
							<div class="col-6 text-right">
								Ngày 18 Tháng 12 Năm 2020
							</div>
							<div class="col-6">
								<table class="table "> 
									<tr>
										<td width="30%">
											Đơn vị bán hàng 
										</td>
										<td >
											: CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ NỘI THẤT ANH TÚ
										</td>
										
									</tr>
									<tr>
										<td>
											Địa chỉ
										</td>
										<td >
											: 26 Huỳnh Văn Nghệ, Hòa Hải, Ngũ Hành Sơn, Đà Nẵng
										</td>
									</tr>
									<tr>
										<td>
											Số điện thoại
										</td>
										<td>
											: (+84) 764607869
										</td>
										
									</tr>
									<tr>
										<td>
											Số tài khoản 
										</td>
										<td>
											: 0311000742799
										</td>
									</tr>
								</table>
							</div>
							<div class="col-6 ">
								<table class="table "> 
									<tr>
										<td width="30%">
											Họ tên người mua hàng
										</td>
										<td >
											: <?php echo $row_donhang['tenuser'] ?>
										</td>
										
									</tr>
									<tr>
										<td >
											Địa chỉ
										</td>
										<td >
											: <?php echo $row_donhang['diachi'] ?>
										</td>
									</tr>
									<tr>
										<td>
											Số điện thoại
										</td>
										<td>
											: <?php echo $row_donhang['sodt'] ?>
										</td>
										
									</tr>
									<tr>
										<td>
											Email 
										</td>
										<td>
											: <?php echo $row_donhang['email'] ?>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
					</div>
					<div class="col-12">
						<table class="table border"> 
							<thead class="thead-light">
							    <tr>
							    	<th scope="col">STT</th>
							      	<th scope="col" width="50%">Sản phẩm </th>
							      	<th scope="col">Số lượng</th>
							      	<th scope="col">Đơn giá</th>
							      	<th scope="col">Giảm giá</th>
							      	<th scope="col">Tổng</th>
							    </tr>
							  </thead>
							<tbody>
							<?php 
								$sql_chitietdh="SELECT * FROM chitietdh WHERE iddh=".$row_donhang['id'];
								$ketqua_chitietdh=mysqli_query($conn,$sql_chitietdh);
								$stt=1;
								$tongtien=0;
								$tongkhuyenmai=0;
								while($row_chitietdh=mysqli_fetch_assoc($ketqua_chitietdh)){
									$sql_hanghoa="SELECT * FROM hanghoa WHERE id=".$row_chitietdh['idsp'];
									$ketqua_hanghoa=mysqli_query($conn,$sql_hanghoa);
									$row_hanghoa=mysqli_fetch_assoc($ketqua_hanghoa);

									$sql_khuyenmai="SELECT * FROM khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
									$query_khuyenmai=mysqli_query($conn,$sql_khuyenmai);
									$row_khuyenmai=mysqli_fetch_array($query_khuyenmai);
									$khuyenmai=100*$row_khuyenmai['giamgia'];
							?>
							    <tr>
							      	<th scope="row"><?php echo $stt; ?></th>
							      	<td><?php echo $row_hanghoa['tenhang']; ?></td>
							      	<td><?php echo $row_chitietdh['soluong']; ?></td>
							      	<td><?php echo number_format($row_hanghoa['dongia']); ?></td>
							      	<td><?php echo number_format($khuyenmai); ?>%</td>
							      	<td><?php echo number_format($row_chitietdh['dongia']); ?></td>
							    </tr>
						 	<?php
						 		$tongtien+=$row_chitietdh['dongia'];
						 		$tongkhuyenmai+=$row_hanghoa['dongia']*$row_chitietdh['soluong']*$row_khuyenmai['giamgia'];
						 		$stt++; 
						 		
						 	}
						 	?>
						  </tbody>
						</table>
					</div>
					<div class="col-12 text-right">
						<table align="right" class=" table-borderless" >
							<tr>
								<td width="80%">Cộng tiền hàng:</td>
								<td><?php echo number_format($tongtien); ?> VND</td>
							</tr>
							<tr>
								<td>Tổng giảm giá:</td>
								<td><?php echo number_format($tongkhuyenmai); ?> VND</td>
							</tr>
							<tr>
								<td>Tiền thuế GTGT 10%:</td>
								<td><?php echo number_format($tongtien*0.1); ?> VND</td>
							</tr>
							
						</table>
						<br><br><br><hr>
						<h3 style="">Tổng tiền: <?php echo number_format($tongtien+$tongtien*0.1-$tongkhuyenmai); ?> VND</h3>

					</div>
				</div>
			</div>
			<div class="container " style="background: #FFF5F5">
				<div class="row">
					<div class="col-12 text-right">
						<a href="trangchu.php" title="" style="text-decoration: none;color: black"><h5><b>Trở lại trang chủ > </b></h5></a>
					</div>
				</div>
			</div>
		</div>
		
</body>
</html>