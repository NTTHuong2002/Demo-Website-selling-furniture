<!DOCTYPE html>
<html>
<head>
	<title>Sản phẩm theo Phòng</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/JNKKKK/MoreToggles.css@0.2.1/output/moretoggles.min.css">
<style type="text/css" media="screen">

 	article.sp1{
    
    background-repeat: no-repeat;
    background-size: contain;
    width: 100%;
    height: auto;
    }
 	article.sp1:hover{
 		
 		box-shadow: 0 0 10px;
 		
 	}
 	article.sp1 a.bt{
 		visibility: hidden;
 	}
 	article.sp1:hover a.bt{
 	
 		visibility: visible;

 		
 	}
 </style>
</head>
<body>
	
	<?php 
	 include("menu.php"); 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['idphong'])) {
		$sql="SELECT * FROM loaiphong WHERE id=".$_GET['idphong'];
		$ketqua=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($ketqua);
	}	
	?>

		<div class="container-fluid " style="background: #F5F5F5 ;">
			<div class="container" >
				<div class="row" style="height: 320px">
					<div class="col-5 mt-5" >
						<h3><?php echo $row['tenphong']; ?></h3>
						<p><?php echo $row['mota']; ?></p>
					</div>
					<div class="col-7 " >
						<img src="img/<?php echo $row['anh']; ?>" alt="" width="100%" height="70%" style="margin: 0 0 0 0">
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid " style="background: #FFF;">
			<div class="container" >	
				<div class="row  mt-3" >
					<div class="col-2 mt-2">
						<p style="font-size: 20px">Danh mục</p>
						<hr>
					</div>
					<div class="col-10 text-right mt-1">
						<span style="display: inline-block;float: left">
							<form action="phong.php?idphong=<?php echo $_GET['idphong']; ?>" method="POST" accept-charset="utf-8">
								Số sản phẩm
								<select name="soluong" class=""  >
									<?php  
										$sql_danhmuc1="SELECT * FROM danhmuc WHERE idphong=".$_GET['idphong'];
										$ketqua_danhmuc1=mysqli_query($conn,$sql_danhmuc1);
										while($row_danhmuc1=mysqli_fetch_assoc($ketqua_danhmuc1)){
											$result=mysqli_query($conn,'select count(id) as total from hanghoa where iddanhmuc='.$row_danhmuc1['id']);
											$row_tong =mysqli_fetch_assoc($result);
											$total_records=$row_tong['total'];
											$current_page=isset($_GET['page'])?$_GET['page']:1;
											if (isset($_POST['soluong'])) {
												$limit=$_POST['soluong'];
												$_SESSION['soluong']=$limit;
											}
											else if (isset($_SESSION['soluong'])) {
												$limit=$_SESSION['soluong'];
											}
											else $limit=6;
											$total_page=ceil($total_records/$limit);
											if ($current_page>$total_page) {

												$current_page=$total_page;
											}
											else if ($current_page<1) {
												$current_page=1;	
											}
											$i=1;
										while ( $i<= $total_records) {
											if (isset($_SESSION['soluong'])) {
												if ($i==$_SESSION['soluong']) {
													echo'<option value="'.$i.'" selected="selected">'.$i.'</option>';
														
												}
												else echo'<option value="'.$i.'" >'.$i.'</option>';
												
											}else echo'<option value="'.$i.'" >'.$i.'</option>';
											$i=$i+1	;
										}
											if (isset($_SESSION['soluong'])) {
												if ($i==$_SESSION['soluong']) {
														 echo'<option value="'.$i.'" selected="selected">Tất cả</option>';
												}
												else echo'<option value="'.$i.'" >Tất cả</option>';
											}	else echo'<option value="'.$i.'" selected="selected">Tất cả</option>';
											$start=($current_page-1)* $limit;
									?>
									
								</select>
								<input type="submit" name="" class="btn btn-success" value="Áp dụng" style="margin: 0 0 0 0">
							</form>
							
						</span>
						HIỆN CÓ 468 SẢN PHẨM 
						<a href="#" title="">
							<span class="fa fa-th border" style="padding: 10px"></span>
						</a>
						
						<hr>
					</div>
					<div class="col-2">
						<div class="row">
							<div class="col-12">
							<?php  
								$sql_phong="SELECT * FROM loaiphong ";
								$ketqua_phong=mysqli_query($conn,$sql_phong);
								while($row_phong=mysqli_fetch_assoc($ketqua_phong)){
							?>
								<table>
									<tr>
									<?php  
										if ($row_phong['id']==$_GET['idphong']) {
									?>
										<td width="90%"><a style="color: orange"href="phong.php?idphong=<?php echo $row_phong['id']; ?>" title=""><p style=""> <?php echo $row_phong['tenphong']; ?></p></a></td>
									<?php
										}
										else {
									?>
										<td width="90%"><a style="color: black"href="phong.php?idphong=<?php echo $row_phong['id']; ?>" title=""><p style=""> <?php echo $row_phong['tenphong']; ?></p></a></td>
									<?php  
										}
									?>	
										<td><button type="button" class="btn btn-sm mb-3"  data-toggle="collapse" data-target="#demo<?php echo $row_phong['id']; ?>"><span class="fa fa-sort-down " ></span></button></td>
									</tr>
								</table>
								<?php  
										if ($row_phong['id']==$_GET['idphong']) {
									?>
										<div class="col-12 collapse show" style="border-left: 1px solid black" id="demo<?php echo $row_phong['id']; ?>">
									<?php
										}
										else {
									?>
										<div class="col-12 collapse " style="border-left: 1px solid black" id="demo<?php echo $row_phong['id']; ?>">
									<?php  
										}
									?>	
									<?php  
										$sql_danhmuc="SELECT * FROM danhmuc WHERE idphong=".$row_phong['id'];
										$ketqua_danhmuc=mysqli_query($conn,$sql_danhmuc);
										while($row_danhmuc=mysqli_fetch_assoc($ketqua_danhmuc)){
									?>
									<p><a href="danhmuc.php?iddanhmuc=<?php echo $row_danhmuc['id']; ?>&idphong=<?php echo $row_phong['id']; ?>" title="" style="text-decoration: none;"><?php echo $row_danhmuc['tendanhmuc']; ?></a> </p>
									<?php  
										}
									?>
							
									</div>
							<?php 
								}
							 ?>
								
									</div>
								</div>
								
								<h5 class="mt-3 text-center">Bộ lọc tìm kiếm</h5>
								<hr>
								
								<form action="phong.php" method="get" style="background: #FFF;">
									<div class="col-xs-3" style="">
										<div class="col-xs-12 text-center" style="height: 100%">
											<p class="">Khoảng giá</p>
											<input type="number" name="gia"required min="0"  style="width: 40%" placeholder="">
												-
											<input type="number" name="gialh"required min="1"  style="width: 40%;" placeholder="">
											<input type="hidden" name="idphong" value="<?php echo $_GET['idphong']; ?>">
											<p ><input type="submit" value="Thực hiện" class="form-control btn btn-danger" style="margin-top: 10px"></p>
										</div>
									</div>
								</form>
							
					</div>
					<div class="col-10 ">
						<div class="row" >
							<?php  

								if (isset($_GET['gia'])&&isset($_GET['gialh'])) {
									$tktg=1;
									$gia=$_GET['gia'];
									$gialh=$_GET['gialh'];
									$result=mysqli_query($conn,"SELECT count(id) as total FROM hanghoa Where dongia BETWEEN ".$gia." and ".$gialh." and iddanhmuc=".$row_danhmuc1['id']);
									$row_tong1 =mysqli_fetch_assoc($result);
									$total_records=$row_tong1['total'];
									$total_page1=ceil($total_records/$limit);
									$start=($current_page-1)* $limit;
									$ketqua_hanghoa=mysqli_query($conn,"SELECT * FROM hanghoa Where dongia BETWEEN ".$gia." and ".$gialh." and iddanhmuc=".$row_danhmuc1['id']." LIMIT $start,$limit");
								}

								else $ketqua_hanghoa=mysqli_query($conn,"SELECT * FROM hanghoa WHERE iddanhmuc=".$row_danhmuc1['id']." LIMIT $start,$limit");
								while($row_hanghoa=mysqli_fetch_assoc($ketqua_hanghoa)){
									$sql_km="SELECT * FROM khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
									$ketqua_km=mysqli_query($conn,$sql_km);
									$row_km=mysqli_fetch_assoc($ketqua_km);

							?>
							<div class="col-4 form-group" >
								<article class="sp1" style="width: 100%;height: 100%;background-image: url('img/<?php echo $row_hanghoa['anh']; ?>');">
									<a class="link" href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>" title="" >
										<article class=" img-container" >
											<img src="img/<?php echo $row_km['anh'] ?>" width="20%" alt="" height="20%" style="">
										</article >
										<div class="col-12" align="center " style="margin-top: 60%">
											<?php echo $row_hanghoa['tenhang'] ?><br>
											<font color="red"><b><?php echo number_format($row_hanghoa['dongia']) ?> đ</b></font><br>
											
										</div>
									</a>
									<div class="col-12" align="center">
										<a class="bt" href="xulygh.php?item=<?php echo $row_hanghoa['id']; ?>"  title=""><button type="button" class="btn btn-danger btn-sm"style="margin-top: -20%;"><span class="fa fa-shopping-cart"></span> </button></a>
										<script>
									 		function guiid(idsp){
												var idsp=idsp;
									        	$.post("xulyyeuthich.php",{idsp: idsp}, function(ketqua){
											});
										}
									 	</script>
	                    				 <a class="bt"  title="" >
					                    	<div class="mt-heart-golden "  style="font-size: 50%;display: inline-block;"> 
					                    		    <?php 
					                    		    if(isset($_SESSION['id'])){
														$sql1="SELECT * from yeuthich WHERE idsp=".$row_hanghoa['id']." and iduser=".$_SESSION['id']."";
													    $query1=mysqli_query($conn,$sql1);
													    $row1=mysqli_fetch_assoc($query1);
													    if (mysqli_num_rows($query1)==0) {
													     ?>
													    <input id="<?php echo $row_hanghoa['id']; ?>" type="checkbox" onclick="guiid(<?php echo $row_hanghoa['id'];?>)" />
													    <label for="<?php echo $row_hanghoa['id']; ?>"></label>
													<?php  
													    }
													    else {
													?>
													    <input id="<?php echo $row_hanghoa['id']; ?>" type="checkbox" checked="checked" onclick="guiid(<?php echo $row_hanghoa['id'];?>)" />
													    <label for="<?php echo $row_hanghoa['id']; ?>"></label>
													<?php
													  	} 
														}else{ 
													?>
														<input id="<?php echo $row_hanghoa['id']; ?>" type="checkbox"  onclick="guiid(<?php echo $row_hanghoa['id'];?>)" />
														    <label for="<?php echo $row_hanghoa['id']; ?>"></label>
														<?php } ?>
													
											</div>
										</a>
									</div>
								</article>
							</div>
								<?php  
									}
								}
							?>
							
						</div>
						
						<div class="col-12 mt-3" >
							<div class="row">
								<div class="col-3">
								
								</div>
								<div class="col-6 text-center" >
									<?php 
									if(isset($tktg)){
	 									$total_page=$total_page1;	
								 		if ($current_page>1&&$total_page>1) {
								 			echo '<a class="btn btn-primary" href="phong.php?page='.($current_page-1).'&gia='.$gia.'&gialh='.$gialh.'&idphong='.$_GET['idphong'].'" title="">Prev</a> | ';
								 		}
								 		for ($i=1; $i <=$total_page ; $i++) { 
								 			if ($i==$current_page) {
								 				echo '<span class="btn btn-primary">'.$i.'</span> | ';

								 			}
								 			else {
								 				echo '<a class="btn btn-primary" href="phong.php?page='.$i.'&gia='.$gia.'&gialh='.$gialh.'&idphong='.$_GET['idphong'].'" title="">'.$i.'</a> | ';

								 			}

								 		}
								 		if ($current_page<$total_page&& $total_page>1) {
								 			echo '<a class="btn btn-primary" href="phong.php?page='.($current_page+1).'&gia='.$gia.'&gialh='.$gialh.'&idphong='.$_GET['idphong'].'	" title="">Next</a>  ';
								 		}
								 	}
								 	else{
								 		if ($current_page>1&&$total_page>1) {
								 			echo '<a class="btn btn-primary" href="phong.php?page='.($current_page-1).'&idphong='.$_GET['idphong'].'" title="">Prev</a> | ';
								 		}
								 		for ($i=1; $i <=$total_page ; $i++) { 
								 			if ($i==$current_page) {
								 				echo '<span class="btn btn-primary">'.$i.'</span> | ';

								 			}
								 			else {
								 				echo '<a class="btn btn-primary" href="phong.php?page='.$i.'&idphong='.$_GET['idphong'].'" title="">'.$i.'</a> | ';

								 			}

								 		}
								 		if ($current_page<$total_page&& $total_page>1) {
								 			echo '<a class="btn btn-primary" href="phong.php?page='.($current_page+1).'&idphong='.$_GET['idphong'].'	" title="">Next</a>  ';
								 		}
								 	} 

								 	 ?>
								</div>
								<div class="col-3">
									
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-12 mt-3 mb-3">
						<br>
					</div>
					
						
				</div>
			</div>
		</div>

		<?php  include("lienhe.php");?>
</body>
</html>