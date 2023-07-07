<?php include("menu.php"); ?> <!DOCTYPE html>
<html>
<head>
	<title>Chi tiết sản phẩm</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/JNKKKK/MoreToggles.css@0.2.1/output/moretoggles.min.css">
     
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
		.rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }
        .rating>input {
            display: none
        }
        .rating>label {
            position: relative;
            width: 1em;
            font-size: 3vw;
            color: #FFD600;
            cursor: pointer
        }
        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }
        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }
        .rating>input:checked~label:before {
            opacity: 1
        }
        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }

 </style>
	<script>
 		function guiid(idsp){
			var idsp=idsp;
        	$.post("xulyyeuthich.php",{idsp: idsp}, function(ketqua){
			});
		}
 	</script>
 <script>
			$(document).ready(function(){
        		$("#guibinhluan").click(function(){
        			// var diachi=window.location.href;
        			// var url=new URL(diachi);
        			// var idsp=url.searchParams.get("idhang");
        			var idsp=$("input[name='idhang']").val();
        			var txt =$("#noidungbinhluan").val();
        			var tendn=$("input[name='tendn']").val();
        			var ngay=$("input[name='ngay']").val();
        			$.post("xulybinhluan.php",{noidung: txt,idsp: idsp,ngay: ngay}, function(ketqua){
        				$("#dsbinhluan").append('<table class="table"><tr><td  rowspan="2" width="10%"> <img src="img/adn.jpg" style="width: 60px;heigh: 60px;margin: 0 0 0 0 " class="img-circle"> </td><td width="10%">	'+tendn+'</td><td>'+ngay+'</td></tr><tr><td colspan="2">:'+txt+'</td></tr></table>');
        			});
        		});
        	});
        	function gui1(idbl){
			var idbl=idbl;
			var t='#noidungbinhluan'+idbl; 
        	var txt =$(t).val();
        	var iduser=$("input[name='iduser']").val();
        	var tenuser=$("input[name='tenuser']").val();
        	var ngay=$("input[name='ngay']").val();
        	$.post("xulytraloibinhluan.php", {noidung: txt,idbl: idbl,iduser: iduser,tenuser: tenuser,ngay: ngay}, function(ketqua){
        	 $("#dsbinhluan"+idbl).append('<table class="table"><tr><td  rowspan="2" width="10%"> <img src="img/adn.jpg" style="width: 60px;heigh: 60px;margin: 0 0 0 0 " class="img-circle"> </td><td width="10%">	'+tenuser+'</td><td>'+ngay+'</td></tr><tr><td colspan="2">:'+txt+'</td></tr></table>');
        			
		});
	}

        </script>
