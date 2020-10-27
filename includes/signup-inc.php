<?php 

if (isset($_POST['submit'])) {
	
	include_once('dbconnect.php');
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	//Error Handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($username) || empty($email) || empty($pwd) ) {
		header("Location: ../signup.php?signup=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
			header("Location: ../signup.php?signup=wrong-inputs");
			exit();
		}else{
			//Check validity of Email
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=invalid-email");
				exit();
			}else{
				$sql = "SELECT * FROM users WHERE username='$username' ";
				$result  = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=username-taken");
					exit();
				}else{
					//Hashing the password
					$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first,user_last,user_email,username,user_pwd) VALUES('$first','$last','$email','$username','$hashedpwd');";
					mysqli_query($conn,$sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}

}else{
	header("Location: ../signup.php");
	exit();
}