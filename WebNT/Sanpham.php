<!DOCTYPE html>
<html>
<head>
	<title></title>
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
 	
 	</style>
 	<script>
 		function guiid(idsp){
			var idsp=idsp;
        	$.post("xulyyeuthich.php",{idsp: idsp}, function(ketqua){
		});
	}
 	</script>
</head>
<body>	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center mt-5">
				<h3>Sản phẩm mới nhất</h3>
				<hr>	
				</div>
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
				<div class="col-12 text-center mt-3">
					<h4>Gợi ý hôm nay</h4>
					<hr>
				</div>
				<?php  
					$conn=mysqli_connect("localhost","root","","noithat");
						$sql="SELECT * FROM hanghoa ORDER BY id DESC limit 4,12";
						$ketqua=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($ketqua)){
							$sql_km="SELECT * FROM khuyenmai WHERE id=".$row['idkhuyenmai'];
							$ketqua_km=mysqli_query($conn,$sql_km);
							$row_km=mysqli_fetch_assoc($ketqua_km);

				?>
				 <div class="col-4 form-group" style="background: #FFF">
	                <article class="sp1" style="width: 100%;height: 100%;background-image: url('img/<?php echo $row['anh']; ?>');">
	                    <a class="link" href="chitietsp.php?idhang=<?php echo $row['id'] ?>" title="">
	                    	<article class="" >
		                        <img src="img/<?php echo $row_km['anh']; ?>" width="20%" alt="" height="20%" style="">
		                    
		                        <div class="col-12  text-center" align="center" style="margin-top: 60%">
		                           <div class="row text-center">
										<div class="col-12 ">
											 <?php echo $row['tenhang'] ?>
										</div>
										
										<div class="col-12 ">
											 <font color="red"><b><?php echo number_format($row['dongia']); ?>  đ</b></font><br>
										</div>
										<div class="col-12  ">
			                           
										</div>
									</div>
		                        </div>
		                        
		                    </article>
	                    </a>
	                
	                <div class="col-12 text-center" >
	                    <a class="bt" href="xulygh.php?item=<?php echo $row['id']; ?>" title="" ><button style="margin-top: -15%" type="button" class="btn btn-danger btn-sm"><span class="fa fa-shopping-cart"></span> </button></a>
	                    <a class="bt"  title="" >
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
</body>
</html>