<?php include("menuadmin.php") ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thống kê theo tháng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
  }
  }
  body{
  font-size: 20px;
  font-family: serif;
    }
 
 </style>
  <?php 
    $connect=mysqli_connect("localhost","root","","noithat");
   
    
  ?>
  <!--thống kê doanh thu -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month.year', 'Doanh thu',],
          <?php  
          
          $thang=0;
          while($thang<13){
            
            $sql_donhang="SELECT (MONTH(ngay)) AS month,(YEAR(ngay)) AS year, SUM(tongtien) AS gia FROM donhang WHERE (MONTH(ngay)) = $thang  and YEAR(ngay)=2021 GROUP BY MONTH(ngay)";
            $ketqua_donhang=mysqli_query($connect,$sql_donhang);
            if ( mysqli_num_rows($ketqua_donhang) < 1 ){
            ?>
            ['<?php echo $thang; ?>', 0],
            <?php 
            }
            else {
              $row_donhang=mysqli_fetch_assoc($ketqua_donhang); 
            ?>
              ['<?php echo $row_donhang['month']; ?>',<?php echo $row_donhang['gia']; ?>],

            <?php
              }
              $thang+=1;
            }
            ?>
          ]);
        var options = {
          title: 'Thống kê doanh thu theo tháng của năm 2021',
          hAxis: {title: 'Tháng',  titleTextStyle: {color: '#333'}},
          vAxis: {title: 'Đơn vị tiền tệ: VND',minValue: 0 }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

    </script>
  <!--thống kê số lượng đơn hàng --> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month', 'Số lượng đơn hàng','Số lượng hàng bán được'],
          <?php  
          
            $thang=0;
            while($thang<13){
              
              $sql_donhang="SELECT MONTH(ngay) as month,COUNT(1) as dem, SUM(tongsanpham) as tong FROM donhang WHERE MONTH(ngay)=$thang and YEAR(ngay)=2021 GROUP BY MONTH(ngay) HAVING COUNT(1) > 0";
              $ketqua_donhang=mysqli_query($connect,$sql_donhang);
              if ( mysqli_num_rows($ketqua_donhang) < 1 ){
              ?>
              ['<?php echo $thang; ?>', 0,0],
              <?php 
              }
              else {
                $row_donhang=mysqli_fetch_assoc($ketqua_donhang); 
              ?>
                ['<?php echo $row_donhang['month']; ?>',<?php echo $row_donhang['tong']; ?>,<?php echo $row_donhang['dem']; ?>],

              <?php
                }
                $thang+=1;
              }
            ?>
          ]);
        var options = {
          title: 'Thống kê đơn hàng theo tháng của năm 2021',
          hAxis: {title: 'Tháng',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0 }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
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
                  <td  style="background: white " width="60%" height="50%">
                    <div id="chart_div" style="width: 100%; height: 100%;"></div>
                  </td>
                  
                </tr>
                <tr>
                  <td style="background: white "width="60%" height="50%">
                     <div id="chart_div1" style="width: 100%; height: 100%;"></div>
                  </td>
                 
               
                  
              </table>
            </div>
          </div>
      </div>  
    </div>

</body>
</html>