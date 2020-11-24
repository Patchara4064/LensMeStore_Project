<!DOCTYPE html>
<html lang="en">
<head>
  <title>LENS ME | IMAGINE YOUR LIFE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
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
  <?php include "connectdb.php";?>


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="gallery/blueimp-gallery.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='maincss.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1><b>LENsME CAMERA STORE</b></h1> 
		<b>EVERY SHOT IS MEMORY</b>
    <p>NIKON  •&nbsp;&nbsp;&nbsp;&nbsp;CANON  •&nbsp;&nbsp;&nbsp;&nbsp;PANASONIC •&nbsp;&nbsp;&nbsp;&nbsp;OLYMPUS  •&nbsp;&nbsp;&nbsp;&nbsp;SONY  •&nbsp;&nbsp;&nbsp;&nbsp;FUJIFILM</p> 
  </div>
</div>



<header id="home">
	  
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
            <li class="scroll"><a href="#home">HOME</a></li>
            <li class="scroll"><a href="#works">PRODUCTS</a></li> 
            <li class="scroll"><a href="#team">ABOUT US</a></li>                     
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
    

</div>
		<!--/#main-nav-->
</header><br><br><br><br>
<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>IMAGINE YOUR LIFE</h2>
          <p>EVERY SHOT IS MEMORY</p>
        </div>
  <br><br><br><br><!--/#home-->
<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="img/1.jpg" alt="img01"/>
        <figcaption>
        <h2><font color ="white">NIKON</font></h2>
            <p>AT THE HEART OF THE IMAGE<br>
            <a href="nikon.php" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="img/2.jpg" alt="img01"/>
        <figcaption>
           <h2><font color ="white">CANON</font></h2>
            <p>DELIGHTING YOU ALWAYS<br>
            <a href="canon.php" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="img/3.jpg" alt="img01"/>
        <figcaption>
           <h2><font color ="white">PANASONIC</font></h2>
            <p>IDEAS FOR LIFE<br>
            <a href="pana.php" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="img/4.jpg" alt="img01"/>
        <figcaption>
            <h2><font color ="white">FUJIFILM</font></h2>
            <p>VALUE FROM INNOVATION<br>
            <a href="fuji.php" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="img/5.jpg" alt="img01"/>
        <figcaption>
            <h2><font color ="white">OLYMPUS</font></h2>
            <p>YOUR VISION OUR FUTURE<br>
            <a href="olympus.php" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="img/6.jpg" alt="img01"/>
        <figcaption>
            <h2><font color ="white">SONY</font></h2>
            <p>MAKE BELIEVE<br>
            <a href="sony.php" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
</div><br><br><br><br><br><br>
<section id="team" >
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>ABOUT US</h2>
          <p>EVERY SHOT IS MEMORY</p>
        </div>
      </div>
<div class="container">
    <div class="row">
          <div class="col-sm-3">
              <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="member-image">
                  <img class="img-responsive" src="team/1.jpg" alt="">
                </div>
              <div class="member-info">
                <h3>MR.CHODSUKASEAM PIMPANIT</h3>
                <h4>WEB DEVERLOPER</h4>
                <p>583020389-8</p>
              </div>
              </div>
			    </div>
			  
			  
      
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="team/2.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>MR.PATCHARA PAUNGSIRI</h3>
                <h4>WEB DEVERLOPER</h4>
                <p>583020406-4</p>
              </div>
			      </div>
			    </div>
			
   
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="team/3.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>MR.PEERADON WIPHUSITSOMBOON</h3>
                <h4>WEB DEVERLOPER</h4>
                <p>583020408-0</p>
              </div>
			      </div>
			    </div>
			
  
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="team/4.png" alt="">
              </div>
              <div class="member-info">
                <h3>MR.PAKDEE PIMKE</h3>
                <h4>WEB DESIGNER</h4>
                <p>583020409-8</p>
              </div>
			      </div>
			    </div>
    </div>              
          

          
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="team/Tom.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>MR.SARAWUT KAEOWANDEE</h3>
                <h4>WEB DESIGNER</h4>
                <p>583020415-3</p>
              </div>
			      </div>
			    </div>

          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img src="team/nooknick.jpg" alt="" style="width: 105%; border-radius: 80%;height: 255px;">
              </div>
              <div class="member-info">
                <h3>MRS.SOAWALAK SEENAHA</h3>
                <h4>WEB DEVELOPER</h4>
                <p>583021153-2</p>
              </div>
			      </div>
			    </div>
        </div>
</div>
</section>
<footer><center>
Copyright © 2017 LENSME |
322236 WEB TECHNOLOGY<br>
Information and Communication Technology<br>
Department of Computer Science, Faculty of Science<br>
Khon Kaen University</center>
</footer>
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
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>