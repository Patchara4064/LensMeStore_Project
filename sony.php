<!DOCTYPE html>
<?php 
      include "connectdb.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    
    <title>Sony</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/css/bootstrap.css" rel="stylesheet">
  <link href="css/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="animate/animate.css" />
  <link rel="stylesheet" href="animate/set.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
	<link type="text/css/jquery" rel="stylesheet" href="src.js">
	<link type="text/css/jquery" rel="stylesheet" href="nav.js">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="gallery/blueimp-gallery.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
  
    li.scroll:hover {
    background-color: #101010;
  }
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f4f2f2;
      padding: 25px;
    }
	#bordview {
		border: 2px solid grey;
	}
	div.stars {

		width: 270px;

		display: inline-block;
	}
	input.star { display: none; }
	label.star {

  float: right;

  padding: 10px;

  font-size: 36px;

  color: #444;

  transition: all .2s;

}

 

input.star:checked ~ label.star:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

 

input.star-5:checked ~ label.star:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

 

input.star-1:checked ~ label.star:before { color: #F62; }

 

label.star:hover { transform: rotate(-15deg) scale(1.3); }

 

label.star:before {

  content: '\f006';

  font-family: FontAwesome;

}
  </style>
   
  </head>

  <body>

    <!-- Static navbar -->
    <!-- Static navbar -->
	<!-- Static navbar -->

	<div id="headerwrap5">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4></h4>
					<h1></h1>
					<h4></h4>
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/headerwrap -->
	<div class="main-nav" class="navbar navbar-default" id="mainnav">
	 
	  	
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main.php">
            <h1><img class="img-responsives" src="logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="main.php">HOME</a></li>
            <li class="scroll"><a href="main.php">PRODUCTS</a></li>
            <li class="scroll"><a href="main.php">ABOUT US</a></li>                     
            <?php 
                  if(!empty($_SESSION['id'])){
                      $sql = mysqli_query($connector,'select * from user where user_nick = "'.$_SESSION['nick'].'"');
                      $num = mysqli_num_rows($sql);
                      $n = 1; 
                      while($row = mysqli_fetch_array($sql)){
                        $user_id =  $row['user_id'];
                        $n++;
                      }   
                      echo '<li class="scroll"><a href="user_edit.php?id='.$user_id.'">Hi '.$_SESSION['nick'].'</a></li>'; 
                      echo '<li class="scroll"><a href="logout.php">Logout</a></li>'; 
                    }else{
                      echo '<li class="scroll"><a href="Login.php">LOGIN</a></li>';
                      echo '<li class="scroll"><a href="register.php">Register</a></li>';
                    }
             ?>     
          </ul>
        </div>
      </div>
    </div>
    <center><h1>PRODUCTS</h1><center>
    <div class="container" style="margin-bottom: 5%;">
      <div class="row"> 
    <div class="card-deck">
    <a href="order.php?product_id=A7">
    <div class="col-md-4">
    <div class="card">
                    <br><br><br>
      <img src="assets/Sony/A7/ZA7BEAUTY-L.jpg" alt="Card image cap" style="width: 90%; margin-bottom: 3%;">
      <div class="card-block" style="text-align: left;">
        <h4 class="card-title">Sony A7</h4>
        <b>สเปค Sony A7 แบบละเอียด</b>
        <ul>
          <li>เซนเซอร์ Exmor CMOS แบบฟูลเฟรม 24.3MP
          <li>ระบบ BIONZ X เพื่อการแสดงรายละเอียดและการลดสัญญาณรบกวนอย่างเหนือชั้น
          <li>ถระบบเลนส์ E-Mount แบบเปลี่ยนได้
          <li>XGA OLED Tru-Finder™ ให้ความเปรียบต่างและความละเอียดสูง
        <ul>
      </div>
    </div>
    </div>
    </a>
    <a href="order.php?product_id=A7 II">
  <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="assets/Sony/A7 ii/Sony-Alpha-a7II_2.jpg" alt="Card image cap" style="width: 100%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Sony A7 II</h4>
      <b>สเปค Sony A7 II แบบละเอียด</b>
      <ul>
        <li>เซนเซอร์ Exmor™ CMOS ฟูลเฟรม 35 มม. (35.8 x 23.9 มม.)
        <li>จำนวนพิกเซล 24.3MP
        <li>ISO 50-25600
        <li>ช่องมองภาพอิเล็กทรอนิกส์ (สี) 0.5"-type
        <li>TFT LCD 3.0" type
      </ul>
      
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=A9">
  <div class="col-md-4">
    <div class="card" style="text-align: left;">
      <img class="card-img-top" src="assets/Sony/A9/a9.jpg" alt="Card image cap" style="width: 100%;">
      <div class="card-block">
        <h4 class="card-title">Sony A9</h4>
        <b>สเปค Sony A9 แบบละเอียด</b>
        <ul>
          <li>เซนเซอร์ Exmor RS CMOS ฟูลเฟรม 35 มม. 
          <li>24.2 ล้านพิกเซล
          <li>ชัตเตอร์กลไก: ISO 100-51200
          <li>ช่องมองภาพอิเล็กทรอนิกส์ (สี) 1.3 ซม. (0.5 type), Quad-VGA OLED
          <li>TFT ชนิด 7.5 ซม. (3.0-type)
        </ul>
      </div>
    </div>
  </div>
  </a>
  <a href="order.php?product_id=A5000">
  <div class="col-md-4">
    <div class="card">
    <br>
      <img class="card-img-top" src="assets/Sony/A5000/a5000.png" alt="Card image cap" style="width: 100%;">
      <div class="card-block" style="text-align: left;">
        <h4 class="card-title">Sony A5000</h4>
        <b>สเปค Sony A5000 แบบละเอียด</b>
        <ul>
          <li>เซนเซอร์ "Exmor™" APS HD CMOS ชนิด APS-C 
          <li>20.1 ล้านพิกเซล
          <li>ภาพนิ่ง: เทียบเท่า ISO 100-16000, AUTO (ISO 100-16000, เลือกขีดจำกัดบน/ล่างได้)
          <li>หน้าจอ LCD ปรับเอียงได้ 180° รองรับการถ่ายภาพตนเองที่สมบูรณ์แบบ
          <li>ระบบ BIONZ X™ เพื่อการแสดงรายละเอียดและการลดสัญญาณรบกวนอย่างเหนือชั้น
        </ul>
      </div>
    </div>
    </div>
    </a>
    <a href="order.php?product_id=A5100">
  <div class="col-md-4">
  <div class="card">
  <br>
    <img class="card-img-top" src="assets/Sony/A5100/Z-SONY-A5100-BEAUTY-L.jpg" alt="Card image cap" style="width: 90%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Sony A5100</h4>
      <b>สเปค Sony A5100 แบบละเอียด</b>
      <ul>
      <li>24.3MP แบบ APS-C Exmor HD CMOS Sensor
      <li>BIONZ X Image Processor
      <li>Gapless On-Chip Lens Design
      <li>จอสัมผัส ปรับเอียงหน้า จอแอลซีดี 3.0 "921.6k-Dot
      <li>Full HD 1080p วิดีโอใน XAVC S ที่ 50Mbps
      </ul>
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=A6500">
  <div class="col-md-4">
    <div class="card" style="text-align: left;">
      <br>
      <img class="card-img-top" src="assets/Sony/A6500/SonyA6500_1-1000x600.jpg" alt="Card image cap" style="width: 96%;">
      <br>
      <div class="card-block">
        <h4 class="card-title">Sony A6500</h4>
        <b>สเปค Sony A6500 แบบละเอียด</b>
        <ul>
        <li>24.2MP APS-C Exmor CMOS Sensor
        <li>BIONZ X Image Processor
        <li>XGA Tru-Finder 2.36m-Dot OLED EVF
        <li>3.0" 921.6k-Dot Tilting Touchscreen LCD
        <li>Internal UHD 4K Video & S-Log3 Gamma
        </ul>
      </div>
    </div>
  </div>
  </a>
</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<script>
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 600);
    return false;
});
</script>
<script>
$(document).ready(function() {
  var navpos = $('#mainnav').offset();
  console.log(navpos.top);
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > navpos.top) {
       $('#mainnav').addClass('navbar-fixed-top');
       }
       else {
         $('#mainnav').removeClass('navbar-fixed-top');
       }
    });
});
</script>

