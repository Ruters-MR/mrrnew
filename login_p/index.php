<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="branding">
    <h2>VIPER FORCE</h2>
    <h4>SUPERSTAR EDUCTION</h4>
</div>

<div class="container" id="container">

	<div class="form-container sign-up-container">
		<form action="register.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="r_name" required/>
            <input type="text" placeholder="Surname" name="r_sname" required/>
            <input type="text" placeholder="Username" name="r_uname" required/>
			<input type="email" placeholder="Email" name="r_email" required/>
			<input type="password" placeholder="Password" name="r_psw" required/>
			<button type="submit">Sign Up</button>
		</form>
	</div>


	<div class="form-container sign-in-container">
		<form action="login.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Username" name="uname" required />
			<input type="password" placeholder="Password" name="psw" required/>
			<a href="#">Forgot your password?</a>
			<button type="submit">Sign In</button>
		</form>
	</div>


	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>


			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<div class="border-button"><a href="../">BACK TO MAIN</a></div>



  <script  src="./script.js"></script>

</body>
</html>
