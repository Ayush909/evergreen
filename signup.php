<?php
	include_once 'header.php';
?>

	<section class="container_mainpage">
		<div class="main-wrappe">
			<h2>Sign Up!</h2>
			<form class="signup-form" method="POST" action="includes/signup-inc.php">
				<input type="text" name="first" placeholder="First Name" required><br>
				<input type="text" name="last" placeholder="Last Name" required><br>
				<input type="text" name="username" placeholder="Username" required><br>
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="password" name="pwd" placeholder="Password" required><br>
				<button type="submit" name="submit">SignUp</button>
			</form>
		</div>
	</section>
<?php
	include_once 'footer.php';
?>	
