<?php
	include_once 'header.php';
?>

	<section class="container_mainpage">
		<div class="main-wrappe">
			<h2>Sign Up!</h2>
			<form class="signup-form" method="POST" action="includes/signup-inc.php">
				<input 
					type="text" 
					name="first" 
					id="first"
					placeholder="First Name" 
					pattern="^[a-zA-Z]{5,20}$"
					title="First name should be alphabets only and 5-20 chars long."
					required
					onchange = "validateform(this.value,this.name)"
				><br/>
				<input 
					type="text" 
					name="last" 
					id="last"
					placeholder="Last Name" 
					pattern="^[a-zA-Z]{5,20}$"
					title="Last name should be alphabets only and 5-20 chars long."
					onchange = "validateform(this.value,this.name)"
					required
				><br/>
				<input 
					type="text" 
					name="username" 
					id="username"
					placeholder="Username"
					pattern="^[a-zA-Z0-9]{5,20}$" 
					title ="username should be alphanumeric only and 5-20 chars long."
					onchange = "validateform(this.value,this.name)"
					required
				><br/>
				<input 
					type="email" 
					name="email"
					id="email" 
					placeholder="Email"
					onchange = "validateform(this.value,this.name)" 
					required
				><br/>
				<input 
					type="password" 
					name="pwd" 
					id="pwd"
					placeholder="Password"
					pattern="^(?=.*[a-z])^(?=.*[A-Z])^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,25}$"
					title="Password should be alphanumeric with one special character(`!@#$%^&*`) and 8-25 chars long."
					onchange = "validateform(this.value,this.name)" 
					required
				><br/>
				<button type="submit" name="submit" >SignUp</button>
			</form>
		</div>
	</section>
	<script>
		
		const validateform = (value,name) => {
				const patterns = {
					first : /^[a-zA-Z]{5,20}$/,
					last : /^[a-zA-Z]{5,20}$/,
					username : /^[a-zA-Z0-9]{5,20}$/,
					email : /^([a-zA-Z0-9_\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
					pwd : /^(?=.*[a-z])^(?=.*[A-Z])^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,25}$/,
				}
				const errorMsg = {
					first : "First name should be alphabets only and 5-20 chars long.",
					last : "Last name should be alphabets only and 5-20 chars long.",
					username : "username should be alphanumeric only and 5-20 chars long.",
					email : "Email is invalid.",
					pwd : "Password should be alphanumeric with one special character(`!@#$%^&*`) and 8-25 chars long.",
				}
				//console.log(patterns[`${name}`])

				if( !patterns[`${name}`].test(value)){
					alert(errorMsg[`${name}`])
					document.getElementById(name).style.borderBottomColor = "red";
				}else{
					document.getElementById(name).style.borderBottomColor = "";
				}
				
			}

		 
		

	</script>
<?php
	include_once 'footer.php';
?>	
