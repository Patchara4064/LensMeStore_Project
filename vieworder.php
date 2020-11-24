<?php include "connectdb.php"; ?>
<html>
<head>
<title>Your Order</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="gallery/blueimp-gallery.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='maincss.css' rel='stylesheet' type='text/css'>
  <style>
		table {
			margin-left: auto;
			margin-right: auto;
			border-collapse: collapse;
			border: 2px solid white;
			margin-bottom: 2%;
		}
		tr td {
			border: 2px solid white;
		}
		td {
			width: 130px;
			height: 40px;
		}
		.thead {
			text-align: center;
			border-bottom: 4px solid black;
			background-color : #0080FF;
			color: white;
		}
		.tdetail {
			text-align: center;
		}
		#odd {
			background-color: whitesmoke;
		}
		#even {
			background-color: white;
		}
	</style>
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
</div>
</head>
<?
    
    $sql = mysqli_query($connector,'select * from user where user_nick = "'.$_SESSION['nick'].'"');
    $num = mysqli_num_rows($sql);
    $n = 1; 
    while($row = mysqli_fetch_array($sql)){
    $user_id =  $row['user_id'];
    $n++;
    }
    $strSQL = "SELECT * FROM orders WHERE user_id = '".$user_id."'";
    $objQuery = mysqli_query($connector,$strSQL)  or die(mysql_error());
    ?>
    <br>
    <table border="1">
    <tr class="thead">
      <td >ลำดับที่</td>
      <td >หมายเลขคำสั่งซื้อ</td>
      <td >วันที่สั่งซื้อ</td>
    </tr>
    <?php
        $n = 1;
    while($row = mysqli_fetch_array($objQuery)){
        $order_id = $row['order_id'];
        $orderdate = $row['orderdate'];
        ?>
        <?php if($n % 2 == 0){ ?>
        <tr id ="odd"class="tdetail">
            <td><? echo $n;?></td>
            <td><a href="vieworderdetail.php?order_id=<? echo $order_id ; ?>"><? echo $order_id;?></a></td>
            <td><? echo $orderdate;?></td>
        </tr>
        <?php }else{ ?>
            <tr id ="even"class="tdetail">
            <td><? echo $n;?></td>
            <td><a href="vieworderdetail.php?order_id=<? echo $order_id ; ?>"><? echo $order_id;?></a></td>
            <td><? echo $orderdate;?></td>
        </tr>
    <?php 
        }
        $n++;
    }
    
?></table>
<footer style="background-color :#D3D3D3;"><center>
Copyright © 2017 LENSME |
322236 WEB TECHNOLOGY<br>
Information and Communication Technology<br>
Department of Computer Science, Faculty of Science<br>
Khon Kaen University</center>
</footer>
</body>

</html>