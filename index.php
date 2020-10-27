<?php
	include_once 'header.php';
?>

	<section class="main-container">
		<div class="main-wrappe">
			<?php 
			
				if (isset($_SESSION['u_id'])) {
					
					header("Location: Catalog.php");
					// echo "<div id='content'>
					// 		<h2>Profile</h2>
					// 		<p id='welcome'>Hey!".$_SESSION['u_first']." ".$_SESSION['u_last']."."."You are logged in!</p>"."
					// 		<img src='ayushpic.jpg'>
					// 		<p class='para'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					// 			<br>
					// 		<p class='para'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					// 		<p class='para'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					// 	</div>";

						
				}else{
				
					echo "<div class='container_mainpage'>
							<h1>Evergreen!</h1>
							<br/>
							<h3>Your one stop for buying plants</h3>
							<br/>
							<div class='buttons_container'>
								<div><a href='signup.php'><button>Register</button></a></div>
							</div>
						</div>";
				}
			?>
		</div>
	</section>
<?php
	include_once 'footer.php';
?>	
