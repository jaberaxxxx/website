<?php
		require_once 'includes/header.php';
		require_once "db/conn.php";
?>
		
	<body  class="text-center bg">
		<main class="form-signin">
		
			<form action="home.php" method="post"  >
				<img class="mb-4" src="images/logo1.png" alt="" width="270" height="200">
				<p id="error-msg" class="text-danger" style="display:none;">Email or password error</p>
				
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
	<?php
		require_once 'includes/footer.php';
	?>	
