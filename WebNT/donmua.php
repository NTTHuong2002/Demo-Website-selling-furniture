<!DOCTYPE html>
<html>
<head>
	<title>Đơn mua</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<style type="text/css" media="screen">

 	body a.link{
 		text-decoration: none;
 		color: black;
 	}
 	a.link:hover{
 		color: orange;
 	}
 </style>

</head>
<body >
	
	<?php 
		include("menu.php"); 
		$connect=mysqli_connect("localhost","root","","noithat");
		$sql_taikhoan="SELECT * FROM taikhoan WHERE id =".$_SESSION['id'];
		$ketqua_taikhoan=mysqli_query($connect,$sql_taikhoan);
		$row_taikhoan=mysqli_fetch_assoc($ketqua_taikhoan);
	?>

	<div class="container-fluid" style="background: #F5F5F5;">
		<div class="container ">
			<div class="row">
				<div class="col-2 mt-3	">
					<img src="img/<?php echo $row_taikhoan['anh']; ?>" alt="" style="width: 30%" class="rounded rounded-circle">
					<?php echo $row_taikhoan['tendaydu']; ?>
					<br><hr><br>
					<h5><a class="link" href="taikhoan.php" title="">Tài khoản của tôi</a></h5>
					<h5><a class="link" href="donmua.php" title="">Đơn mua</a></h5>
				</div>
				<div class="col-10">
					<div class="col-12 mt-3"  style="background: #FFF">
					  <h2>Đơn mua của bạn</h2>
					  <br>
					  <ul class="nav nav-tabs"  style="background: #FFF">
					  	<li class="nav-item mr-3"> 
					    	<h4 align="right">Tình trạng</h4>
					  	</li>
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
					  	<br>
					  	 <?php

							$sql="SELECT * from donhang WHERE idkhachhang=".$_SESSION['id'];
							$query=mysqli_query($connect,$sql);
						
						?>
						
					    <div id="menu" class="container tab-pane active" style="height: 50%"><br>

					    	<?php 
					    		while($row=mysqli_fetch_assoc($query)){ 
					    	?>
					    	<div class="col-12 " style="background: #FFF">
						      	<h6 align="right">
						      		Tình trạng đơn hàng: 
						      		<?php 
						      			if($row['trangthai']==1)
						      			echo "<b>Chờ xác nhận</b>";
						      			else if($row['trangthai']==2)
						      			echo "<b>Chờ lấy hàng</b>";
						      			else if($row['trangthai']==3)
						      			echo "<b>Đang giao hàng</b>";
						      			else if($row['trangthai']==4)
						      			echo "<b>Đã giao hàng</b>";
						      			else 
						      			echo "<b>Đã hủy</b>"; 
						      		?>
						      		
						      	</h6>
						      	<?php  

						      		$sql1="SELECT * from chitietdh WHERE iddh=".$row['id'];
									$query1=mysqli_query($connect,$sql1);
									while($row1=mysqli_fetch_assoc($query1)){
										$sql2="SELECT * from hanghoa WHERE id=".$row1['idsp'];
										$query2=mysqli_query($connect,$sql2);
										$row2=mysqli_fetch_assoc($query2);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row2['id']; ?>"><img src="img/<?php echo $row2['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row2['tenhang'];?>
						      				<br>
						      				x <?php  echo $row1['soluong'];?>	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row2['dongia']);?>
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
									<input type="button" name="" class="btn btn-success" value="Mua lần nữa"><br>
						      		<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row['tongtien']); ?> đ</font>
							</p>
					      	
					    <?php
					    		}		
									
						?>
						</div>


						<?php
							
							
							$sql="SELECT * from donhang WHERE idkhachhang=".$_SESSION['id']." and trangthai=1";
							$query=mysqli_query($connect,$sql);
							
							
								
								
						?>
					    <div id="menu1" class="container tab-pane " style=" "><br>
					    	<?php while($row=mysqli_fetch_assoc($query)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql1="SELECT * from chitietdh WHERE iddh=".$row['id'];
									$query1=mysqli_query($connect,$sql1);
									while($row1=mysqli_fetch_assoc($query1)){
										$sql2="SELECT * from hanghoa WHERE id=".$row1['idsp'];
										$query2=mysqli_query($connect,$sql2);
										$row2=mysqli_fetch_assoc($query2);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row2['id']; ?>"><img src="img/<?php echo $row2['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row2['tenhang'];?>
						      				<br>
						      				x <?php  echo $row1['soluong'];?>	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row2['dongia']);?>
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
									<a href="huydonhang.php?iddh=<?php echo $row['id']; ?>" title=""><input type="button" name="" class="btn btn-danger" value="Hủy đơn hàng"><br></a>
						      		<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row['tongtien']); ?> đ</font>
							</p>
					      	
					    <?php
					    	}		
									
						?>
						</div>


						<?php
							$sql="SELECT * from donhang WHERE idkhachhang=".$_SESSION['id']." and trangthai=2";
							$query=mysqli_query($connect,$sql);
						?>


					    <div id="menu2" class="container tab-pane " style="background: "><br>
					    	<?php while($row=mysqli_fetch_assoc($query)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql1="SELECT * from chitietdh WHERE iddh=".$row['id'];
									$query1=mysqli_query($connect,$sql1);
									while($row1=mysqli_fetch_assoc($query1)){
										$sql2="SELECT * from hanghoa WHERE id=".$row1['idsp'];
										$query2=mysqli_query($connect,$sql2);
										$row2=mysqli_fetch_assoc($query2);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row2['id']; ?>"><img src="img/<?php echo $row2['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row2['tenhang'];?>
						      				<br>
						      				x <?php  echo $row1['soluong'];?>	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row2['dongia']);?>
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
									<a href="huydonhang.php?iddh=<?php echo $row['id']; ?>" title=""><input type="button" name="" class="btn btn-danger" value="Hủy đơn hàng"><br></a>
						      		<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row['tongtien']); ?> đ</font>
							</p>
					      	
					    <?php
					    }		
									
						?>
						</div>



						<?php
							$sql="SELECT * from donhang WHERE idkhachhang=".$_SESSION['id']." and trangthai=3";
							$query=mysqli_query($connect,$sql);
								
						?>



					    <div id="menu3" class="container tab-pane " style="background: "><br>
					    	<?php while($row=mysqli_fetch_assoc($query)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql1="SELECT * from chitietdh WHERE iddh=".$row['id'];
									$query1=mysqli_query($connect,$sql1);
									while($row1=mysqli_fetch_assoc($query1)){
										$sql2="SELECT * from hanghoa WHERE id=".$row1['idsp'];
										$query2=mysqli_query($connect,$sql2);
										$row2=mysqli_fetch_assoc($query2);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row2['id']; ?>"><img src="img/<?php echo $row2['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row2['tenhang'];?>
						      				<br>
						      				x <?php  echo $row1['soluong'];?>	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row2['dongia']);?>
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
									<input type="button" name="" class="btn btn-success" value="Mua lần nữa"><br>
						      		<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row['tongtien']); ?> đ</font>
							</p>
					      	
					    <?php
					    }		
									
						?>
						</div>



						<?php
							$sql="SELECT * from donhang WHERE idkhachhang=".$_SESSION['id']." and trangthai=4";
							$query=mysqli_query($connect,$sql);
							
						?>



					    <div id="menu4" class="container tab-pane " style="background: "><br>
					    	<?php while($row=mysqli_fetch_assoc($query)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  
						      		$sql1="SELECT * from chitietdh WHERE iddh=".$row['id'];
									$query1=mysqli_query($connect,$sql1);
									while($row1=mysqli_fetch_assoc($query1)){
										$sql2="SELECT * from hanghoa WHERE id=".$row1['idsp'];
										$query2=mysqli_query($connect,$sql2);
										$row2=mysqli_fetch_assoc($query2);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row2['id']; ?>"><img src="img/<?php echo $row2['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row2['tenhang'];?>
						      				<br>
						      				x <?php  echo $row1['soluong'];?>	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row2['dongia']);?>
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
									<input type="button" name="" class="btn btn-success" value="Mua lần nữa"><br>
						      		<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row['tongtien']); ?> đ</font>
							</p>
					      	
					    <?php
					    }		
									
						?>
						</div>



						<?php
							$sql="SELECT * from donhang WHERE idkhachhang=".$_SESSION['id']." and trangthai=5";
							$query=mysqli_query($connect,$sql);
						?>



					    <div id="menu5" class="container tab-pane " style="background: "><br>
					    	<?php while($row=mysqli_fetch_assoc($query)){ ?>
					    	<div class="col-12 " style="background: #FFF">
						      	<?php  

						      		$sql1="SELECT * from chitietdh WHERE iddh=".$row['id'];
									$query1=mysqli_query($connect,$sql1);
									while($row1=mysqli_fetch_assoc($query1)){
										$sql2="SELECT * from hanghoa WHERE id=".$row1['idsp'];
										$query2=mysqli_query($connect,$sql2);
										$row2=mysqli_fetch_assoc($query2);
						      	?>
						      	<hr>
						      	<table class=" table-borderless " >
						      		<tr >
						      			<td width="30%" >
						      				<a href="chitietsp.php?idhang=<?php echo $row2['id']; ?>"><img src="img/<?php echo $row2['anh'];?>" alt="" style="width: 50%"></a>
						      			</td>
						      			<td width="65%">
						      				<?php  echo $row2['tenhang'];?>
						      				<br>
						      				x <?php  echo $row1['soluong'];?>	
						      			</td>
						      			<td width="5%">
						      				<?php  echo number_format($row2['dongia']);?>
						      			</td>
						      			
						      		</tr>
						      	</table>
						      	<hr>
						      	<?php
								    }		
												
								?>
								
						    </div>
					    	<p align="right" class="border mt-2" style="background: #fffafa" >
									<input type="button" name="" class="btn btn-success" value="Mua lần nữa"><br>	
									<font style="font-size: 1.3em">Tổng số tiền: <?php echo number_format($row['tongtien']); ?> đ</font>
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

		<?php  include("lienhe.php");?>
</body>
</html>