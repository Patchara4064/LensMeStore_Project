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
    
    <title>Nikon</title>

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

	<div id="headerwrap">
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
  <a href="order.php?product_id=D610">
  <div class="col-md-4">
  <div class="card">
    <img src="assets/Nikon/D610/Nikon-D610-1.jpg" alt="Card image cap" style="width: 100%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Nikon D610</h4>
      <b>สเปค Nikon D610 แบบละเอียด</b>
      <ul>
        <li>24.3MP Full-frame เซ็นเซอร์ CMOS ( 10.5MP DX-format crop mode)
        <li>ISO 100-6400 ( ขยายได้ถึง ISO 50-25,600 เท่า)
        <li>ถ่ายภาพต่อเนื่องสูงสุด 6fps ใหม่ โหมดเงียบ ถ่ายอย่างต่อเนื่อง shoots at 3 fps
        <li>ออโต้โฟกัส 39 จุด 9 cross-type AF points
        <li>white balance อัตโนมัติ ระบบปรับสมดุล
        <li>Wireless flash
        <li>หน้าจอ แอลซีดี 3.2in 921K จุด
        <li>ช่องเสียบการ์ด หน่วยความจำ แบบ Dual
        <li>วิดีโอ full HD 1080p30
        <li>การบันทึกวิดีโอ การบีบอัด ผ่าน HDMI
      <ul>
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=D750">
<div class="col-md-4">
<div class="card">
  <img class="card-img-top" src="assets/Nikon/D750/Nikon-D750-1.jpg" alt="Card image cap" style="width: 100%;">
  <div class="card-block" style="text-align: left;">
    <h4 class="card-title">Nikon D750</h4>
    <b>สเปค Nikon D750 แบบละเอียด</b>
    <ul>
      <li>เซนเซอร์ CMOS APS-C ความละเอียด 24.1 ล้านพิกเซล(ไม่มี low-pass filter)
      <li>ชิพประมวลผล EXPEED 3
      <li>ISO100-6400 และขยายได้ถึง 25600
      <li>ถ่ายภาพต่อเนื่องความเร็วสูงสุด 7 ภาพต่อวินาที(ในโหมด crop 1.3x)
      <li>จุดโฟกัส 51 จุด cross-type 15 จุด ที่ใช้เทคโนโลยีเทียบเท่า D4
      <li>เซนเซอร์วัดแสง 2,016 พิกเซล
      <li>ช่องมองภาพครอบคลุมการมองเห็นได้ 100%
      <li>บอดี้แมกนีเซียมอัลลอยด์(เฉพาะด้านบนและด้านหลัง)
      <li>ซีลกันฝุ่นและละอองน้ำ
      <li>เซนเซอร์วัดระดับน้ำสามารถแสดงผลตามการพลิกของกล้อง
      <li>จอแสดงผลขนาด 3.2" ความละเอียด 1,229,000 พิกเซล (แบบไม่มีช่องว่างระหว่างหน้าจอและกระจก)
    </ul>
    
  </div>
</div>
</div>
</a>
<a href="order.php?product_id=D810">
<div class="col-md-4">
  <div class="card" style="text-align: left;">
    <img class="card-img-top" src="assets/Nikon/D810/Nikon-D810_1.jpg" alt="Card image cap" style="width: 74%;">
    <div class="card-block">
      <h4 class="card-title">Nikon D810</h4>
      <b>สเปค Nikon D810 แบบละเอียด</b>
      <ul>
        <li>เซ็นเซอร์ภาพ CMOS รูปแบบ FX ใหม่จาก Nikon ให้ภาพที่คมชัดน่าทึ่งด้วยจำนวนพิกเซลใช้งานจริง 36.3 ล้านพิกเซลพร้อมช่วงไดนามิกกว้างตั้งแต่มาตรฐาน ISO 64 ถึง 12800
        <li>ระบบประมวลผลภาพ EXPEED 4 ทำให้ได้ภาพความละเอียดสูงที่มีความคมชัดมากขึ้น สีส่วนรวมที่สมบูรณ์ การปรับปรุงคุณภาพสีที่แม่นยำ 
        <li>ระบบ Picture Control แบบใหม่ได้เพิ่มตัวเลือก Flat การตั้งค่าความชัด 
        <li>รองรับการถ่ายไฟล์ sRAW (เป็นไฟล์ RAW แบบที่มีขนาดเล็ก)
        <li>ปรับปรุงประสิทธิภาพด้านวิดีโอให้ดีขึ้น
        <li>พัฒนาระบบ Autofocus เหมือนกับใน D4s
        <li>เพิ่มประสิทธิภาพด้านการถ่ายในที่ปแสงน้อย(ประสิทธิภาพด้าน ISO ดีขึ้น 1 stop)
        <li>มี GPS ในตัว
        <li>ไม่มี Wi-Fi ในตัว
      </ul>
    </div>
  </div>
