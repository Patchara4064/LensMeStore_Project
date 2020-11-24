<?php
	session_start();
	$server = "localhost";
	$user	= "root";
	$password	= "";
	$db_name	= "user";
	
	//connect database
	$connector = mysqli_connect($server, $user, $password) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

	//connect table
	mysqli_select_db($connector,$db_name) or die("ไม่สามารถเลือกตารางของฐานข้อมูลได้");
	mysqli_set_charset($connector,'utf-8');
?>