<?php 

include("menu.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
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
 
 	





 	  @media (min-width: 768px) and (max-width: 991px) {
  /* Show 4th slide on md if col-md-4*/
  #multi-carousel .carousel-inner .active.col-md-4.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    /*change this with javascript in the future*/
    z-index: -1;
    display: block;
    visibility: visible;
  }
}

@media (min-width: 576px) and (max-width: 768px) {
  /* Show 3rd slide on sm if col-sm-6*/
  #multi-carousel .carousel-inner .active.col-sm-6.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -50%;
    /*change this with javascript in the future*/
    z-index: -1;
    display: block;
    visibility: visible;
  }
}

@media (min-width: 576px) {
  #multi-carousel .carousel-item {
    margin-right: 0;

  }
  /* show 2 items */
  #multi-carousel .carousel-inner .active+.carousel-item {
    display: block;
  }
  #multi-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  #multi-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item {
    transition: none;
  }
  #multi-carousel .carousel-inner .carousel-item-next {
    position: relative;
    transform: translate3d(0, 0, 0);
  }
  /* left or forward direction */
  #multi-carousel .active.carousel-item-left+.carousel-item-next.carousel-item-left,
  #multi-carousel .carousel-item-next.carousel-item-left+.carousel-item,
  #multi-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* farthest right hidden item must be also positioned for animations */
  #multi-carousel .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* right or prev direction */
  #multi-carousel .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
  #multi-carousel .carousel-item-prev.carousel-item-right+.carousel-item,
  #multi-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}


/* MD */

@media (min-width: 768px) {
  /* show 3rd of 3 item slide */
  #multi-carousel .carousel-inner .active+.carousel-item+.carousel-item {
    display: block;
  }
  #multi-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
    transition: none;
  }
  #multi-carousel .carousel-inner .carousel-item-next {
    position: relative;
    transform: translate3d(0, 0, 0);
  }
  /* left or forward direction */
  #multi-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* right or prev direction */
  #multi-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}


/* LG */

@media (min-width: 991px) {
  /* show 4th item */
  #multi-carousel .carousel-inner .active+.carousel-item+.carousel-item+.carousel-item {
    display: block;
  }
  #multi-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item+.carousel-item {
    transition: none;
  }
  /* Show 5th slide on lg if col-lg-3 */
  #multi-carousel .carousel-inner .active.col-lg-3.carousel-item+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -25%;
    /*change this with javascript in the future*/
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* left or forward direction */
  #multi-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* right or prev direction //t - previous slide direction last item animation fix */
  #multi-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}

</style>
<script>
	