</div>
</a>
<a href="order.php?product_id=D3400">
<div class="col-md-4">
  <div class="card">
  <br><br><br>
    <img src="assets/Nikon/D3400/Nikon-D3400-1.jpg" alt="Card image cap" style="width: 90%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Nikon D3400</h4>
      <b>สเปค Nikon D3400 แบบละเอียด</b>
      <ul>
        <li>24.2MP DX-Format CMOS Sensor
        <li>EXPEED 4 Image Processor
        <li>No Optical Low-Pass Filter
        <li>Native ISO 100-25600; 5 fps Shooting
        <li>3.0" 921k-Dot LCD Monitor
        <li>Full HD 1080p Video Recording at 60 fps
        <li>Multi-CAM 1000 11-Point AF System
        <li>SnapBridge Bluetooth Connectivity
        <li>Guide Mode and Special Effects
        <li>AF-P DX 18-55mm f/3.5-5.6G VR Lens
      </ul>
    </div>
  </div>
  </div>
</a>
<a href="order.php?product_id=D5300">
<div class="col-md-4">
<div class="card">
<br><br><br>
  <img class="card-img-top" src="assets/Nikon/D5300/Nikon-D5300-1.jpg" alt="Card image cap" style="width: 91%;">
  <div class="card-block" style="text-align: left;">
    <h4 class="card-title">Nikon D5300</h4>
    <b>สเปค Nikon D5300 แบบละเอียด</b>
    <ul>
    <li>เซนเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล ไม่มี OLPF
    <li>ชิพประมวลผลรุ่นใหม่ Expeed 4
    <li>ISO 100-12800(ขยายได้ถึง 25600)
    <li>ถ่ายภาพต่อเนื่อง 5 fps
    <li>จุดโฟกัส 39 จุดเป็น cross-type 9 จุด
    <li>เซนเซอร์วัดแสง 2,016 พิกเซล
    <li>จอแสดงผลแบบปรับหมุนได้(Vari-angle)ขนาด 3.2" ความละเอียด 1,037,000 พิกเซล
    <li>ถ่าย Video Full HD 1080p60 และมี Stereo Microphone ในตัว
    <li>มี Wi-Fi, GPS ในตัว
    <li>ชุดคิท Nikon D5300+AF-S DX NIKKOR 18-140mm f/3.5-5.6G ED VR ราคา $1,399.95 หรือราวๆ 44,000-45,000 บาท
    <li>มี 3 สีให้เลือกคือ สีดำ สีเทา และสีแดง
    </ul>
  </div>
</div>
</div>
</a>
<a href="order.php?product_id=D5500">
<div class="col-md-4">
  <div class="card" style="text-align: left;">
    <br>
    <img class="card-img-top" src="assets/Nikon/D5500/Nikon-D5500-3.jpg" alt="Card image cap" style="width: 100%;">
    <br><br>
    <div class="card-block">
      <h4 class="card-title">Nikon D5500</h4>
      <b>สเปค Nikon D5500 แบบละเอียด</b>
      <ul>
      <li>ความละเอียด 24.2MP DX Format CMOS Sensor
      <li>หน่วยประมวลผลภาพ EXPEED 4
      <li>ไม่มี Low-Pass Filter
      <li>3.2" 1,037k-Dot Vari-Angle Touchscreen
      <li>การบันทึกวิดีโอ HD 1080p Recording at 60 fps
      <li>Built-In Wi-Fi
      <li>ถ่ายภาพต่อเนื่องได้ถึง 5 เฟรมต่อวินาที
      <li>39-Point Multi-CAM 4800DX AF Sensor
      <li>Native Sensitivity to ISO 25600
      </ul>
    </div>
  </div>
  
</div>
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

