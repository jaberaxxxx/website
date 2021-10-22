<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>signup</title>
	<meta name="theme-color" content="#7952b3">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/signup.css" rel="stylesheet">
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
	<?php
		require_once "db/conn.php";
	?>
<body  class="text-center bg">
<main class="form-signin">
		
        <form action="index.php" method="post" onsubmit="return check()">
            <h1 class="h3 mb-3 fw-normal" style="font-family:georgia; color:#575656">Create new account</h1>
            
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
                            <label for="firstname" class="text-muted" style="font-family:georgia;">First Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>
                            <label for="lastname" class="text-muted" style="font-family:georgia;">Last Name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth" required>
                <label for="dob" class="text-muted" style="font-family:georgia;">Date of birth</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email" class="text-muted" style="font-family:georgia;">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required >
                <label for="password" class="text-muted" style="font-family:georgia ;">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required onchange="val()">
                <label for="confirmpassword" class="text-muted" style="font-family:georgia ;">Confirm password</label>
            </div>
            <p class="text-danger" id="error-signup-msg" style="margin:0"></p>
            <script>
                function check(){
                    if (document.getElementById('password').value ==
                        document.getElementById('confirmpassword').value) {
                            return true;
                    } else {
                        document.getElementById('error-signup-msg').style.color = 'red';
                        document.getElementById('error-signup-msg').innerHTML = "Passwords don't match";
                        return false;
                    }
                }
            </script>
                <button class="w-100 btn btn-lg btn-success mt-4 mb-2 signup-btn" style="font-family:georgia" name="submit" type="submit" >Sign up</button>
        </form>
    </main>

</body>