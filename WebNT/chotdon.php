<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận đặt hàng </title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

    </style>
    
</head>
<body  >
	<?php 
	include("menu.php"); ?>

	<div class="container-fluid" style="background-color: white">
		<div class="container">
			<div class="row">
				<div class="col-12" style="padding: 2% 0%">
					<p style="font-size: 1.5em;color: red">QTT Shop | Thanh toán</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid"style="background-color: #F5F5F5">
		<br>
		<div class="container"style="background-color: white" >
			<form action='xulydonhang.php' method='POST'>
				<div class="row">
				
					<div class=" col-12" >
						<h3 style="font-size: 1.3em;color: red">Địa chỉ người nhận</h3>
						<hr>
						<table class="table table-borderless">
							<tr>
								<th width="20%">Tên người nhận</th>
								<th width="15%">Điện thoại</th>
								<th width="40%">Địa chỉ </th>
								<th width="25%">Email</th>
							</tr>
							<?php  
								$connect=mysqli_connect("localhost","root","","noithat") or die("Can not connect
									database");
								$sql1="select * from taikhoan where id=".$_SESSION['id'];
								$ketqua1=mysqli_query($connect,$sql1);
								$row1=mysqli_fetch_assoc($ketqua1);
									?>

									<tr>
										<td>
											<input type="text" name="tendaydu"class="form-control" value="<?php echo $row1['tendaydu']; ?>">
										</td>
										<td>
											<input type="text" name="sodt"class="form-control" value="<?php echo $row1['sodt']; ?>">
										</td>
										<td>
											<input type="text" name="diachi" class="form-control" value="<?php echo $row1['diachi']; ?>">
										</td>
										<td>
											<input type="text" name="email"class="form-control" value="<?php echo $row1['email']; ?>">
										</td>
										
									</tr>
									<?php
								
							?>
						</table>
						<hr>
					</div>
					<div class="col-6 "  style="margin-top: 20px;">
						<label for="loinhan">Lời nhắn: </label>
						<p><input type="text" class="form-control" name="loinhan" placeholder="Lời nhắn cho người bán"></p>
						<br>
					</div>
					<div class="col-6 "  style="margin-top: 20px;">
						<p style="">Đơn vị vận chuyển: <span><b>Vận chuyển nhanh</b> </span></p>
						<p>Giá vận chuyển: Miễn phí</p>
						<br>
					</div>
					<div class="col-12"style="background: #F5F5F5">
						<br>
					</div>
					<div class="col-12 " style="background: " >
						<h3 style="color: red;font-size: 25px">Đơn hàng của bạn</h3>
						<hr>
						
							<table class="table table-borderless" >
								
								<tr>
									<td width="40%">
										Sản phẩm
									</td>
									<td width="10%">
										Đơn giá
									</td >
									<td width="10%">
										Số lượng
									</td>
									<td width="10%">
										Số tiền
									</td>
									
								</tr>
							</table>
							<hr>
				    <?php
					   $ok=1;
					if(isset($_SESSION['cart']))
					{
						foreach($_SESSION['cart'] as $k => $v){
							if(isset($k))
							{
							$ok=2;
							}
						}
					}
					if($ok == 2)
						{
							$total=0;
							$tongsanpham=0;		
							$str=$_GET['str'];
							mysqli_select_db($connect,"shop");
							$sql="select * from hanghoa where id in ($str)";
							$query=mysqli_query($connect,$sql);
							 while($row=mysqli_fetch_array($query)){
								if(isset($_SESSION['cart'][$row['id']][$_SESSION['ten']])){
									$sql_khuyenmai="SELECT * FROM khuyenmai WHERE id =".$row['idkhuyenmai'];
									$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
									$row_khuyenmai=mysqli_fetch_array($query_khuyenmai);
									$khuyenmai=100*$row_khuyenmai['giamgia'];
									$total+=$_SESSION['cart'][$row['id']][$_SESSION['ten']]*$row['dongia']-$row['dongia']*$row_khuyenmai['giamgia'];
									$tongsanpham+=$_SESSION['cart'][$row['id']][$_SESSION['ten']];
					?>

						<table class=" text-center">
							<tr>
								<td width="40%" align="left">
									<img src="img/<?php echo $row['anh']; ?>" alt="" style="width: 30%">								
									<?php echo $row['tenhang'],' x ',($_SESSION['cart'][$row['id']][$_SESSION['ten']]),'-',$khuyenmai ?>%
								</td>
								<td width="10%"><p align="left"><?php echo number_format($row['dongia']); ?> VND</p></td>
								<td width="10%"><?php echo $_SESSION['cart'][$row['id']][$_SESSION['ten']];?></td>
								<td width="10%"><?php echo number_format($_SESSION['cart'][$row['id']][$_SESSION['ten']]*$row['dongia']-$row['dongia']*$row_khuyenmai['giamgia']); ?>VND</td>

							</tr>

						</table>
							<hr>
							<table class="table">
								<tr class="border" style="background: #fafdff">

									<td width="60%"  align="right">Đơn vị vận chuyển:</td>
									<td width="20%" >
										<p><b>Vận chuyển nhanh</b></p>
									</td>
									<td width="10%">Chi phí: </td>
									<td width="10%">Miễn phí</td>
								</tr>
							</table>
							
					
					<?php
						}
					}		
					?>

							<div class="col-12" style="background: #fffefb">
								<table class="table text-right">
									<tr>
										<td width="70%">Phương thức thanh toán:  </td>
										<td>Thanh toán khi nhận hàng</td>
									</tr>
									<tr>
										<td width="70%">Tổng thanh toán: </td>
										<td><?php echo number_format($total); ?> VND</td>
										<input type="hidden" name="tongtien" value="<?php echo $total; ?>">
										<input type="hidden" name="tongsanpham" value="<?php echo $tongsanpham; ?>">
										<input type="hidden" name="idsp" value="<?php echo $str; ?>">

									</tr>
								</table>	
								<p align="right"><input type="submit" name="" style="width: 30%" class="btn btn-danger form-control" value="Đặt hàng"></p>
							
							</div>
						
					<?php	
						}
					?>
							
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>