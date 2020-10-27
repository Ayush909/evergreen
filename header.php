<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="styles/Shopping.css">
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="index.php">EverGreen</a></li>
				</ul>
				<div class="nav-login">
					<?php 
						if (isset($_SESSION['u_id'])) {
							echo '<form action="logout-inc.php" method="POST">
									<button type="submit" name="submit">Logout</button>
								  </form>';	  
						}else{
							echo '<form action="includes/login-inc.php" method="POST" >
									<input type="text" name="username" placeholder="Username/E-mail">
									<input type="password" name="pwd" placeholder="Password">
									<button type="submit" name="submit">Login</button>
								  </form>';
								
						}
					?>					
				</div>
			</div>
		</nav>
	</header>