<?php
include ("Restrict.php");

?>



<!-- ข้างบน คือ ที่ ต่อ database ในชื่อ Admin ที่ทำ  Restrict -->
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Admin:Ginmun_Delivery</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css.css">
  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    
    <nav id="scrollingNav" class="navbar navbar-inverse navbar-fixed-top" role= "navigation">
<div class="container">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"   >Admin | Ginmun_Delivery</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href="upload.php">อัพโหลดสินค้า</a></li>
        <li><a href="#">รายการอาหารในร้าน</a></li>
          <li><a href="#">ตารางการสั่งอาหาร</a></li>
            <li><a href="#">รับออเดอร์</a></li>
            <li><a href="<?php echo $logoutAction ?>">logout</a></li>  <!-- /ตรงนี้คือ  logout database >
        
      </ul>
    </div><! /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<br><br><br><br><br><br><br><br><br>

<div class="container">
<div class="row">
      <div class="col-md-6">
      <img src="image/icon5.png" style="width:228px;height:228px;" >
      </div>
  <div class="col-md-6">
<br><br><br>
 
   <h1>ยินดีต้อนรับ: Admin </h1>

</div>
</div>
</div>









</body></html>