<?php
    include "connectdb.php";
	if(isset($_POST)){
		$user_id = $_POST['user_id'];
		$user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];
		$user_nick = $_POST['user_nick'];
		$user_address = $_POST['user_address'];
		$user_tel = $_POST['user_tel'];
		$user_email = $_POST['user_email'];

		$sql_update = "update user set user_name = '".$user_name."',user_pass='".$user_pass."',user_nick= '".$user_nick."',user_address = '".$user_address."',
						user_tel = '".$user_tel."',user_email = '".$user_email."' where user_id = $user_id";
        $query_sql = mysqli_query($connector,$sql_update);
		if($query_sql){
			echo "แก้ไขข้อมูลสำเร็จ<br/>";
            echo "<a href='main.php'>กลับ</a>";
            $_SESSION['user_id'] = $user_id;
            $_SESSION['nick'] = $user_nick;
            header("Location: main.php");
		}else{
			echo "ไม่สามารถแก้ไขข้อมูลได้".$query_sql;
			echo "<a href='main.php'>กลับ</a>";
		}
	}
?>