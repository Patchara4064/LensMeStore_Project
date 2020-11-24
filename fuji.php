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
li.scroll:hover {
    background-color: #101010;
  }
  </style>
   
  </head>

  <body>

    <!-- Static navbar -->
    <!-- Static navbar -->
	<!-- Static navbar -->

	<div id="headerwrap1">
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
  <a href="order.php?product_id=X-30">
  <div class="col-md-4">
    <div class="card">
      <img src="assets/Fuji/X30/X30-1.jpg" alt="Card image cap" style="width: 100%;">
      <div class="card-block" style="text-align: left;">
        <h4 class="card-title">Fuji X30</h4>
        <b>สเปค Fujifilm X-30 แบบละเอียด</b>
        <ul>
          <li>16.3 megapixel APS-C CMOS
          <li>iso 200-6400 (ขยายได้ 100-25600)
          <li>โฟกัส 49 จุด พร้อม Face Detection และ Eye Detection
          <li>ระบบวัดแสง 256 Zone
          <li>Sync Flash Speed 1/180
          <li>วิดิโอ Full HD 30 Fps
          <li>ถ่ายได้ต่อเนื่อง 6 ภาพต่อวินาที (สูงสุด 20 ภาพ)
          <li>Speed Shutter ความเร็วสูงสุด 1/32000 วินาที
          <li>Film Simulation 6 แบบ (Provia/Standard, Velvia/Vivid, Astia/Soft, Classic Chrome, Mono Chrome)
          <li>Advances Filter
          <li>Wi-Fi สามารถใช้งานรีโมทได้ผ่านแอพ
          <li>แบตเตอรี่รุ่นใหม่ NP-W12P ใช้ได้ 410 ภาพ ต่อการชาร์จ 1 ครั้ง
          <li>น้ำหนัก 331 กรัม รวมน้ำหนักแบตและ Memory
          <li>ใช้ SD Card ความเร็ว UHS-I
        </ul>
        
      </div>
    </div>
    </div>
    </a>
    <a href="order.php?product_id=X-100F">
  <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="assets/Fuji/X100F/X100F.1.jpg" alt="Card image cap" style="width: 100%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Fuji X100F</h4>
      <b>สเปค Fujifilm X100F แบบละเอียด</b>
      <ul>
        <li>เซ็นเซอร์ X-Trans CMOS III รุ่นใหม่ความละเอียด 24.3 Megapixel
        <li>เลนส์ Fix แบบไม่สามารถถอดเปลี่ยนได้ ระยะ 23mm f/2 หรือเทียบเท่าเลนส์ 35 มม. เหมือนเดิม
        <li>เพิ่ม AF Joystick
        <li>X-Processor Pro แบบเดียวกับ X-T2 ทำงานเร็วขึ้น
        <li>จุดโฟกัสเพิ่มเป็น 91 จุด จากเดิม 49 จุด โฟกัสได้ภายใน 0.08 วินาที
        <li>จุดโฟกัส 325 จุด เทคโนโลยี intelligent hybrid phase
        <li> รองรับการถ่ายวิดีโอ Full HD 60 fps
        <li>ถ่ายภาพต่อเนื่อง 8 เฟรมต่อวินาที
        <li>เพิ่ม Film Simulation สีใหม่ ACROS
        <li>ช่องมองภาพแบบ Hybrid ที่สามารถซูมภาพได้
        <br><br><br><br><br>
      </ul>
      
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=X-A2">
  <div class="col-md-4">
    <div class="card" style="text-align: left;">
      <img class="card-img-top" src="assets/Fuji/X-A2/Fuji-X-A2-1.jpg" alt="Card image cap" style="width: 100%;">
      <div class="card-block">
        <h4 class="card-title">Fuji X-A2</h4>
        <b>สเปค Fujifilm X-A2 แบบละเอียด</b>
        <ul>
          <li>16.3MP APS-C CMOS Sensor</li>
          <li>ประมวลผล EXR II</li>
          <li>จอแอลซีดี3.0" 920k-Dot ปรับเอียง 175 °</li>
          <li>การบันทึกวิดีโอ HD 1080p ฟูลไทม์ 30 เฟรมต่อวินาที</li>
          <li>เชื่อมต่อBuilt-In Wi-Fi</li>
          <li>Eye AFAuto Macro AF, Multi-Target AF</li>
          <li>Up to 5.6 fps Shooting and ISO 25600</li>
          <li>Q ปุ่มเมนูและซูเปอร์ไอแฟลช</li>
          <li>Film Simulation and Multiple Exposure</li>
          <li>เลนส์ Fujinon XC 16-50mm f/3.5-5.6 OIS II</li>
          <br><br><br><br><br><br><br><br><br>
        </ul>
      </div>
    </div>
  </div>
  </a>
  <a href="order.php?product_id=X-A3">
  <div class="col-md-4">
    <div class="card">
      <img src="assets/Fuji/X-A3/Fuji-xa3.1.jpg" alt="Card image cap" style="width: 90%;">
      <div class="card-block" style="text-align: left;">
        <h4 class="card-title">Fuji X-A3</h4>
        <b>สเปค Fujifilm X-A3 แบบละเอียด</b>
        <ul>
          <li>แฟลชรุ่นใหม่ฉลาดกว่าเดิม มีระยะที่กว้างขึ้น ทำให้ดูเนียนตามากขึ้น
          <li>ชัดเตอร์ความเร็วสูงถึง 1/3200 ทำให้เวลาใช้รูรับกว้างกว้างๆ ในเวลากลางวัน ไม่ต้องใช้ ND ช่วยในการลดแสง
          <li>AF + MF ได้พร้อมกัน โดยเมื่อเรากดโฟกัส เราสามารถหมุนโฟกัสได้ต่อ หากกล้องไม่ได้โฟกัสในที่จุดที่เราต้องการ
          <li>ถ่าย Panorama 360 องศาได้
          <li>โฟกัส 77 จุด (49 เมื่อใช้แบบจุด) สามารถเลือกได้เป็นจุด เป็นโชน และ ทั่วทั้งภาพ
          <li>วิดิโอ Full HD 60 fps พร้อมชอร์ฟแวร์ป้องกันการสั่นไหว เทียบได้กับกันสั่น 5 แกน
        </ul>
      </div>
    </div>
    </div>
    </a>
    <a href="order.php?product_id=X-A10">
  <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="assets/Fuji/X-A10/X-A10-2.jpg" alt="Card image cap" style="width: 93%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Fuji X-A10</h4>
      <b>สเปค Fujifilm X-A10 แบบละเอียด</b>
      <ul>
      <li>16.3MP APS-C CMOS Sensor
      </li><li>180° Slide-and-Tilt LCD Monitor
      </li><li>Full HD 1080p Video Recording
      </li><li>Eye Detection AF and Portrait Enhancer
      </li><li>XC 16-50mm f/3.5-5.6 OIS II Lens</li>
      </ul>
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=X-Pro2">
  <div class="col-md-4">
    <div class="card" style="text-align: left;">
      <br>
      <img class="card-img-top" src="assets/Fuji/X-Pro2/Fujifilm-X-Pro2-1.jpg" alt="Card image cap" style="width: 100%;">
      <br><br>
      <div class="card-block">
        <h4 class="card-title">Fuji X-Pro2</h4>
        <b>สเปค Fujifilm X-Pro2 แบบละเอียด</b>
        <ul>
          <li>24.3MP APS-C X-Trans CMOS III Sensor</li>
          <li>X-Processor Pro Engine</li>
          <li>Advanced Hybrid Multi Viewfinder</li>
          <li>3.0" 1.62m-Dot LCD Monitor</li>
          <li>Full HD 1080p Video Recording at 60 fps</li>
          <li>Built-In Wi-Fi, SHARE Printer Compatible</li>
          <li>273-Point AF with 77 Phase-Detect Points</li>
          <li>Up to 8 fps Shooting and ISO 51200</li>
          <li>Weather-Sealed Design, 2x SD Card Slots</li>
          <li>Film Simulation and Grain Effect Modes</li>
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

