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
    
    <title>Olympus</title>

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

	<div id="headerwrap3">
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
    <a href="order.php?product_id=E M10 Mark III">
    <div class="col-md-4">
    <div class="card">
      <img src="assets/Olympus/Olympus-OM-D-E-M10-Mark-III_1.jpg" alt="Card image cap" style="width: 100%;">
      <div class="card-block" style="text-align: left;">
        <h4 class="card-title">Olympus-OM-D E-M10-Mark-III</h4>
        <b>สเปค Olympus-OM-D E-M10 Mark-III แบบละเอียด</b>
        <ul>
          <li>16.1MP Four Thirds Live MOS Sensor
          <li>Dual Quad-Core TruePic VIII Processor
          <li>UHD 4K30 Recording; Clips Video Mode
          <li>2.36m-Dot 1.23x Electronic Viewfinder
          <li>3.0" 1.04m-Dot Tilting Touchscreen LCD
        <ul>
      </div>
    </div>
    </div>
    </a>
    <a href="order.php?product_id=E-PM2">
  <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="assets/Olympus/e-PM2.jpg" alt="Card image cap" style="width: 100%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Olympus PEN E-PM2</h4>
      <b>สเปค Olympus PEN E-PM2 แบบละเอียด</b>
      <ul>
        <li>ความละเอียดเซ็นเซอร์ 16.1 ล้านพิกเซล
        <li>ถ่ายภาพความเร็วสูงสุดที่ 8 ภาพต่อวินาที
        <li>1080P HD Video Recording
        <li>ISO 200-25600
        <li>มี hot-shoe สำหรับต่อ external flash
      </ul>
      
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=E-PL8">
  <div class="col-md-4">
    <div class="card" style="text-align: left;">
      <img class="card-img-top" src="assets/Olympus/Olympus-PEN-E-PL8_1.jpg" alt="Card image cap" style="width: 100%;">
      <div class="card-block">
        <h4 class="card-title">Olympus PEN E-PL8</h4>
        <b>สเปค Olympus PEN E-PL8 แบบละเอียด</b>
        <ul>
          <li>16.1MP Live MOS Sensor
          <li>TruePic VII Image Processor
          <li>3.0" 1.04m-Dot 180° Flip Touchscreen
          <li>Full HD Video Recording at 30 fps
          <li>Up to 8.5 fps Shooting and ISO 25600
        </ul>
      </div>
    </div>
  </div>
  </a>
  <a href="order.php?product_id=E-M10 Mark II">
  <div class="col-md-4">
    <div class="card">
    <br><br><br>
      <img class="card-img-top" src="assets/Olympus/Olympus-OM-D-E-M10-Mark-II_1.jpg" alt="Card image cap" style="width: 100%;">
      <div class="card-block" style="text-align: left;">
        <h4 class="card-title">Olympus OM-D E-M10 Mark II</h4>
        <b>สเปค Olympus OM-D E-M10 Mark II แบบละเอียด</b>
        <ul>
          <li>MOS, 17.3 x 13.0 mm
          <li>16.1 Megapixel
          <li>Auto, 200-25600 (Extended Mode: Auto, 100-25600)
          <li>Sensor-Shift, 5-Way
          <li>1x BLS-50 Rechargeable Lithium-ion Battery Pack, 7.2 VDC, 1175 mAh
        </ul>
      </div>
    </div>
    </div>
    </a>
    <a href="order.php?product_id=PEN-F">
  <div class="col-md-4">
  <div class="card">
  <br><br><br>
    <img class="card-img-top" src="assets/Olympus/Olympus-PEN-F_1.jpg" alt="Card image cap" style="width: 100%;">
    <div class="card-block" style="text-align: left;">
      <h4 class="card-title">Olympus PEN-F</h4>
      <b>สเปค Olympus PEN-F แบบละเอียด</b>
      <ul>
      <li>CMOS, 17.4 x 13 mm/Micro Four Thirds (2x Crop Factor)
      <li>20.3 Megapixel
      <li>Auto, 200-25600 (Extended Mode: 80-25600)
      <li>Sensor-Shift, 5-Way
      <li>1x BLN-1 Rechargeable Lithium-ion Battery Pack, 7.6 VDC, 1220 mAh
      </ul><br><br> 
    </div>
  </div>
  </div>
  </a>
  <a href="order.php?product_id=E-EM1">
  <div class="col-md-4">
    <div class="card" style="text-align: left;">
      <br><br>
      <img class="card-img-top" src="assets/Olympus/Olympus-OM-D-EM-1_1.jpg" alt="Card image cap" style="width: 100%;">
      <br><br>
      <div class="card-block">
        <h4 class="card-title">Olympus-OM-D E-EM1</h4>
        <b>สเปค Olympus-OM-D E-EM1 แบบละเอียด</b>
        <ul>
        <li>เซ็นเซอร์ 16.3MP Live MOS
        <li>TruePic VII Image Processor 
        <li>ระบบ Micro Four Thirds
        <li>FAST Dual Phase- & Contrast-Detection AF
        <li>Interactive 2,360k-Dot EVF
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

