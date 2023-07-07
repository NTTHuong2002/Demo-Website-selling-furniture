<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <style type="text/css" media="screen">
 	
 
body a.link{
	color: black;
	text-decoration: none;
}
 </style>
</head>
<body>
	<div class="container-fluid" style="background: #FFF">
		<div class="row " style=";margin-top: 10px;margin-bottom: 0px">
			<div class="col-sm-4" style="margin-top: 20px">
				<div  style="color: red;" class="fa fa-phone t col-sm-12" >Hotline: 18031980 SoDT: 0915 380 127 </div> 
				
			</div>
			<div class="col-sm-2 text-right"  >
				<a href="trangchu.php" title="">
					<img src="img/logo.jpg" class="img img-responsive mt-2" alt="" style="width: 60%;height: 60%;margin: 0 0 0 0">
				</a>
			</div>
			<div class="col-sm-2 text-left" style="margin-top: 20px" >
				<span style="margin-top: 20px;font-size: 1.3em"><b>QTT Shop</b></span>
			</div>
			<div class="col-sm-4 " align="right"  style="margin-top: 20px;">
				<div class="row">
					<?php 
					
						if (isset($_SESSION['ten'])) {
							if(isset($_SESSION['vt'])){
	        					
	        						?>
	        							<div class="col-sm-4 text-right">
										 	<img class="rounded-circle rounded" src="img/adn.jpg" alt="" style="width: 40%;height: 50%">
										</div>
										<div class="col-sm-4 text-left"  >
											<a href="#"  data-toggle="dropdown" style="text-decoration: none;color: #000">
												<span ><?php echo $_SESSION['ten']; ?></span> 
												<span class="fa fa-sort-down "></span>  
											</a>
												<div class="dropdown-menu " style="position: absolute;z-index: 5000;">
											      	<a class="dropdown-item" href="taikhoan.php">Tài khoản của tôi</a>
											      	<a class="dropdown-item" href="donmua.php">Đơn hàng</a>
											        <div class="dropdown-divider"></div>
											       <a class="dropdown-item"  href="dangxuat.php">Đăng xuất</a>
											    </div>
											    
										</div>
										
										<div class="col-sm-4 text-left " >
											<a class="link" href="yeuthich.php" title="">
												<button type="button" class="btn btn-info btn-sm" style="margin-top: -5%;width: 40%"><span class="fa fa-heart "><sup style="font-size: 1em;"></sup></span></button>
											</a>
											<a class="link" href="cart.php" title="">
												<button class="btn btn-danger btn-sm" type="button" style="margin-top: -5%; width: 40%  ;">
													<span class="fa fa-shopping-cart "><sup style="font-size: 1em;"><?php if (isset($_SESSION['dem'])) {
														echo $_SESSION['dem']; 
													}?></sup></span>
												</button>
											</a>
										</div>
									<?php
	        					
	        				}
	        			}
	        			else{
	        				?>
	        					<div class="col-sm-4 text-right">
								 	<a href="dangky.php" title="" style="text-decoration: none;color: #000">Đăng ký</a>
								</div>
								<div class="col-sm-4 text-left"  >
								<a href="dangnhap.php" title=""style="text-decoration: none;color: #000">Đăng nhập</a>
								</div>
								
								<div class="col-sm-4 text-left " >
									<a href="xulygh.php" title="">
										<button class="btn btn-danger btn-sm" type="button" style="margin-top: -5px;width: 100%; padding: 5% 0 ;">
											<span class="fa fa-shopping-cart "></span>
										</button>
									</a>
								</div>	
							<?php
	        			}	
					?>
					
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: #333">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class=" collapse navbar-collapse " id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto" style="">
			      	<li class="nav-item active">
			      		<a class="navbar-brand" href="trangchu.php"><span class="fa fa-home"></span></a>
			      	</li>
			      	<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         	Sản phẩm
				        </a>
				        <div class="dropdown-menu " aria-labelledby="navbarDropdown" >
				        	<table class="table table-borderless" style="border: 1px solid white "> 
				        		<tr> 
	        				<?php  
	        					$conn=mysqli_connect("localhost","root","","noithat");
	        					$sql="SELECT * FROM loaiphong";
	        					$ketqua=mysqli_query($conn,$sql);
	        					while($row=mysqli_fetch_assoc($ketqua)){
	        					?>	
	        						<td >
	        						<table >
				        				<thead>
				        					<tr >
				        						<td ><a class="dropdown-item" href="phong.php?idphong=<?php echo $row['id']; ?>"><b><?php echo $row['tenphong']; ?></b></a></td>
				        					</tr>
					        			</thead>
						        		<tbody>
						        			<tr>
						        				<td>
						        					<?php  
							        					$sql1="SELECT * FROM danhmuc WHERE idphong=".$row['id'];
							        					$ketqua1=mysqli_query($conn,$sql1);
							        					while($row1=mysqli_fetch_assoc($ketqua1)){
						        					?>
						        					<a class="dropdown-item" href="danhmuc.php?iddanhmuc=<?php echo $row1['id']; ?>&idphong=<?php echo $row['id']; ?>"><?php echo $row1['tendanhmuc']; ?></a>
						        					<?php 
						        						}
						        					?>
						          				</td>
						        			</tr>
						        		</tbody>
						        	</table>
						        	<td>
						        
				        			<?php

	        					}
				        	?>
				        		</tr>
				       		</table>
				        </div>
			      	</li>
			      	<li class="nav-item">
			      		<a class="nav-link" href="khuyenmai.php">Chương trình khuyến mãi</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="tintuc.php">Tin tức </a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="about.php">Thông tin về chúng tôi </a>
			      	</li>
			       	</ul>
		       		 
				    <form class=" form-inline my-2 my-lg-0 " action="timkiem.php" method="get" >
			      		<input class="form-control mr-sm-3" name="noidungtim" style="width: 70%" type="search" placeholder="Search" aria-label="Search" >

		      			<button class="btn btn-outline-success my-2 my-sm-0"  type="submit"><span class="fa fa-search"></span></button>
		    		</form>
					 
		    	
		  	</div>
		</nav>
</body>
</html>