</script>
</head>
<body >
	
		
	
	<div class="container-fluid" style="background: #F5F5F5">
		<div class="container " style=";background: white">
			<div class="row">
				<div class="col-3">
					<hr>
					<h5 class="mt-3">Nhóm sản phẩm</h5>
					<div class="col-3 col-12" style="background: #EEE;border: 1px solid #DCC">
						<ul class="mt-2 ml-2 mb-2 list-group">
						<?php  
							$conn=mysqli_connect("localhost","root","","noithat");
							$sql="SELECT * FROM danhmuc" ;
							$ketqua=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($ketqua)){
								$sql_dem="SELECT count(id) as dem FROM hanghoa WHERE iddanhmuc=".$row['id'] ;
								$ketqua_dem=mysqli_query($conn,$sql_dem);
								$row_dem=mysqli_fetch_assoc($ketqua_dem);
						?>
							<li><a href="danhmuc.php?iddanhmuc=<?php echo $row['id']; ?>&idphong=<?php echo $row['idphong']; ?>" style="text-decoration: none;color: black" ><?php echo $row['tendanhmuc'] ?><sub style="color: red">(<?php echo $row_dem['dem']; ?>)</sub></a></li>
							
						<?php 
							}
						 ?>
						</ul>
					</div>
					
					<h5 class="mt-3">Top sản phẩm được yêu thích nhất</h5>
					<div class="col-3 col-12" style="background: #EEE;border: 1px solid #DCC">
						<ul class="mt-2 ml-2 list-group">
						<?php  
							$sql_yeuthich="SELECT idsp , COUNT(1) FROM yeuthich GROUP BY idsp DESC HAVING COUNT(1) > 0 limit 0,3" ;
							$ketqua_yeuthich=mysqli_query($conn,$sql_yeuthich);
							while($row_yeuthich=mysqli_fetch_assoc($ketqua_yeuthich)){
								$sql_hang="SELECT * FROM hanghoa WHERE id=".$row_yeuthich['idsp'] ;
								$ketqua_hang=mysqli_query($conn,$sql_hang);
								$row_hang=mysqli_fetch_assoc($ketqua_hang);
						?>
							<li><a class="link" href="chitietsp.php?idhang=<?php echo $row_hang['id']; ?>" title=""><?php echo $row_hang['tenhang']; ?></a></li>
						<?php  
							}
						?>

						</ul>
					</div>
					<h4 class="mt-3">Tiêu chí</h4>
					<div class="col-12 " style="background: #FFF;border: 1px solid #DCC">
						<ul class="mt-2 ml-2 list-group item-center">
							<li>Giá bán niêm yết <br><img src="img/giaban.jpg" width="40%" height="30%" alt=""></li>
							<li>Chất lượng đạt chuẩn <br><img src="img/chatluong.jpg" width="40%" height="30%" alt=""></li>
							<li>Tùy chình kích thước <br><img src="img/tuychinhkichthuoc.jpg" width="40%" height="30%" alt=""></li>
							<li>Giao hàng tại nhà <br><img src="img/giaohang.jpg" width="40%" height="30%" alt=""></li>
							<li>Bảo hành 12 tháng <br><img src="img/baohanh.jpg" width="40%" height="30%" alt=""></li>
						</ul>
					</div>
				</div>
				
				<div class="col-9 mt-3  "  >
					<div class="row">
						<div class="col-12">
							<table class="table tableborderless" style="border-spacing: 20px; " >
							  	<tr>
							  		<td rowspan="2" width="70%">
							  			<div id="myCarousel" class="carousel slide">
							  
										  <!-- Indicators -->
										  <ul class="carousel-indicators">
										    <li class="item1 active"></li>
										    <li class="item2"></li>
										    <li class="item3"></li>
										    <li class="item4"></li>
										  </ul>
										  
										  <!-- The slideshow -->
										  <div class="carousel-inner">
										  	<div class="carousel-item active">
										      <img src="img/anh1.jpg" alt="Los Angeles"  width="100%" height="100%" class=" img-responsive">
										    </div>
										    <div class="carousel-item ">
										      <img src="img/anhbia.jpg" alt="Los Angeles"  width="100%" height="100%" class=" img-responsive">
										    </div>
										    <div class="carousel-item">
										      <img src="img/anh8.jpg" alt="Chicago" width="100%" height="100%"class="img-responsive">
										    </div>
										    <div class="carousel-item ">
										      <img src="img/anh4.jpg" alt="New York" width="100%" height="100%"class="img-responsive">
										    </div>
										  </div>
										  
										  <!-- Left and right controls -->
										  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
										    <span class="carousel-control-prev-icon"></span>
										  </a>
										  <a class="carousel-control-next" href="#myCarousel" data-slide="next" >
										    <span class="carousel-control-next-icon"></span>
										  </a>
										</div>
							  		</td>
							
									<script>
									$(document).ready(function(){
									  // Activate Carousel with a specified interval

									  $("#myCarousel").carousel({interval: 5000});
									        
									  // Enable Carousel Indicators
									  $(".item1").click(function(){
									    $("#myCarousel").carousel(0);
									  });
									  $(".item2").click(function(){
									    $("#myCarousel").carousel(1);
									  });
									  $(".item3").click(function(){
									    $("#myCarousel").carousel(2);
									  });
									    
									  // Enable Carousel Controls
									  // $(".carousel-control-prev").click(function(){
									  //   $("#myCarousel").carousel("prev");
									  // });
									  // $(".carousel-control-next").click(function(){
									  //   $("#myCarousel").carousel("next");
									  // });
									});
									</script>
							
									<td>
										<div class="mt-2 img-container">
											<img src="img/anh3.jpg"class="img-responsive" alt=""width="100%" height="100%">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="mt-2 img-container">
											<img src="img/anh5.jpg"class="img-responsive" alt=""width="100%" height="100%">
										</div>
									</td>
								</tr>
							</table>
							
						</div>
			        	<div class="col-12">
			        		<hr>
			        	</div>
						<div class="col-12 ">
				    		<div class="row">
				    			 <?php  
						        	$sql_phong="SELECT * FROM loaiphong" ;
									$ketqua_phong=mysqli_query($conn,$sql_phong);
									while($row_phong=mysqli_fetch_assoc($ketqua_phong)){
						        ?>
						        <div class="col-3 text-center ">
						          <a class="link" href="phong.php?idphong=<?php echo $row_phong['id']; ?>" style="color: black">
						          	<img src="img/<?php echo $row_phong['anh']; ?>" class="img-fluid mx-auto d-block" alt="img3">
							          <font  style=";text-shadow: 0 0 25px  yellow;">
				          					<b><?php echo $row_phong['tenphong'];?></b></font>
						          </a>
						        </div>
						        <?php 
						        	}
						        ?>
							  
								<div class="col-12 mt-3 text-center">
									<h3>Danh mục nổi bật</h3>
					        		<hr>
					        	</div>
					        	<?php  
						        	$sql_danhmuc="SELECT * FROM danhmuc" ;
									$ketqua_danhmuc=mysqli_query($conn,$sql_danhmuc);
									while($row_danhmuc=mysqli_fetch_assoc($ketqua_danhmuc)){
						        ?>
								<div class="col-3 text-center" >
					        		<a class="link" href="danhmuc.php?idphong=<?php echo $row_danhmuc['idphong']; ?>&iddanhmuc=<?php echo $row_danhmuc['id']; ?>" title="">
					        			<div class=" col-12  ">
						        		  <img src="img/<?php echo $row_danhmuc['anh']; ?>" class="rounded-responsive"  alt="img1" style="width: 100%">
							        	</div>
								        <font class=""  style=";text-shadow: 0 0 25px  yellow;">
								          	<b><?php echo $row_danhmuc['tendanhmuc']; ?></b>
								        </font>
					        		</a>
						        </div>
						    	<?php 
						    		} 
						    	?>
					    	</div>
				        </div>
					</div>
				</div>
				 <?php include("Sanpham.php"); ?>
				<div class="col-12 mt-3 text-center ">
					<h4>Xu hướng thiết kế</h4>
					<hr>
				</div>
				<div class="col-12 mb-5">
					<div class="row">

						<div class="col-6 mb-2">
							<div class="col-6  mb-2" style="border-top: 1px solid black;border-bottom: 1px solid black">
								<h4>Phong cách Bắc Âu</h4>
							</div>
							<img src="img/phongcaoBA.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="col-6 mb-2">
							
							<img src="img/bosuutap.jpg" alt="" width="100%" height="100%">
							<div class="col-6 mt-3  mb-2" style="border-top: 1px solid black;border-bottom: 1px solid black">
								<h4>Phong cách Bắc Âu</h4>
							</div>
						</div>
						
						<hr>
					</div>
					
				</div>
			
			</div>

		</div>
		<div class="container " style="background: #F5F5F5" >
			<div class="row ">
				<div class="col-12 mt-5 text-center " style="background: white ">
					<h4>Tin tức và sự kiện</h4>
				</div>
				<div class="col-4 ">
					Bài viết mới 
					 <?php  
			        	$sql_tinmoi="SELECT * FROM tintuc ORDER BY id DESC" ;
						$ketqua_tinmoi=mysqli_query($conn,$sql_tinmoi);
						$row_tinmoi=mysqli_fetch_assoc($ketqua_tinmoi);
			        ?>
					<table class="table bg-white">
						<tr> 
							<td width="70%">
								<a href="chitiettintuc.php?idtin=<?php echo $row_tinmoi['id']; ?>" title=""><img src="img/<?php echo $row_tinmoi['anh']; ?>" alt="" width="80%" height="15%"></a>
							</td>
							<td>
								<a class="link" href="chitiettintuc.php?idtin=<?php echo $row_tinmoi['id']; ?>" title=""><?php echo $row_tinmoi['tieude']; ?></a>
							</td>
					    </tr>
					    
					</table>

				</div>
				<div class="col-4 ">
					Bài viết xem nhiều nhất
					 <?php  
			        	$sql_tinhot="SELECT * FROM tintuc ORDER BY luongtruycap DESC" ;
						$ketqua_tinhot=mysqli_query($conn,$sql_tinhot);
						$row_tinhot=mysqli_fetch_assoc($ketqua_tinhot);
			        ?>
					<table class="table bg-white">
						<tr> 
							<td width="70%">
								<a href="chitiettintuc.php?idtin=<?php echo $row_tinhot['id']; ?>" title=""><img src="img/<?php echo $row_tinhot['anh']; ?>" alt="" width="80%" height="15%"></a>
							</td>
							<td>
								<a class="link" href="chitiettintuc.php?idtin=<?php echo $row_tinhot['id']; ?>" title=""><?php echo $row_tinhot['tieude']; ?></a>
							</td>
					    </tr>
					    
					</table>
				</div>
				<div class="col-4">
					Bài viết nổi bật 
					<?php  
			        	$sql_tinNoibat="SELECT * FROM tintuc ORDER BY id limit 1,1 " ;
						$ketqua_tinNoibat=mysqli_query($conn,$sql_tinNoibat);
						$row_tinNoibat=mysqli_fetch_assoc($ketqua_tinNoibat);
			        ?>
					<table class="table bg-white">
						<tr> 
							<td width="70%">
								<a href="chitiettintuc.php?idtin=<?php echo $row_tinNoibat['id']; ?>" title=""><img src="img/<?php echo $row_tinNoibat['anh']; ?>" alt="" width="80%" height="15%"></a>
							</td>
							<td>
								<a class="link" href="chitiettintuc.php?idtin=<?php echo $row_tinNoibat['id']; ?>" title=""><?php echo $row_tinNoibat['tieude']; ?></a>
							</td>
					    </tr>
					   
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include("lienhe.php"); ?>
</body>
</html>
