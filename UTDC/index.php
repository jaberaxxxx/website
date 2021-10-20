<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Signin</title>
	<meta name="theme-color" content="#7952b3">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/signin.css" rel="stylesheet">
	<style>
		.bg{
			background-image: url('images/b2.jpg');
			height: inherit;
  			background-repeat: no-repeat;
  			background-size: cover;
			background-position: center;
			top: 10px;
		}
	</style>
	</head>

	<body  class="text-center bg">
		<?php
			require_once "db/conn.php";
		?>
		<main class="form-signin ">
		
			<form action="home.php" method="post"  >
				<img class="mb-4" src="images/logo1.png" alt="" width="270" height="200">
				
				<p class="error-msg" style="display:none;">Email or password error</p>
				<div class="form-floating">
					<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
					<label for="email">Email address</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					<label for="password">Password</label>
				</div>
					<button class="w-100 btn btn-lg btn-primary mt-1 mb-2" name="submit" type="submit">Sign in</button>
					<p class="mt-3 mb-3 text-muted">Don't have an account? <a href="signup.php" style="text-decoration:none;">Sign up</a></p>
			</form>
		</main>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
