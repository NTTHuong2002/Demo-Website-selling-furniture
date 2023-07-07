<!DOCTYPE html>
<html>
<head>
	<title>Danh sách đơn hàng</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 

</head>
<body style="background: #F5F5F5">
	
	<?php 
	 include("menuadmin.php"); 
	 $connect=mysqli_connect("localhost","root","","noithat");
	?>
<div id="main1"style="margin-left: 20%">
	<div class="container-fluid" style=";margin-top: 10px">
		<div class="container ">
			<div class="row">
				
				<div class="col-12">
					<div class="col-12 mt-3"  style="background: #FFF">
					  	<h2>Danh sách đơn hàng</h2>
						<br>
						<ul class="nav nav-tabs"  style="background: #FFF">
						    <li class="nav-item" >
						      <a class="nav-link active link" href="#menu">Tất cả </a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link link" href="#menu1">chờ xác nhận</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link link" href="#menu2">Chờ lấy hàng </a>
						    </li>
						      <li class="nav-item">
						      <a class="nav-link  link" href="#menu3">Đang giao</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link link" href="#menu4">Đã giao</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link link" href="#menu5">Đã hủy </a>
						    </li>
						</ul>
					 
					<div class="tab-content" style="background: ">
					  	 <?php

							$sql_donhang="SELECT * from donhang  ORDER BY id DESC";
							$query_donhang=mysqli_query($connect,$sql_donhang);
						
						?>
						
					    <div id="menu" class="container tab-pane active" style="height: 50%"><br>

					    	<?php while($row_donhang=mysqli_fetch_assoc($query_donhang)){ ?>
					    	<div class="col-12 " style="background: #FFF">
					    		<hr>
						      	<h5 align="right">
						      		Tình trạng đơn hàng: 
						      		<?php 
						      			if($row_donhang['trangthai']==1)
						      			echo "<b>Chờ xác nhận</b>"; 
						      		?>
						      		
						      	</h5>

						      	<?php  

						      		$sql_chitietdh="SELECT * from chitietdh WHERE iddh=".$row_donhang['id'];
									$query_chitietdh=mysqli_query($connect,$sql_chitietdh);
									while($row_chitietdh=mysqli_fetch_assoc($query_chitietdh)){
										$sql_hanghoa="SELECT * from hanghoa WHERE id=".$row_chitietdh['idsp'];
										$query_hanghoa=mysqli_query($connect,$sql_hanghoa);
										$row_hanghoa=mysqli_fetch_assoc($query_hanghoa);
										$sql_khuyenmai="SELECT * from khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($query_khuyenmai);

						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="20%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>"><img src="img/<?php echo $row_hanghoa['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row_hanghoa['tenhang'];?>
						      				<br>
						      				x <?php  echo $row_chitietdh['soluong'];?> - <?php echo $row_khuyenmai['giamgia']*100; ?>%	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row_hanghoa['dongia']);?>VNĐ
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<div align="right" class="col-12 border mt-2" style="background: #fffafa" >
									<h5>Đơn vị vận chuyển: <span><b>Vận chuyển nhanh</b> </span></h5>
						      		<font style="font-size: 1.2em">Tổng số tiền: </font><font style="font-size: 1.5em;color: red"><?php echo number_format($row_donhang['tongtien']); ?> đ</font>
							</div>
					      	
					    <?php
					    }		
									
						?>
						</div>


						<?php
							
							
							$sql_donhang="SELECT * from donhang WHERE trangthai=1";
						
							$query_donhang=mysqli_query($connect,$sql_donhang);
							
							
								
								
						?>
					    <div id="menu1" class="container tab-pane " style=" "><br>
					    	<?php while($row_donhang=mysqli_fetch_assoc($query_donhang)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql_chitietdh="SELECT * from chitietdh WHERE iddh=".$row_donhang['id'];
									$query_chitietdh=mysqli_query($connect,$sql_chitietdh);
									while($row_chitietdh=mysqli_fetch_assoc($query_chitietdh)){
										$sql_hanghoa="SELECT * from hanghoa WHERE id=".$row_chitietdh['idsp'];
										$query_hanghoa=mysqli_query($connect,$sql_hanghoa);
										$row_hanghoa=mysqli_fetch_assoc($query_hanghoa);
										$sql_khuyenmai="SELECT * from khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($query_khuyenmai);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>"><img src="img/<?php echo $row_hanghoa['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row_hanghoa['tenhang'];?>
						      				<br>
						      				x <?php  echo $row_chitietdh['soluong'];?> - <?php echo $row_khuyenmai['giamgia']*100; ?>%		
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row_hanghoa['dongia']);?>VNĐ
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<div  class="col-12 border mt-2 text-right" style="background: #fffafa" >
					    		<h5>Đơn vị vận chuyển: <span><b>Vận chuyển nhanh</b> </span></h5>
						      	<font style="font-size: 1.2em">Tổng số tiền: </font><font style="font-size: 1.5em;color: red"><?php echo number_format($row_donhang['tongtien']); ?> đ</font>
					    		<form class="mt-2 mb-2" action="xulytrangthai.php" method="POST" >
					    			<input type="hidden" name="id" value="<?php echo $row_donhang['id']; ?>">
					    			<input type="submit" name="" class="btn btn-success" value="Xác nhận">
					    			<a href="huydonhang.php?iddh=<?php echo $row_donhang['id']; ?>" title=""><input type="button" name="" class="btn btn-danger" value="Hủy đơn hàng"></a><br>
					      			
					    		</form>
								
							</div>
					      	
					    <?php
					    }		
									
						?>
						</div>


						<?php
							$sql_donhang="SELECT * from donhang WHERE  trangthai=2";
							$query_donhang=mysqli_query($connect,$sql_donhang);
						?>
					    <div id="menu2" class="container tab-pane " style="background: "><br>
					    	<?php while($row_donhang=mysqli_fetch_assoc($query_donhang)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql_chitietdh="SELECT * from chitietdh WHERE iddh=".$row_donhang['id'];
									$query_chitietdh=mysqli_query($connect,$sql_chitietdh);
									while($row_chitietdh=mysqli_fetch_assoc($query_chitietdh)){
										$sql_hanghoa="SELECT * from hanghoa WHERE id=".$row_chitietdh['idsp'];
										$query_hanghoa=mysqli_query($connect,$sql_hanghoa);
										$row_hanghoa=mysqli_fetch_assoc($query_hanghoa);
										$sql_khuyenmai="SELECT * from khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($query_khuyenmai);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>"><img src="img/<?php echo $row_hanghoa['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row_hanghoa['tenhang'];?>
						      				<br>
						      				x <?php  echo $row_chitietdh['soluong'];?> - <?php echo $row_khuyenmai['giamgia']*100; ?>%		
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row_hanghoa['dongia']);?>VNĐ
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<div  class="col-12 border mt-2 text-right" style="background: #fffafa" >
					    		<h5>Đơn vị vận chuyển: <span><b>Vận chuyển nhanh</b> </span></h5>
						      	<font style="font-size: 1.2em">Tổng số tiền: </font><font style="font-size: 1.5em;color: red"><?php echo number_format($row_donhang['tongtien']); ?> đ</font>
					    		<form class="mt-2 mb-2" action="xulytrangthai.php" method="POST" >
					    			<input type="hidden" name="id" value="<?php echo $row_donhang['id']; ?>">
					    			<input type="submit" name="" class="btn btn-success" value="Đã lấy hàng">
					    			<a href="huydonhang.php?iddh=<?php echo $row_donhang['id']; ?>" title=""><input type="button" name="" class="btn btn-danger" value="Hủy đơn hàng"></a><br>
					      			
					    		</form>
								
							</div>
					      	
					    <?php
					    }		
									
						?>
						</div>



						<?php
							$sql_donhang="SELECT * from donhang WHERE trangthai=3";
							$query_donhang=mysqli_query($connect,$sql_donhang);
								
						?>
					    <div id="menu3" class="container tab-pane " style="background: "><br>
					    	<?php while($row_donhang=mysqli_fetch_assoc($query_donhang)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql_chitietdh="SELECT * from chitietdh WHERE iddh=".$row_donhang['id'];
									$query_chitietdh=mysqli_query($connect,$sql_chitietdh);
									while($row_chitietdh=mysqli_fetch_assoc($query_chitietdh)){
										$sql_hanghoa="SELECT * from hanghoa WHERE id=".$row_chitietdh['idsp'];
										$query_hanghoa=mysqli_query($connect,$sql_hanghoa);
										$row_hanghoa=mysqli_fetch_assoc($query_hanghoa);
										$sql_khuyenmai="SELECT * from khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($query_khuyenmai);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>"><img src="img/<?php echo $row_hanghoa['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row_hanghoa['tenhang'];?>
						      				<br>
						      				x <?php  echo $row_chitietdh['soluong'];?> - <?php echo $row_khuyenmai['giamgia']*100; ?>%		
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row_hanghoa['dongia']);?>VNĐ
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<div  class="col-12 border mt-2 text-right" style="background: #fffafa" >
					    		<h5>Đơn vị vận chuyển: <span><b>Vận chuyển nhanh</b> </span></h5>
						      	<font style="font-size: 1.2em">Tổng số tiền: </font><font style="font-size: 1.5em;color: red"><?php echo number_format($row_donhang['tongtien']); ?> đ</font>
					    		<form class="mt-2 mb-2" action="xulytrangthai.php" method="POST" >
					    			<input type="hidden" name="id" value="<?php echo $row_donhang['id']; ?>">
					    			<input type="submit" name="" class="btn btn-success" value="Giao hàng thành công">
					    			<br>
					      			
					    		</form>
								
							</div>
					      	
					    <?php
					    }		
									
						?>
						</div>


						<?php
							$sql_donhang="SELECT * from donhang WHERE trangthai=4";
							$query_donhang=mysqli_query($connect,$sql_donhang);
							
						?>
					    <div id="menu4" class="container tab-pane " style="background: "><br>
					    	<?php while($row_donhang=mysqli_fetch_assoc($query_donhang)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql_chitietdh="SELECT * from chitietdh WHERE iddh=".$row_donhang['id'];
									$query_chitietdh=mysqli_query($connect,$sql_chitietdh);
									while($row_chitietdh=mysqli_fetch_assoc($query_chitietdh)){
										$sql_hanghoa="SELECT * from hanghoa WHERE id=".$row_chitietdh['idsp'];
										$query_hanghoa=mysqli_query($connect,$sql_hanghoa);
										$row_hanghoa=mysqli_fetch_assoc($query_hanghoa);
										$sql_khuyenmai="SELECT * from khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($query_khuyenmai);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>"><img src="img/<?php echo $row_hanghoa['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row_hanghoa['tenhang'];?>
						      				<br>
						      				x <?php  echo $row_chitietdh['soluong'];?> - <?php echo $row_khuyenmai['giamgia']*100; ?>%	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row_hanghoa['dongia']);?>VNĐ
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<div  class="col-12 border mt-2 text-right " style="background: #fffafa" >
					    		<h5>Đơn vị vận chuyển: <span><b>Vận chuyển nhanh</b> </span></h5>
						      	<font style="font-size: 1.2em">Tổng số tiền: </font><font style="font-size: 1.5em;color: red"><?php echo number_format($row_donhang['tongtien']); ?> đ</font>
				    			<input type="hidden" name="id" value="<?php echo $row_donhang['id']; ?>"><br>
				    			<br>
					      			
							</div>
					      	
					    <?php
					    }		
									
						?>
						</div>


						<?php
							$sql_donhang="SELECT * from donhang WHERE  trangthai=5";
							$query_donhang=mysqli_query($connect,$sql_donhang);
						?>
					    <div id="menu5" class="container tab-pane " style="background: "><br>
					    	<?php while($row_donhang=mysqli_fetch_assoc($query_donhang)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql_chitietdh="SELECT * from chitietdh WHERE iddh=".$row_donhang['id'];
									$query_chitietdh=mysqli_query($connect,$sql_chitietdh);
									while($row_chitietdh=mysqli_fetch_assoc($query_chitietdh)){
										$sql_hanghoa="SELECT * from hanghoa WHERE id=".$row_chitietdh['idsp'];
										$query_hanghoa=mysqli_query($connect,$sql_hanghoa);
										$row_hanghoa=mysqli_fetch_assoc($query_hanghoa);
										$sql_khuyenmai="SELECT * from khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($query_khuyenmai);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>"><img src="img/<?php echo $row_hanghoa['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row_hanghoa['tenhang'];?>
						      				<br>
						      				x <?php  echo $row_chitietdh['soluong'];?> - <?php echo $row_khuyenmai['giamgia']*100; ?>%		
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row_hanghoa['dongia']);?>VNĐ
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
						      		<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row_donhang['tongtien']); ?> đ</font>
							</p>
					      	
					    <?php
					    }		
									
						?>
						</div>

					  </div>
					</div>

					<script>
					$(document).ready(function(){
					  $(".nav-tabs a").click(function(){
					    $(this).tab('show');
					  });
					});
					</script>
				
	
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>