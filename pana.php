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
    
    <title>Panasonic</title>

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

	<div id="headerwrap4">
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
    <a href="order.php?product_id=TZ90">
    <div class="col-md-4">
      <div class="card">
        <img src="assets/pana/TZ90.jpg" alt="Card image cap" style="width: 70%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">Panasonic TZ90</h4>
          <b>สเปค Panasonic TZ90 แบบละเอียด</b>
          <ul>
            <li> เซนเซอร์ MOS ขนาด 1 / 2.3 "20.3MP
            <li>Leica DC Vario-Elmar เลนส์ซูม 30x
  
            <li>24-720 มม. (เทียบเท่า 35 มม.)
          <li>1.166m-Dot Live View Finder
          <li>หน้าจอสัมผัสแบบสัมผัส 3.0 "1.04m-Dot
          <li>บันทึกวิดีโอ UHD 4K ที่ 30p
          <li>5-Axis HYBRID O.I.S.
          <li>ISO 6400 และถ่ายภาพได้สูงสุด 10 ภาพต่อวินาที
          <li>โหมดถ่ายภาพ 4K
          <li>Focus Stacking และ Post Focus
          </ul>
          
        </div>
      </div>
      </div>
      <a>
      <a href="order.php?product_id=GH5">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/pana/GH5.jpg" alt="Card image cap" style="width: 70%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">Panasonic GH5</h4>
          <b>สเปค Panasonic GH5 แบบละเอียด</b>
          <ul>
            <li> เซนเซอร์ Live MOS แบบดิจิตอลขนาด 20.3MP
        <li>ตัวประมวลผลภาพของ Venus Engine
        <li>วิดีโอ 4K ที่ไม่มีการครอบตัด
        <li>ภายใน 4: 2: 2 วิดีโอ 10KB 10 บิตที่ 24 / 30p
        <li>ระบบป้องกันเซ็นเซอร์ 5 แกน; Dual I.S. 2
        <li>ช่องมองภาพ OLED ขนาด 0.76x 3.68m-Dot
        <li>หน้าจอระบบสัมผัส 3.2 "1.62m-Dot Free-Angle
        <li>ระบบ DFD AF ขั้นสูง; 6K และ 4K Photo
        <li>ISO 25600 และ 12 ต่อวินาทีต่อเนื่อง
        <li>2 สล็อต UHS-II SD ; Wi-Fi และบลูทูธ
          </ul>
          
        </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=GF9">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/pana/GF9.jpg" alt="Card image cap" style="width: 93%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">Panasonic GF9</h4>
          <b>สเปค Panasonic GF9 แบบละเอียด</b>
          <ul>
            <li> ซนเซอร์ขนาด Four Third ความละเอียด 16 ล้านพิกเซล แบบไม่มี Low-pass Filter
  <li> ชิปประมวลผล Venus Engine
  <li> ISO 200-25600(ลดเพิ่มได้ถึง 100)
  <li> ระบบ AF แบบ Contrast Detect จำนวน 49 จุด
  <li> มีระบบ Depth from Defocus ช่วยให้โฟกัสเร็ว
  <li> ถ่ายภาพต่อเนื่อง 5.8 ภาพต่อวินาที
  <li> ความเร็วชัตเตอร์สูงสุดแบบกลไก 1/500 วินาที
  <li> ความเร็วชัตเตอร์สูงสุดแบบอิเล็กทรอนิกส์ 1/16000 วินาที
  
  <li> บันทึกวิดีโอความละเอียด 4K 3840x2160 เฟรมเรต 24/25/30fps ฟอร์แมต MP4
  <li> ฟีเจอร์ใหม่ 4K Selfie และ 4K Panorama
  <li> มี Wi-Fi ในตัวเชื่อมต่อมือถือเพื่อส่งภาพและสั่งถ่ายภาพได้
  
          </ul>
          
        </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=GF8">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/pana/GF8.jpg" alt="Card image cap" style="width: 100%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">Panasonic GF8</h4>
          <b>สเปค Panasonic GF8 แบบละเอียด</b>
          <ul>
          <li>  เซนเซอร์ Live MOS ขนาด Four Third ความละเอียด 16 ล้านพิกเซล
  <li>ชิปประมวลผล Venus Engine
  <li>ISO 200-25600 ขายายได้ถึง ISO 100
  <li>ระบบโฟกัส Contrast Detection 23 จุด มี Face/Eye Detection AF และ Low Light AF
  <li>ระบบโฟกัสรองรับ 240fps (กล้องและเลนส์จะส่งข้อมูลระหว่างกันเพื่อประมาวลผลด้วยความเร็ว 240 ภาพต่อวินาที)
  <li>ถ่ายภาพต่อเนื่อง 5.8 ภาพต่อวินาที(AFS) 5 ภาพต่อวินาที(AFC, 1 Area AF) 4 ภาพต่อวินาที(AF Tracking)
  <li>ความเร็วชัตเตอร์แบบกลไก 1/500 วินาที
  <li>ความเร็วชัตเตอร์อิเล็กทรอนิกส์ 1/16000 วินาที
  <li>ความเร็วชัตเตอร์ Flash X Sync 1/50 วินาที
  <li>มี Wi-Fi ในตัว (IEEE 802.11 b/g/n)
          </ul>
          
        </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=GX8">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/pana/GX8.jpg" alt="Card image cap" style="width: 100%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">Panasonic GX8</h4>
          <b>สเปค Panasonic GX8 แบบละเอียด</b>
          <ul>
           <li> เซนเซอร์ Live MOS ขนาด Four Third ความละเอียด 20.3 ล้านพิกเซล
  <li>ชิประมวลผล Venus Engine ตัวใหม่(Quad-core CPU)
  <li>ISO 200-25600(ขยายลงได้ ISO100)
  <li>ระบบกันสั่น Dual I.S. ทำงานประสานระหว่างกันสั่นในเลนส์และที่เซนเซอร์
  <li>ระบบโฟกัส Contrast Detection 49 จุดทำงานในสภาพแสงน้อยได้ถึง -4EV
  <li>มีระบบ DFD (Depth From Defocus) โฟกัสได้เร็วภายใน 0.07 วินาที
  <li>รองรับการส่งสัญญาณจากเลนส์ไปให้กล้องประมวลผลได้ที่ความเร็ว 240 ภาพต่อวินาที(ช่วยเรื่องความเร็วโฟกัส)
  <li>ถ่ายภาพต่อเนื่อง 8 ภาพต่อวินาที(AF-S)และ 6 ภาพต่อวินาที(AF-C)
  
  <li>Flash Sync Speed 1/250 วินาที
  <li>มี Wi-Fi ในตัว(IEEE 802.11 b/g/n)และ NFC
  <li>ถ่ายวิดีโอ 4K 3840x2160 ที่ 24, 30fps
          </ul>
          
        </div>
      </div>
      </div>
      </a>
      <a href="order.php?product_id=LX100">
     <div class="col-md-4">
      <div class="card">
        <img src="assets/pana/LX100.jpg" alt="Card image cap" style="width: 100%;">
        <div class="card-block" style="text-align: left;">
          <h4 class="card-title">Panasonic LX100</h4>
          <b>สเปค Panasonic LX100 แบบละเอียด</b>
          <ul>
            <li> เซนเซอร์ Four Third ความละเอียด 16 ล้านพิกเซล(ใช้จริงได้สูงสุด 12.8 ล้านพิกเซล)
  <li>เซนเซอร์เป็นแบบ Multi-aspect ratio ให้องศาการรับภาพที่เหมือนกันทั้ง 4:3, 3:2, 16:9
  <li>ชิพประมวลผล Venus Engine ตัวเดียวกับ GH4 และ FZ1000
  <li>ISO 200-25600(ขยายได้ถึง 100-25600)
  <li>เลนส์ 24-75mm f/1.7-2.8 รูปรับแสง 9 กลีบ
  <li>ความเร็วชัตเตอร์สูงสุด 1/16000 วินาที(Electronic)
  <li>ความเร็วถ่ายภาพต่อเนื่อง 11 ภาพต่อวินาที(6.5 ภาพต่อวินาทีพร้อม C-AF)
  <li>จอแสดงผลขนาด 3.0" ความละเอียด 921,000 พิกเซล
  <li>ช่องมองภาพ EVF ความละเอียด 2,764,000 พิกเซล ครอบคลุมการมองเห็น 100% อัตราส่วน 16:9
  <li>มีฟีเจอร์ Depth from Defocus
  
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

