<?php
include "connectdb.php";
?>
<html>
<head>
<title></title>
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
  <title>LENS ME | Login</title>
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
</header><br>
<div style="margin-left: 22%; margin-right: 22%;">
	<table>
		<center><legend >รายละเอียดการสั่งซื้อ</legend></center>
		<tr class="thead">
			<td >รหัสสินค้า</td>
			<td >ชื่อสินค้า</td>
			<td >ราคา</td>
			<td >จำนวน</td>
			<td >รวมเป็นเงิน</td>
			<td >ลบรายการ</td>
		</tr>
		<?php
		$Total = 0;
		$SumTotal = 0;
		
		for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
		{
			if($_SESSION["strProductID"][$i] != "")
			{
				$strSQL = "SELECT * FROM product WHERE product_id = '".$_SESSION["strProductID"][$i]."' ";
				$objQuery = mysqli_query($connector,$strSQL)  or die(mysql_error());
				$objResult = mysqli_fetch_array($objQuery);
				$Total = $_SESSION["strQty"][$i] * $objResult["price"];
				$SumTotal = $SumTotal + $Total;
				if($i % 2 == 0){?>
					<tr id = "odd"class="tdetail">
						<td><?php echo $_SESSION["strProductID"][$i];?></td>
						<td><?php echo $objResult["name"];?></td>
						<td><?php echo $objResult["price"];?></td>
						<td><?php echo $_SESSION["strQty"][$i];?></td>
						<td><?php echo number_format($Total,2);?></td>
						<td><a href="delete.php?Line=<?php echo $i;?>">ลบสินค้า</a></td>
					</tr>
			<?php
			}else {
				?>
					<tr id = "even"class="tdetail">
						<td><?php echo $_SESSION["strProductID"][$i];?></td>
						<td><?php echo $objResult["name"];?></td>
						<td><?php echo $objResult["price"];?></td>
						<td><?php echo $_SESSION["strQty"][$i];?></td>
						<td><?php echo number_format($Total,2);?></td>
						<td><a href="delete.php?Line=<?php echo $i;?>">ลบสินค้า</a></td>
					</tr>
				<?php
			}
			}
		}
		?>
	</table>
	<p style="text-align: right; font-size: 18px;">เงินรวมทั้งสิ้น <?=number_format($SumTotal,2);?></p>
</div>
<br>
<center><a href="main.php" style="font-size: 18px;">Go to Product</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php" style="font-size: 18px;">CheckOut</a></center>
<?php
	}
?>

</body>
<br><br>
<footer style="background-color :#D3D3D3;"><center>
Copyright © 2017 LENSME |
322236 WEB TECHNOLOGY<br>
Information and Communication Technology<br>
Department of Computer Science, Faculty of Science<br>
Khon Kaen University</center>
</footer>
</html>
