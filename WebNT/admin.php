<?php include("menuadmin.php") ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
  <?php 
    $connect=mysqli_connect("localhost","root","","noithat");
   
  ?>

    <!--thống kê số lượng sản phẩm của từng danh mục -->
    <?php 
      $sql_hanghoa="SELECT iddanhmuc, COUNT(1) as sosp FROM hanghoa GROUP BY iddanhmuc HAVING COUNT(1) > 0";
      $ketqua_hanghoa=mysqli_query($connect,$sql_hanghoa);
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['danhmuc', 'Sosanpham'],
          <?php  
            while ($row_hanghoa=mysqli_fetch_assoc($ketqua_hanghoa)) {
              $sql_danhmuc="SELECT tendanhmuc FROM danhmuc WHERE id=".$row_hanghoa['iddanhmuc'];
              $ketqua_danhmuc=mysqli_query($connect,$sql_danhmuc);
              $row_danhmuc=mysqli_fetch_assoc($ketqua_danhmuc);
          ?>
          ['<?php echo $row_danhmuc['tendanhmuc']; ?>', <?php echo $row_hanghoa['sosp'] ?>],
          <?php 
            }
          ?>
        ]);

        var options = {
          title: 'Số lượng hàng hóa của các danh mục '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


    </script>

    <!--thống kê số lượng đánh giá theo sao -->
    <?php 
      $sql_danhgia="SELECT danhgia, COUNT(1) as dem FROM danhgia GROUP BY danhgia HAVING COUNT(1) > 0";
      $ketqua_danhgia=mysqli_query($connect,$sql_danhgia);
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['danhgia', 'soluongdanhgia'],
          <?php  
            while ($row_danhgia=mysqli_fetch_assoc($ketqua_danhgia)) {
          ?>
          ['<?php echo $row_danhgia['danhgia']; ?> Sao',  <?php echo $row_danhgia['dem']; ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Thống kê đánh giá'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }

      
    </script>

</head>
<body style="background: #F5F5F5">
	
      <div id="main1" style="margin-left: 20%">
       <div class="col-12"  id="trangchinh">

          <div class="row">
            <div class="col-12" >
              <h3>Chào mừng bạn đến với trang quản trị</h3>
              <table class="table  table-borderless"  style="border-spacing: 20px;border-collapse: separate;height: 600px">
                <tr>
                  <td  style="background: white " width="50%" height="30%">
                    <?php 
                      $sql_doanhthu="SELECT CURDATE() as ngayht,SUM(tongtien) AS tongtien FROM donhang WHERE ngay=CURDATE()GROUP BY ngayht";
                      $ketqua_doanhthu=mysqli_query($connect,$sql_doanhthu);
                      $row_doanhthu=mysqli_fetch_assoc($ketqua_doanhthu);

                      $sql_donhang="SELECT DAY(NOW()) as month,COUNT(id) as dem, SUM(tongsanpham) as tongsp FROM donhang WHERE DAY(ngay)= DAY(NOW()) GROUP BY DAY(NOW()) HAVING COUNT(id) > 0";
                      $ketqua_donhang=mysqli_query($connect,$sql_donhang);
                      $row_donhang=mysqli_fetch_assoc($ketqua_donhang);
                    ?>
                    <h4>Doanh thu hôm nay: <?php if(isset($row_doanhthu['tongtien']))echo number_format($row_doanhthu['tongtien']); else echo 0;?> VND</h4><hr>
                    <h4>Số lượng đơn hàng: <?php if(isset($row_donhang['dem'])) echo $row_donhang['dem']; else echo 0; ?> đơn hàng</h4><hr>
                    <h4>Số lượng sản phẩm bán được: <?php if(isset($row_donhang['tongsp']))echo number_format($row_donhang['tongsp']); else echo 0?> sản phẩm</h4><hr>
                  </td>
                  <td style="background: white " width="50%">
                    <?php  
                      $sql_sodanhgia="SELECT COUNT(id) as sodanhgia FROM danhgia WHERE DAY(ngay)=DAY(NOW())";
                      $ketqua_sodanhgia=mysqli_query($connect,$sql_sodanhgia);
                      $row_sodanhgia=mysqli_fetch_assoc($ketqua_sodanhgia);

                      $sql_binhluan="SELECT COUNT(id) as slbinhluan FROM binhluan WHERE DAY(thoigian)=DAY(NOW())";
                      $ketqua_binhluan=mysqli_query($connect,$sql_binhluan);
                      $row_binhluan=mysqli_fetch_assoc($ketqua_binhluan);

                      $sql_khachhang="SELECT count(id) AS slkh FROM taikhoan WHERE vaitro='khach'";
                      $ketqua_khachhang=mysqli_query($connect,$sql_khachhang);
                      $row_khachhang=mysqli_fetch_assoc($ketqua_khachhang);

                    ?>
                    <h4>Số lượng đánh giá hôm nay: <?php echo $row_sodanhgia['sodanhgia']; ?> đánh giá</h4><hr>
                    <h4>Số lượng bình luận: <?php echo $row_binhluan['slbinhluan']; ?> bình luận</h4><hr>
                    <h4>Số lượng khách hàng: <?php echo $row_khachhang['slkh']; ?> khách hàng</h4><hr>
                   <!--  <h4>Số lượng khách hàng truy cập</h4><hr> -->
                  </td>
                  
                </tr>
                <tr>
                  <td  style="background: white "width="50%" height="70%">
                    <div id="piechart" style="width: 100%; height: 100%;"></div>

                  </td>
                  <td style="background: white "width="50%">
                    <div id="piechart1" style="width: 100%; height: 100%;"></div>
                  </td>
               
                  
              </table>
            </div>
          </div>
      </div>  
    </div>

</body>
</html>