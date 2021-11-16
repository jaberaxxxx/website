
<?php
	session_start();
  if(isset($_POST['course-exit'])){
    $sign=false;
  }
  else{
    $sign=true;
  }
    require_once 'db/conn.php';
    $b=$crud->getUser();
    $f=0;
    if(isset($_POST['submit'])){//if submit was clicked
        $emailLogin=$_POST['email'];
        $passwordLogin=$_POST['password'];
        while($a = $b->fetch(PDO::FETCH_ASSOC)){
            if($a['email'] == $emailLogin && $a['pass'] == $passwordLogin){
                $_SESSION['email'] = $emailLogin;
                $_SESSION['password'] = $passwordLogin;//if email and password exist we login and save the email and password in the session array
                $_SESSION['firstname']=$a['firstname'];
                $_SESSION['lastname']=$a['lastname'];
                $_SESSION['dateofbirth']=$a['dateofbirth'];
                $sign=false;
                $f++;
                break;//break with f>0
            }
                    
            else{
                $f=0;
            }
        }
        if($f==0){//if wrong email or wrong password
?>
            <script type="text/javascript">
                alert("Wrong Username or Password");
                location="login.php";
            </script>
<?php

        }
    }
    $issuccess = true;
		if(isset($_POST['sign-out'])){
			$sign = true;
		    session_unset();
        	session_destroy();
		}
		if(isset($_POST['submit-signup'])){
			$fname=$_POST['firstname'];
			$lname=$_POST['lastname'];
			$dob=$_POST['dob'];
			$email=$_POST['emaill'];
			$password=$_POST['pass'];
			while($c = $b->fetch(PDO::FETCH_ASSOC)){
				if($c['email'] == $email){
					$issuccess = false;
					break;
				}
				else{
					$issuccess = true;
				}
			}
			if(!$issuccess){
				?>
				<script>
					alert("Error: username or email already found");
					location="signup.php";
				</script>
				<?php
			}
			else{
				$issuccess=$crud->insert($fname,$lname,$dob,$email,$password);
				if(!$issuccess){
					?>
					<script>
						alert("There was an error");
						location="signup.php";
					</script>
					<?php
				}
				else{
							$_SESSION['email'] = $email;
							$_SESSION['password'] = $password;//if email and password exist we login and save the email and password in the session array
							$_SESSION['firstname']=$fname;
							$_SESSION['lastname']=$lname;
							$_SESSION['dateofbirth']=$dob;
							$sign = false;
						?>
					<?php
				}
			}
		}

    //else if everything works then we excute the following code
    require_once 'includes/header.php';
    
?>
  <div id="home"></div>
  <button type="button" class="btn btn-success  btn-lg" id="btn-back-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
  </button>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="me-md-3 pt-3 w-100 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-5 py-5" style="color:#198754">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-book my-3" viewBox="0 0 16 16">
          <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </svg>
        <h1 style="line-height:70px;">Welcome to UTDC!<br>Where everything is free</h1><a class="btn btn-success my-4 d-grid col-7 mx-auto" href="signup.php">Sign up</a>
        <br><a href="#content" onclick="showmore()" id="show-more" class="link-success" style="text-decoration:none;">Want to learn more? Learn More</a>
      </div>
    </div>
    <div class="me-md-3 w-100 pt-3 px-3 pt-md-5 px-md-5">
      <img src="images/intro.gif" alt="intro" width="100%" height="100%">
    </div>
  </div>
  
  <hr class="my-5 text-success container" id="content">
  <div id="learn-more" style="display:none">
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

          <h2>Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <?php if($sign==true){?>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          <?php } 
          else{
            ?>
            <p><a class="btn btn-secondary" href="aboutus.php">more details &raquo;</a></p>
            <?php
          }
          ?>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

          <h2>Heading</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

          <h2>Heading</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div id="about"></div>

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title></svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    <?php
      if($sign==false){
        echo $_SESSION['email'];
      }
    ?>
    </footer>
  
  </main>
  <?php
      require_once 'includes/footer.php';
  ?>