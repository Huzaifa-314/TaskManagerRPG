<?php include '../include/connection.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
  <link href="signin.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="back">
			<img class="work" src="../img/dice.png">
  </div>
	<div class="box">
		<form autocomplete="off" method="POST" action="../core/session.php">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="email" name="email" required="required">
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="pass" required="required">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="forgetpass.php">Forgot Password ?</a>
				<a href="signup.php">Signup</a>
			</div>
			<input type="submit" name="login" value="Login">
		</form>
	</div>

	<?php ob_end_flush(); ?>
</body>
</html>