</head>
<body>
	
	<?php 
	 
	$date = getdate();
	if (isset($_SESSION['ten'])) {
		echo '<input type="hidden" name="iduser" value="'.$_SESSION['id'].'">';
		echo '<input type="hidden" name="idhang" value="'.$_GET['idhang'].'">';
		echo '<input type="hidden" name="tenuser" value="'.$_SESSION['ten'].'">';
		echo '<input type="hidden" name="tendn" value="'.$_SESSION['ten'].'">';
		echo '<input type="hidden" name="ngay" value="'.$date['year'].'-'.$date['mon'].'-'.$date['mday'].'"';
		echo '<br>';
	}
	 	$conn=mysqli_connect("localhost","root","","noithat");
		$sql="SELECT * FROM hanghoa WHERE id=".$_GET['idhang'];
		$ketqua=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($ketqua);
	?>
	
		<div class="container-fluid " style="background: #FFF;">
			<div class="container" >	
				<div class="row  mt-3" >
					<div class="col-6">
						<img src="img/<?php echo $row['anh']; ?>" alt="Los Angeles"  width="100%" height="100%" class=" img-responsive">
					</div>
					
					<div class="col-6">
						<h2><?php echo $row['tenhang']; ?></h2>
						<div class="row">
							<?php 

								$sql_danhgiatbc="SELECT idsp,AVG(danhgia) as tbc FROM `danhgia` WHERE idsp=".$_GET['idhang']." GROUP BY idsp";
								$ketqua_danhgiatbc=mysqli_query($conn,$sql_danhgiatbc);
								if (mysqli_num_rows($ketqua_danhgiatbc)>0) {
									$row_danhgiatbc=mysqli_fetch_assoc($ketqua_danhgiatbc);
									$danhgiatbc=(int)$row_danhgiatbc['tbc'];
								}
								else $danhgiatbc='';

								$sql_sobinhluan="SELECT count(id) as sobinhluan FROM binhluan WHERE idsp=".$_GET['idhang'];
								$ketqua_sobinhluan=mysqli_query($conn,$sql_sobinhluan);
								$row_sobinhluan=mysqli_fetch_assoc($ketqua_sobinhluan);

								$sql_soyeuthich="SELECT count(id) as soyeuthich FROM yeuthich WHERE idsp=".$_GET['idhang'];
								$ketqua_soyeuthich=mysqli_query($conn,$sql_soyeuthich);
								$row_soyeuthich=mysqli_fetch_assoc($ketqua_soyeuthich);
								
							?>
							<div class="col-6 text-center " style="border-right: 1px solid #000">
								<a href="#danhgia" class="link">
									<u><?php echo $danhgiatbc; ?></u> 
									<img src="img/sao<?php echo $danhgiatbc; ?>.jpg"  class="mb-2 rounded" style="width: 60%;height: 40%;margin-top: 1%" alt="">
								</a>
							</div>
							<div class="col-3 text-center" style="border-right: 1px solid #000">
								<a class="link" href="#binhluan" title="">
									<u><?php echo $row_sobinhluan['sobinhluan']; ?></u> Bình luận
								</a>
							</div>
							<div class="col-2 text-center " style="border-right: 1px solid #000"><u><?php echo $row_soyeuthich['soyeuthich']; ?></u> <span class="fa fa-heart "></span> </div>
							<div class="col-1">
								
							</div>
						</div>
						<h4 style="color: red;background: #F5F5F5;padding: 10px 30px;" style=""><?php echo number_format($row['dongia']); ?>đ</h4>
						<hr style="border: 2px solid lightgray ;margin: 30px 0 30px 0">
						<form action="xulygh.php?item=<?php echo $row['id']; ?>" method="POST" >
						<table class="">
			 				<tr>
			 					<td width="30%">Vận chuyển:</td>
			 					<td>Miễn phí vận chuyện 
			 						<br> Miễn phí phí vận chuyển khi đơn hàng đạt giá trị tối thiểu</td>
			 				</tr>
			 				<tr>
			 				    <td>Số Lượng</td>
			 				    <td>
			 				    	
			 				    	<br><input type="number" placeholder="1" value="1" name="sl" min="1" style="width: 20%" max="<?php echo $row['soluong']; ?>"><span >&emsp; <?php echo $row['soluong']; ?> sản phẩm có sẵn</span><br><br></td>
			 				</tr>
			 			</table>
			 			<div class="text-center">
			 				<button type="submit" class="btn btn-danger btn-lg">Mua ngay</button>
			 				
			 			</div>
			 			</form>
					</div>
					<div class="col-12 mt-3 mb-3">
						<hr>
					</div>
					<div class="col-12 mt-3 mb-3 text-center" style="background: #F5F5F5">
						<h2 style="color: orange">Thông số kỹ thuật</h2>
						<hr style="width: 5%;border: 2px solid orange">
	
					</div>
					<div class="col-12 mt-3 mb-3 " style="background: #F5F5F5">
						<?php echo $row['mota']; ?>
					</div>
					<div class="col-12 mt-3 mb-3"  id="binhluan">
					</div>
					<div class="container" style="background-color: #F5F5F5;" >

						<div class="row">
							<?php  
								if(isset($_SESSION['id'])){  
							?>
							<div class="col-12">
							<h3 id="danhgia">Đánh giá sản phẩm</h3>
								<form action="xulydanhgia.php?idhang=<?php echo $row['id']; ?>" method="post" accept-charset="utf-8">
									<div class="rating"> 
										<?php 
											$sql_danhgia="SELECT * FROM danhgia WHERE idsp=".$_GET['idhang']." and iduser=".$_SESSION['id']."";
											$ketqua_danhgia=mysqli_query($conn,$sql_danhgia);
											$row_danhgia=mysqli_fetch_assoc($ketqua_danhgia);
											$i=5;
											while($i>0){
												if(isset($row_danhgia['danhgia'])){
													if ($i==$row_danhgia['danhgia']) {
												
											 ?>
											<input type="radio" name="danhgia" checked="checked"  value="<?php echo $i; ?>" id="<?php echo $i; ?>"><label for="<?php echo $i; ?>">☆</label> 
											<?php 
													}
													else {
											?>
											<input type="radio" name="danhgia"  value="<?php echo $i; ?>" id="<?php echo $i; ?>"><label for="<?php echo $i; ?>">☆</label> 
											<?php			
													}
												}
												else {
													?>
													<input type="radio" name="danhgia"  value="<?php echo $i; ?>" id="<?php echo $i; ?>"><label for="<?php echo $i; ?>">☆</label> 
													<?php
												}
												$i--;
											} 
										?>
									</div>
									<input type="submit" class="btn btn-success" style="margin-left: 47%" value="gửi" name="">
								</form>	
							</div>
							<?php } ?>
							<div class="col-12 mt-2 " style="background-color: white;" >
								<h3>Bình luận</h3>
							<?php 
								$sql1="SELECT * FROM binhluan Where idsp=".$_GET['idhang'];
								$query=mysqli_query($conn,$sql1);
								if (isset($_SESSION['id'])) {
									$sqlTK="SELECT * FROM taikhoan Where id=".$_SESSION['id'];
									$queryTK=mysqli_query($conn,$sqlTK);
									$rowTK=mysqli_fetch_assoc($queryTK);
								}
								else {$rowTK='';}
								if(mysqli_num_rows($query)>0){
									while($row1=mysqli_fetch_assoc($query)){
								?>
								<table class="table mt-3 ">
									<tr>
										<td  rowspan="2" width="10%"> 
											<img src="img/adn.jpg" style="width: 60px;height: 60px;margin: 0 0 0 0 " class="img-circle"> 
										</td>
										<td width="10%">	
											<?php echo $row1['tenuser']; ?>
										</td>
										<td width="40%">
											<?php echo $row1['thoigian']; ?>
										</td>
										<td width="40%">
											<button type="button" class="btn btn-sm btn-success "  data-toggle="collapse" data-target="#traloi<?php echo $row1['id']; ?>">Trả lời</button>
											<button type="button" class="btn btn-sm btn-info"  data-toggle="collapse" data-target="#xemphanhoi<?php echo $row1['id']; ?>">Xem phản hồi</button>
										</td>	
									</tr>
									<tr>
										<td colspan="2">
											:<?php  echo $row1['noidung']; ?>
										</td>
									</tr>
								</table>
								
								<?php 
									$sql2="SELECT * FROM traloibl Where idbl=".$row1['id'];
									$query2=mysqli_query($conn,$sql2);	
									if ($num=mysqli_num_rows($query2)>0) {
								 ?>		
								<div class="col-12 collapse "style="margin-left: 50px" id="xemphanhoi<?php echo $row1['id']; ?>"> 
									<?php 
										while($row2=mysqli_fetch_assoc($query2)){
									 ?>
									<table class="table ">
										<tr>
											<td  rowspan="2" width="10%"> 
												<img src="img/adn.jpg" style="width: 60px;height: 60px;margin: 0 0 0 0 " class="img-circle"> 
											</td>
											<td width="10%">	
												<?php echo $row2['tenuser']; ?>	
											</td>
											<td width="80%">
												<?php echo $row2['ngay']; ?>
											</td>
											
										</tr>
										<tr>
											<td colspan="2">
												<?php echo $row2['noidung']; ?>
											</td>
											
										</tr>
									</table>
									
									<?php } ?>
								</div>
							<?php } ?>
								<div class="collapse col-12 "style="margin-left: 50px" id="traloi<?php echo $row1['id']; ?>">
									<div class="col-12 "id="dsbinhluan<?php echo $row1['id']; ?>">
									</div>	
									<?php if (isset($_SESSION['ten']) &&$rowTK['trangthai']=='') { ?>
									<div class="col-12 "style="margin-left: 100px"> <img src="img/adn.jpg" style="width: 40px;height: 40px;margin: 0 0 0 0 " class="img-circle"> 
										<br>
										
										 <div class=" form-inline my-2 my-lg-0 "  >
								      		<input class="form-control mr-sm-3" type="search" name="noidungbinhluan<?php echo $row1['id']; ?> " id="noidungbinhluan<?php echo $row1['id']; ?>" placeholder="" >

							      			<button class="btn btn-outline-success my-2 my-sm-0"  onclick="gui1(<?php echo$row1['id']; ?>)" type="button"><span class="">Gửi</span></button>
							    		</div> 
									</div>	
									
									<?php } ?>
								</div>
								
							<?php 
								}
							}
							else {
								?>
								<div class="col-12" id='danhgiarong'><hr><h3 > Chưa có bình luận nào</h3><br></div>
								<?php
							}
									if (isset($_SESSION['ten'])) {
									
							?>	
								<div class="col-12" id="dsbinhluan">
								</div>
								<div class="col-12 mb-3" style="background-color: white;" ><img src="img/adn.jpg" style="width: 60px;height: 60px;margin: 0 0 0 0 " class="img-circle"> <?php echo $_SESSION['ten']; ?>
									<br>
									
									 <div class=" form-inline my-2 my-lg-0  "  >
							      		<input class="form-control mr-sm-3" type="text" placeholder="" name="noidungbinhluan" id="noidungbinhluan" >

						      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="guibinhluan" >Gửi</button>
						    		</div> 
								</div>
							<?php } ?>			
							
							</div>
						<div class="col-12 mt-3">
							<div class="row">
								<?php  
					$conn=mysqli_connect("localhost","root","","noithat");
						$sql="SELECT * FROM hanghoa ORDER BY id DESC limit 0,4 ";
						$ketqua=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($ketqua)){
							$sql_km="SELECT * FROM khuyenmai WHERE id=".$row['idkhuyenmai'];
							$ketqua_km=mysqli_query($conn,$sql_km);
							$row_km=mysqli_fetch_assoc($ketqua_km);

				?>
				<div class="col-3" style="background: #FFF">
	                <article class="sp1" style="width: 100%;height: 100%;background-image: url('img/<?php echo $row['anh']; ?>');">
	                 	<a class="link" href="chitietsp.php?idhang=<?php echo $row['id'] ?>" title="">
	                 		<article class="" >
		                        <img src="img/<?php echo $row_km['anh']; ?>" width="20%" alt="" height="20%" style="">
		                    
		                        <div class="col-12 " align="center" style="margin-top: 70%">
		                            <?php echo $row['tenhang'] ?> <br>	
		                            <font color="red"><b><?php echo number_format($row['dongia']); ?> đ</b></font><br>
		                        
		                        </div>
		                    </article>
	                 	</a>
	                
	                <div class="col-12 text-center " >
	                    <a class="bt" href="xulygh.php?item=<?php echo $row['id']; ?>" title="" ><button style="margin-top: -23%" type="button" class="btn btn-danger btn-sm"><span class="fa fa-shopping-cart"></span> </button></a>
	                    <a class="bt"  title="">
	                    	<div class="mt-heart-golden "  style="font-size: 50%;display: inline-block;"> 
	                    		    <?php 
	                    		    if(isset($_SESSION['id'])){
										$sql1="SELECT * from yeuthich WHERE idsp=".$row['id']." and iduser=".$_SESSION['id']."";
									    $query1=mysqli_query($conn,$sql1);
									    $row1=mysqli_fetch_assoc($query1);
									    if (mysqli_num_rows($query1)==0) {
									     ?>
									    <input id="<?php echo $row['id']; ?>" type="checkbox" onclick="guiid(<?php echo $row['id'];?>)" />
									    <label for="<?php echo $row['id']; ?>"></label>
									<?php  
									    }
									    else {
									?>
									    <input id="<?php echo $row['id']; ?>" type="checkbox" checked="checked" onclick="guiid(<?php echo $row['id'];?>)" />
									    <label for="<?php echo $row['id']; ?>"></label>
									<?php
									  	} 
									}else{ 
									?>
									<input id="<?php echo $row['id']; ?>" type="checkbox"  onclick="guiid(<?php echo $row['id'];?>)" />
									    <label for="<?php echo $row['id']; ?>"></label>
									<?php } ?>
							</div>
						</a>
	                </div>
	                </article>
	            </div>
	            <?php  
	            		}
	            	
	            ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<?php  include("lienhe.php");?>
</body>
</html>