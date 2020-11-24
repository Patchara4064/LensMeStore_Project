<?php
    include "connectdb.php";
    if(!empty($_POST)){
		    $user=$_POST['user'];
        $pass=$_POST['pass'];
        $nick=$_POST['nick'];
        $address=$_POST['address'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
		
    $sql = "insert into user (user_name,user_pass,user_nick,user_address,user_tel,user_email) 
            VALUES ('".$user."','".$pass."','".$nick."','".$address."','".$tel."','".$email."')";
		$query = mysqli_query($connector,$sql);
		if($query){
			echo "บันทึกข้อมูลสำเร็จ<br/>";
			header('Location: main.php');
		}else{
			echo "ไม่สามารถบันทึกข้อมูลได้ [  ".' '.$sql.' '."]";
			echo "<a href='main.php'>กลับ</a>";
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

		<center><form method="POST" >
	<fieldset  style="margin-left: 10%;margin-right: 10%;border-style: solid;border-width: 7px; background-image:url(4.jpg); opacity:0.9;filter:alpha(opacity=40)">
			<table  >
				<tr>
					<td colspan="1" style="text-allign: center;"><h2><center>Register</center></h2></td>
				</tr>
				<tr>
					<td><b>Username :</b><td>
					<td><input type="text" class="form-control" name="user" placeholder="Username" style="width: 150%;border: 1px #b2b1ad solid;background: #fcfaf2 "></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td><b>Password :</b><td>
					<td><input type="password" class="form-control" name="pass" placeholder="Password" style="width: 150%;border: 1px #b2b1ad solid;background: #fcfaf2 "></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td><b>Nickname :<b><td>
					<td><input type="text" class="form-control" name="nick" placeholder="Nickname" style="width: 150%;border: 1px #b2b1ad solid;background: #fcfaf2 "></td>
				</tr>
        <tr>
					<td><br></td>
				</tr>
				<tr>
					<td><b>Address :<b><td>
					<td><input type="text" class="form-control" name="address" placeholder="Address" style="width: 150%;border: 1px #b2b1ad solid;background: #fcfaf2 "></td>
				</tr>
        <tr>
					<td><br></td>
				</tr>
        <tr>
					<td><b>Tel. :<b><td>
					<td><input type="text" class="form-control" name="tel" placeholder="tel" style="width: 150%;border: 1px #b2b1ad solid;background: #fcfaf2 "></td>
				</tr>
        <tr>
					<td><br></td>
				</tr>
        <tr>
					<td><b>Email :<b><td>
					<td><input type="email" class="form-control" name="email" placeholder="email" style="width: 150%;border: 1px #b2b1ad solid;background: #fcfaf2 "></td>
				</tr>
        <tr>
					<td><br></td>
				</tr>
				<tr>
					<br><td colspan="8" style="text-allign: center;"> 
					<button type="submit" value="Save" class="btn btn-primary" style="width:95px;opacity:0.8;filter:alpha(opacity=40);"  >Submit</button>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <a href="main.php"><button type="exit" class="btn btn-primary" style="width:95px;opacity:0.8;filter:alpha(opacity=40);";  >Exit</button></a></td>
				</tr>
				
			</table>
			<br><br><br>
			</fieldset>
			
		</form>
		</center><br><br><br>
			<footer style="background-color :#D3D3D3;"><center>
Copyright © 2017 LENSME |
322236 WEB APPLICATION<br>
Information and Communication Technology<br>
Department of Computer Science, Faculty of Science<br>
Khon Kaen University</center>
</footer>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
			