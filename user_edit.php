<!Document HTML>
<?php include "connectdb.php"; ?>
<html>
	<head>
	<meta charset="utf-8" />
		<title>Edit User</title>
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
		<?php
			$sql = "select * from user where user_id='".$_GET['id']."'";
			$query_sql = mysqli_query($connector,$sql);
			
			if($query_sql){
				while ($row = mysqli_fetch_array($query_sql)){
					$user_id = $row['user_id'];
					$user_name = $row['user_name'];
                    $user_pass = $row['user_pass'];
					$user_nick = $row['user_nick'];
					$user_address = $row['user_address'];
					$user_tel = $row['user_tel'];
					$user_email = $row['user_email'];
				}
			}
		?>
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
    <a href="vieworder.php">Order History</a>
		<form method="post" action="user_edit2.php" style="margin-left: 10%;margin-right: 10%;border-style: solid;border-width: 7px; background-image:url(4.jpg); opacity:0.9;filter:alpha(opacity=40); padding-left: 25%;">
			<table>
				<tr>
					<td><input type="hidden" class = "form-control" name="user_id" value="<?php echo $user_id;?>"></td>
				</tr>
				<tr>
					<td>ชื่อ:</td>
					<td><input type="text" class = "form-control" name="user_name" value="<?php echo $user_name;?>"></td>
				</tr>
				<tr>
					<td>รหัสผ่าน:</td>
					<td><input type="password" class = "form-control" name="user_pass" value="<?php echo $user_pass;?>"></td>
				</tr>
                <tr>
					<td>ชื่อเล่น:</td>
					<td><input type="text" class = "form-control" name="user_nick" value="<?php echo $user_nick;?>"></td>
				</tr>
				<tr>
					<td>ที่อยู่:</td>
					<td><input type="text" class = "form-control" name="user_address" value="<?php echo $user_address;?>"></td>
				</tr>
				<tr>
					<td>เบอร์โทร:</td>
					<td><input type="text" class = "form-control" name="user_tel" value="<?php echo $user_tel;?>"></td>
				</tr>
				<tr>
					<td>อีเมล์:</td>
					<td><input type="text" class = "form-control" name="user_email" value="<?php echo $user_email;?>"></td>
				</tr>
			</table>
			<input type="submit" value="Save" style="margin-left: 20%; margin-bottom: 3%;">
			<br>
		</form>
	</body>
	</center><br><br><br>
			<footer style="background-color :#D3D3D3;"><center>
Copyright © 2017 LENSME |
322236 WEB TECHNOLOGY<br>
Information and Communication Technology<br>
Department of Computer Science, Faculty of Science<br>
Khon Kaen University</center>
</footer>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
			
</html>