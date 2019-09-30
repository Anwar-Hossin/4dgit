<!DOCTYPE html>
<html>
<head>
	<title>function class</title>
	<style type="text/css">

		*{
			margin: 0 auto;
			padding: 0 auto;
		}

		body{
			width: 100%;
	 		height: 100%;
	 		position: fixed;
	 		color: white;
		}

		.container{
	 		background-image: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
	 		background-repeat: no-repeat; 
	 		background-size: cover;
	 		width: 100%;
	 		height: 100%;
	 		text-align: center;
	 	}

	</style>
</head>
<body>
	<div class="container">

		<!-- <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" style="padding:20px 0 20px 0;">
	 		<input name="name" placeholder="enter the text">
	 		<input name="name1" placeholder="enter the terget">
	 		<input name="name2" placeholder="enter the replace word">
	 		<input type="submit" value="submit">
	 	</form> -->

	 	<!-- <?php

	 	$GLOBALS['text'] = $_POST['name'];
	 	$GLOBALS['text1'] = $_POST['name1'];
	 	$GLOBALS['text2'] = $_POST['name2'];

	 	function replace(){

	 		$replace_result = str_replace($GLOBALS['text1'] , $GLOBALS['text2'], $GLOBALS['text']);
			echo $replace_result;
	 	}

	 	replace();

		?> -->

		<!-- <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" style="padding:20px 0 20px 0;">
	 		<input name="name" placeholder="enter the text">
	 		<input name="number" placeholder="enter the repeat number">
	 		<input type="submit" value="submit">
	 	</form>

	 	<?php

	 	$GLOBALS['text'] = $_POST['name']."<br>";
	 	$GLOBALS['number'] = $_POST['number'];

	 	function repeat(){

	 		$replace_result = str_repeat($GLOBALS['text'] , $GLOBALS['number']);
			echo $replace_result;
	 	}

	 	repeat();

		?> -->

		<!-- <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" style="padding:20px 0 20px 0;">
	 		<input name="password" placeholder="enter the password">
	 		<input type="submit" value="submit">
	 	</form>

	 	<?php

	 	$GLOBALS['password'] = $_POST['password']."<br>";

	 	echo "Before encript the password = ".$password."<br>";

	 	function encript(){

	 		$encrption = md5($GLOBALS['password']);
			echo "After encript the password = ".$encrption;
	 	}

	 	encript();

		?> -->

		<input style="width: 400px;" name="date" value="<?php
        
			date_default_timezone_set('Asia/Dhaka');
			                                
			$current_time = time();
			                                
			$dateTime = strftime("D d-m-Y   h:i:s:a", $current_time);
			                                
			echo date($dateTime);
			                                
			?>"
		>

	</div>

</body>
</html>