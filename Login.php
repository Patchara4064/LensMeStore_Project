<?php
	include "connectdb.php";
	if(!empty($_POST)){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = mysqli_query($connector,"Select * from user where user_name ='".$user."' and user_pass ='".$pass."'");
		$num = mysqli_num_rows($sql);
		
		if($num >0){
			while($row = mysqli_fetch_array($sql)){
				$userid = $row['user_id'];
				$nick 	= $row['user_nick'];
				
				session_start();
				$_SESSION['id'] = $userid;
				$_SESSION['nick'] = $nick;
				
				header('Location: main.php');
			}
		}else{
			$msg = "รหัสผ่านไม่ถูกต้อง";
			echo"<script type='text/javascript'>alert('$msg');</script>";
		}
		
	}
?>
<!Document HTML>
<html>
	<head>	
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
  <title>LENS ME | Login</title>
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
</header><br><br><br><br>

		<center><form method="POST">
	<fieldset  style="margin-left: 10%;margin-right: 10%;border-style: solid;border-width: 15px;background-image:url(4.jpg);">
			<table  >
				<tr>
					<td colspan="5" style="text-allign: center;"><br><h2><center><b>Login</b></center></h2></td>
				</tr>
				<tr>
					<center><td ><b>User : </b><td>
					<td><input type="text" name="user" placeholder="Username" style="width: 90%;color:#2F4F4F;opacity:0.6;filter:alpha(opacity=40)"></td></center>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<center><td><b>Pass : </b><td>
					<td><input type="password" name="pass" placeholder="Password" style="width: 90%;color:#2F4F4F;opacity:0.6;filter:alpha(opacity=40)"></td></center>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<center><br><td colspan="4" style="text-allign: center;"><input type="submit" value="OK" style="width:275px;background-color:#b2b1ad ;color:#FFFFFF;opacity:0.8;filter:alpha(opacity=40)"></td></center>
				</tr>
				
			</table>
			<br><br><br><br><br><br>
			</fieldset>
		</form>
		</center>
	
		<br><br><br><br>
		<footer style="background-color :#D3D3D3;"><center>
Copyright © 2017 LENSME |
322236 WEB APPLICATION<br>
Information and Communication Technology<br>
Department of Computer Science, Faculty of Science<br>
Khon Kaen University</center>
</footer>
	</body>
</html>
			