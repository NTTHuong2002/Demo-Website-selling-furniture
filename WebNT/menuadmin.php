<?php session_start(); 
  if (isset($_SESSION['vt'])) {
    if ($_SESSION['vt']!="admin") {
      header("location: trangchu.php");
    }
  }
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

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <style type="text/css" media="screen">
  @media screen and (max-width: 320px) {
    body,div,h1,h2,h3,h4,h5,h6,sup,span,a,sup {
      font-size: 9px;
      /*width: 1251px;*/
    }
    div.link a{ 
    display: none;
  }
  }
  @media (min-width: 321px)  and (max-width: 640px) {
    body div,h1,h2,h3,h4,h5,h6,span,a,sup{
      /*width: 1251px;*/
      font-size: 8px;
    }
    span.t{
      font-size: 11px;
    }
    div.link a{ 
    display: none;
  }
  }
  @media (min-width: 641px) and (max-width: 960px) {
    body div,h1,h2,h3,h4,h5,h6,span,a,sup{
    font-size: 14px;
    }
     div.link a{ 
    display: none;
  }
   
  }
  @media (min-width: 890px) and (max-width: 1250px) {
    body div,h1,h2,h3,h4,h5,h6,span,a,sup{
    font-size: 17px;
    }
    div.link a{ 
    display: none;
  }
  @media (min-width: 1250px) and (max-width: 1400px) {
    body div,h1,h2,h3,h4,h5,h6,span,a,sup{
    font-size: 18px;
    }
     div.link a{ 
    display: inline-block;
    text-decoration: none
  }
  }
  body{
  font-size: 20px;
  font-family: serif;
    }
     
 </style>
 <script>
                      
 </script>
</head>
<body>
	<script >
    // $(document).ready(function(){
    //   $("#bt1").click(function(){
    //     $("#trangchinh").html('<div class="row"><div class="col-12" style="background: #F5F5F5"><h3>Chào mừng bạn đến với trang quản trị</h3><table class="table table-bordered" style="border-spacing: 50px;border-collapse: separate;"><tr><td rowspan="3"style="background: white "><img src="img/admin1.jpg" alt="" style="width: 100%"></td><td style="background: white "><img src="img/admin2.jpg" alt=""></td></tr> <tr><td style="background: white "><img src="img/admin3.jpg" alt=""></td></tr> <tr> <td style="background: white "> <img src="img/admin4.jpg" alt=""> </td> </tr> </table>  </div> </div>');
    //   });
    //   $("#bt2").click(function(){
    //     $("#trangchinh").load('Thongkedanhmuc.php');
    //   });
    //   $("#bt3").click(function(){
    //     $("#trangchinh").load('themdanhmuc.php');
    //   });
    //   $("#bt4").click(function(){
    //     $("#trangchinh").load('hanghoa.php');
    //   });
    //   $("#bt5").click(function(){
    //     $("#trangchinh").load('themhanghoa.php');
    //   });
    //   $("#bt6").click(function(){
    //     $("#trangchinh").load('khachhang.php');
    //   });
    //   $("#bt7").click(function(){
    //     $("#trangchinh").load('danhgia.php');
    //   });
    // });
  </script>

    
    <div class="row">
      <div class="col-12">
        <div class="w3-sidebar w3-bar-block w3-card" style=";display: block;width: 20%;background: rgb(59 78 100);color: #FFF;" id="mySidebar">
          <button class="w3-bar-item w3-button   "
          onclick="w3_close()" style="padding: 15px 20px;" ><span class="fa fa-close" style="font-size: 1.3em;color: white">
            Dashbroad
          </span></button>

          <a href="admin.php" class="w3-bar-item w3-button " style="text-decoration: none"> Trang chính</a>
          <a href="cuahang.php" class="w3-bar-item w3-button " style="text-decoration: none">Cửa hàng</a>
          <a href="thongkedanhmuc.php" class="w3-bar-item w3-button "style="text-decoration: none"> Danh mục</a>
          <a href="themdanhmuc.php" class="w3-bar-item w3-button "style="text-decoration: none"> Thêm danh mục</a>
          <a href="hanghoa.php" class="w3-bar-item w3-button " style="text-decoration: none"> Hàng hóa</a>
          <a href="themhanghoa.php" class="w3-bar-item w3-button " style="text-decoration: none"> Thêm hàng hóa</a>
          <a href="khachhang.php" class="w3-bar-item w3-button " style="text-decoration: none"> Khách hàng </a>
          <a href="binhluan.php" class="w3-bar-item w3-button " style="text-decoration: none">Bình luận</a>
          <a href="thongketintuc.php" class="w3-bar-item w3-button " style="text-decoration: none">Tin tức</a>
          <a href="themtintuc.php" class="w3-bar-item w3-button " style="text-decoration: none">Thêm tin tức</a>
          <a href="danhsachkhuyenmai.php" class="w3-bar-item w3-button " style="text-decoration: none">Chương trình khuyến mãi</a>
          <a href="themkhuyenmai.php" class="w3-bar-item w3-button " style="text-decoration: none">Thêm chương trình khuyến mãi</a>

          <a href="danhsachdonhang.php" class="w3-bar-item w3-button " style="text-decoration: none">Danh sách đơn hàng </a>
          <a href="thongketheongay.php" class="w3-bar-item w3-button " style="text-decoration: none">Thống kê theo ngày</a>
          <a href="thongketheothang.php" class="w3-bar-item w3-button " style="text-decoration: none">Thống kê theo tháng</a>


        </div>
      </div>
    </div>
    <div id="main" style="margin-left: 20%">
      <div class="container-fluid" style="background: #333;color: #FFF;padding: 10px 10px;height: 3.5em">
        <div class="row ">
          <div class="col-9 row " >
            <div class="col-1 text-right">
               <button id="openNav" class="btn btn-dark" style="color: white;display: none;padding: 5px 10px;width: 100%;font-size: 1.2em" onclick="w3_open()">&#9776;</button>
            </div>
            <div class="col-11 link" style="display: none;"  id="openNav1">
              <a href="admin.php" class="w3-bar-item w3-button " style="text-decoration: none"> Trang chính</a>
              <a href="cuahang.php" class="w3-bar-item w3-button " style="text-decoration: none">Cửa hàng</a>
              <a href="thongkedanhmuc.php" class="w3-bar-item w3-button " style="text-decoration: none"> Danh mục</a>
              <a href="hanghoa.php" class="w3-bar-item w3-button " style="text-decoration: none"> Hàng hóa</a>
              <a href="khachhang.php" class="w3-bar-item w3-button " style="text-decoration: none"> Khách hàng </a>
              <a href="binhluan.php" class="w3-bar-item w3-button " style="text-decoration: none">Bình luận</a>
              <a href="thongketintuc.php" class="w3-bar-item w3-button " style="text-decoration: none">Tin tức</a>
            </div>
          </div>
         
          
          <div class="col-3 text-right" id="tk" >
            <a href="#"  data-toggle="dropdown" style="text-decoration: none;margin: 0 0 0 0">
              <img src="img/adn.jpg" alt="" style="width: 20%;height: 50%;" class="rounded-circle ">
              <span ><?php echo $_SESSION['ten']; ?></span> 
              <span class="fa fa-sort-down "></span>  
            </a>
            <div class=" dropdown-menu " style="position: absolute;z-index: 5000;">
                <a class="dropdown-item" href="taikhoanadmin.php">Tài khoản của tôi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  href="dangxuat.php">Đăng xuất</a>
                
                
            </div>
          </div>
        </div>
      </div>
      <!--  <div class="col-12"  id="trangchinh">

          <div class="row">
            <div class="col-12" style="background: #F5F5F5">
              <h3>Chào mừng bạn đến với trang quản trị</h3>
              <table class="table table-bordered" style="border-spacing: 50px;border-collapse: separate;">
                <tr>
                  <td rowspan="3"style="background: white ">
                    <img src="img/admin1.jpg" alt="" style="width: 100%">
                  </td>
                  <td style="background: white ">
                    <img src="img/admin2.jpg" alt="">
                  </td>
                </tr>
                <tr>
                  <td style="background: white ">
                    <img src="img/admin3.jpg" alt="">
                  </td>
                </tr>

                <tr>
                  <td style="background: white ">
                    <img src="img/admin4.jpg" alt="">
                  </td>
                </tr>
              </table>
            </div>
          </div>
      </div>   -->
    </div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("main1").style.marginLeft = "20%";
  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
  document.getElementById("openNav1").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("main1").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav1").style.display = "inline-block";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>