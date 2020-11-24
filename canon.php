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
    
    <title>CANON</title>

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

	<div id="headerwrap2">
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
    <div class="container">
      <div class="row"> 
    <div class="card-deck">
    <a href="order.php?product_id=Eos 800D">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/cannon/800d.jpg" alt="Card image cap" style="width: 70%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">CANON Eos 800D</h4>
          <b>สเปค CANON Eos 800D แบบละเอียด</b>
          <ul>
            <li> เซนเซอร์ CMOS APS-C ซีรี่ส์ 24.2MP
  <li> ตัวประมวลผลภาพ DIGIC 7
  <li>หน้าจอระบบสัมผัส 3.0 นิ้ว "1.04m-Dot Vari-Angle
  <li> การบันทึกวิดีโอ Full HD 1080p ที่ 60 fps
  <li> ระบบตรวจจับระยะไกลแบบ Cross-Type ทั้งหมด 45 จุด
  <li> Dual Pixel CMOS AF
  <li> ถ่ายภาพได้สูงสุด 6 ภาพต่อวินาทีและ ISO 51200
  <li>Built-In Wi-Fi พร้อม NFC, Bluetooth
  <li> ภาพยนตร์ HDR และภาพยนตร์ไทม์สกรีน
  <li> เลนส์ EF-S 18-55 มม. f / 4-5.6 IS STM
          </ul>
          
        </div>
      </div></div>
      </a>
    <a href="order.php?product_id=Eos 6D">
    <div class="col-md-4">
      <div class="card">
        <img src="assets/cannon/6d.png" alt="Card image cap" style="width: 80%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">CANON Eos 6D </h4>
          <b>สเปค CANON Eos 6D แบบละเอียด</b>
          <ul>
            <li>เซ็นเซอร์ CMOS Full-Frame 26.2MP
  <li> ตัวประมวลผลภาพ DIGIC 7
  <li> ระบบออโต้โฟกัสแบบ 45-point All-Cross
  <li> วิดีโอ Full HD ที่ 60 เฟรมต่อวินาที; Digital IS
  <li> จอภาพสัมผัสหน้าจอสัมผัสขนาด 3 นิ้ว "1.04 มม."
  <li> Dual Pixel CMOS AF และ Movie Servo AF
  <li>Native ISO 40000 ขยายเป็น ISO 102400
  <li> การถ่ายภาพต่อเนื่อง 6.5 เฟรมต่อวินาที; ภาพยนตร์ไทม์และภาพยนตร์ HDR
  <li>Built-In GPS, Bluetooth และ Wi-Fi กับ NFC
  <li> ป้องกันฝุ่นและน้ำ ช่องใส่การ์ด SD
  
          </ul>
          <br><br><br><br>
        </div>
      </div>
      </div></div>
      </a>
      <a href="order.php?product_id=Eos 6D MarkII">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/cannon/6d.jpg" alt="Card image cap" style="width: 70%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">CANON Eos 6D MarkII</h4>
          <b>สเปค CANON Eos 6D MarkII แบบละเอียด</b>
          <ul>
            <li>เซ็นเซอร์ CMOS Full-Frame 26.2MP
  <li> ตัวประมวลผลภาพ DIGIC 7
  <li> ระบบออโต้โฟกัสแบบ 45-point All-Cross
  <li> วิดีโอ Full HD ที่ 60 เฟรมต่อวินาที; Digital IS
  <li> จอภาพสัมผัสหน้าจอสัมผัสขนาด 3 นิ้ว "1.04 มม."
  <li>Dual Pixel CMOS AF และ Movie Servo AF
  <li> Native ISO 40000 ขยายเป็น ISO 102400
  <li> การถ่ายภาพต่อเนื่อง 6.5 เฟรมต่อวินาที; ภาพยนตร์ไทม์และภาพยนตร์ HDR
  <li> Built-In GPS, Bluetooth และ Wi-Fi กับ NFC
  <li>ป้องกันฝุ่นและน้ำ ช่องใส่การ์ด SD
          </ul>
          
        </div>
      </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=EOS M6">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/cannon/M6.jpg" alt="Card image cap" style="width: 70%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">CANON M6</h4>
          <b>สเปค CANON M6 แบบละเอียด</b>
          <ul>
            <li>เซนเซอร์ CMOS APS-C ซีรี่ส์ 24.2MP
  <li>ตัวประมวลผลภาพ DIGIC 7
  <li> 3.0 "1.04m-Dot Tilting หน้าจอสัมผัส LCD
  <li> การบันทึกวิดีโอ Full HD 1080p ที่ 60 เฟรมต่อวินาที
  <li> Built-In Wi-Fi พร้อม NFC, Bluetooth
  <li> Dual Pixel CMOS AF
  <li> ถ่ายภาพได้สูงสุด 9 ภาพต่อวินาทีและ ISO 25600
  <li> การสั่นไหวของภาพ 5 แกน
  <li>เลนส์ EF-M 18-150mm f/3.5-6.3 IS STM
          </ul>
          
        </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=Eos 750D">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/cannon/750.jpg" alt="Card image cap" style="width: 79%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">CANON Eos 750D</h4>
          <b>สเปค CANON Eos 750D แบบละเอียด</b>
          <ul>
            <li>24.2MP APS-C CMOS Sensor
  <li>DIGIC 6 Image Processor
  <li>3.0 "1.04M จุด Touchscreen Vari-Angle
  <li>บันทึกวิดีโอ Full HD 1080p
  <li>19-Point ทั้งหมด cross-type ระบบออโต้โฟกัส
  <li>5 fps Shooting & Extended ISO to 25600
  <li>ไฮบริด CMOS AF III และ EOS Scene Analysis
  <li>Creative Filters
  <li>Built-In Wi-Fi เชื่อมต่อกับเอ็นเอฟซี
  <li>CS100 Connect Station Support
          </ul>
          
        </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=Eos 70D">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/cannon/70d.jpg" alt="Card image cap" style="width: 94%;">
        
        <div class="card-block" style="text-align: left;"><br>
          <h4 class="card-title">CANON Eos 70D</h4>
          <b>สเปค CANON Eos 70D แบบละเอียด</b>
          <ul>
            <li> เซ็นเซอร์ APS-C Dual Pixel CMOS AF ความละเอียด 20.2 ล้านพิกเซล
  <li>ชิพประมวลผล DIGIC 5+
  <li>ISO 100-12800 ขยายได้ถึง 25600
  <li>ถ่ายภาพต่อเนื่อง 7 ภาพต่อวินาที (JPEG 65 ภาพ/RAW 16 ภาพ)
  <li>เซ็นเซอร์ Autofocus มีจุด AF 19 จุด เป็น Cross-type ทั้งหมด
  <li>เซ็นเซอร์วัดแสง iFCL 63 โซน
  <li>ช่องมองภาพครอบคลุมการมองเห็น 98%
  <li>จอแสดงผลปรับหมุนได้(หมุนได้แบบเดียวกับ 60D)
  <li>จอแสดงผล Touchscreen ขนาด 3.0" ความละเอียด 1,040,000 พิกเซล
  <li>มี Wi-Fi ในตัว
  <li>แฟลชหัวกล้องสามารถสั่งงานแฟลชไร้สายได้
  <li>ถ่าย Video Full HD 1080p 30fps
          </ul>
          <br><br>
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

