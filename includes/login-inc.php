<?php

	session_start();

if (isset($_POST['submit'])) {
	include 'dbconnect.php';

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	if (empty($username) || empty($pwd)) {
		header("Location: ../index.php?login=fields-empty");
		exit();
	}else{
		//Check credentials provided
		$sql = "SELECT * FROM users WHERE username='$username' OR user_email = '$username' ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}else{
			 if ($row = mysqli_fetch_assoc($result)) {
			 	//DeHashing the password
			 	$hashedpwdCheck = password_verify($pwd, $row['user_pwd']);
			 	if ($hashedpwdCheck == false) {
			 		header("Location: ../index.php?login=error");
					exit();
			 	}else if($hashedpwdCheck == true){
			 		//log in the user
			 		$_SESSION['u_id']= $row['userID'];
			 		$_SESSION['u_first']= $row['user_first'];
			 		$_SESSION['u_last']= $row['user_last'];
			 		$_SESSION['u_email']= $row['user_email'];
			 		$_SESSION['u_username']= $row['username'];
			 		header("Location: ../index.php?login=success");
					exit();
			 	}
			 }
		}
	}
}else{
		header("Location: ../index.php?login=error");
		exit();
}